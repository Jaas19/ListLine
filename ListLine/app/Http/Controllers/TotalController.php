<?php

namespace App\Http\Controllers;
use App\Services\MessageServiceInterface;
use App\Services\ProgramServiceInterface;
use App\Services\TotalTypeServiceInterface;
use App\Services\TotalServiceInterface;
use App\Services\UserServiceInterface;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use App\Models\Program;
use App\Models\TotalType;
use App\Models\User;

class TotalController extends Controller
{
    protected $messageService;
    protected $programService;
    protected $totalTypeService;
    protected $totalService;
    protected $userService;
    protected $messages = [
        'period.required' => 'Debes seleccionar un periodo.',
        'period.in'       => 'El periodo seleccionado no es válido.',

        'start_date.required_if' => 'La fecha inicial es obligatoria en períodos personalizados.',
        'start_date.before'      => 'La fecha inicial debe ser anterior a la fecha final.',

        'end_date.required_if' => 'La fecha final es obligatoria en períodos personalizados.',
        'end_date.after'       => 'La fecha final debe ser posterior a la fecha inicial.',
        'end_date.before_or_equal' => 'No se pueden generar reportes futuros',

        'users.array'   => 'Los usuarios no son válidos.',
        'users.*.exists' => 'Al menos un usuario no existe.',
        'users.prohibited' => 'No tienes permiso para ver reportes de otros usuarios'];
    protected $translations = [
        "daily" => "Diario",
        "weekly" => "Semanal",
        "monthly" => "Mensual",
        "annually" => "Anual",
        "general" => "General",
        "custom" => "Personalizado",
    ];
    public function __construct(
    MessageServiceInterface $messageService,
    ProgramServiceInterface $programService,
    TotalServiceInterface $totalService,
    TotalTypeServiceInterface $totalTypeService,
    UserServiceInterface $userService)
    {
        $this->messageService = $messageService;
        $this->programService = $programService;
        $this->totalTypeService = $totalTypeService;
        $this->totalService = $totalService;
        $this->userService = $userService;
    }

    public function index(){
        $users = Auth::user()->role == "admin"
            ? $this->userService->basicUsersListing()
            : [];
        return view("report.index", compact("users"));
    }

    public function pdf(Request $request){
        $isAdmin = Auth::user()->role == "admin";
        $validatedData = $request->validate(
            [
            "period" => "required|in:daily,weekly,monthly,annually,custom,general",
            "start_date" => "nullable|required_if:period,custom|date|before:end_date",
            "end_date" => "nullable|required_if:period,custom|date|after:start_date|before_or_equal:today",
            "users" => $isAdmin ? "nullable|array" : "prohibited",
            "users.*" => $isAdmin ? 'exists:users,id' : "exclude",
            ], $this->messages
        );

        try{
            $data = $this->totalService->getPdfInfo($validatedData);

            $totals = [];

            foreach($data as $record){
                $uId = $record->user_id;
                $pId = $record->program_id;
                $tId = $record->type_id;

                if(!isset($totals[$uId][$pId][$tId])){
                    $totals[$uId][$pId][$tId] = 0;
                }

                $totals[$uId][$pId][$tId] += $record->amount;
            }

            if(!$isAdmin) {
                $users = [Auth::user()];
            } elseif (isset($validatedData['users'])){
                $users = User::whereIn('id', $validatedData['users'])->orderBy('name')->get();
            } else {
                $users = $this->userService->basicUsersListing();
            }

            $programs = Program::where('status', 1)->orderBy('name')->get();
            $types = TotalType::where('status', 1)->orderBy('name')->get();
            $period = $validatedData['period'];
            $period = $this->translations[$period];

            $dates = $this->totalService->interpretPeriod($validatedData['period'], $validatedData);
            $startDate = $dates['start'];
            $endDate = $dates['end'];

            return Pdf::loadView("total.pdf", [
                'totals' => $totals,
                'users' => $users,
                'programs' => $programs,
                'types' => $types,
                'period' => $period,
                'startDate' => $startDate,
                'endDate' => $endDate,
            ])->stream();
        } catch(\Exception $e){
            return back()->with("error", "Hubo un error, intente de nuevo más tarde.")->withInput();
        }
    }

    public function pdf2(Request $request){
        $totals = $this->totalService->reportTotals($request);

        $user = Auth::user();
        $admin = $user->role == "admin";

        if($admin){
            $users = $request -> users ?? $this -> userService->basicUsersListing();
        } else {
            $users = [$user];
        }
        $programs = $request -> programs ?? $this -> programService->listActivePrograms();
        $types = $request -> programs ?? $this -> totalTypeService->listActiveTotalTypes();
        return Pdf::loadView("total.pdf", [
            'totals' => $totals,
            'users' => $users,
            'programs' => $programs,
            'types' => $types
        ])->stream();
    }

    public function create(){
        $programs = $this->programService->listActivePrograms();
        $types = $this->totalTypeService->listActiveTotalTypes();
        $users = $this->userService->basicUsersListing();
        return view("total.create", compact("users", "programs", "types"));
    }

    public function store(Request $request){
        return $this-> totalService -> storeTotals($request);
    }
}
