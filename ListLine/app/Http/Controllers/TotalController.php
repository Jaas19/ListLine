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

class TotalController extends Controller
{
    protected $messageService;
    protected $programService;
    protected $totalTypeService;
    protected $totalService;
    protected $userService;
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

    public function pdf(Request $request){
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
        $messages = $this->messageService->listMessages();
        $admin = Auth::user()->role == "admin";
        $user = Auth::user();
        $programs = $this->programService->listActivePrograms();
        $types = $this->totalTypeService->listActiveTotalTypes();
        $users = $this->userService->basicUsersListing();
        return view("total.create", compact("users", "programs", "types"));
    }

    public function store(Request $request){
        return $this-> totalService -> storeTotals($request);
    }
}
