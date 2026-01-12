<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Services\TotalServiceInterface;
use App\Services\AuthService;
use App\Models\Total;
use Illuminate\Support\Facades\Auth;


class TotalService implements TotalServiceInterface {
    protected $authService;
    protected $userService;
    public function __construct(
        AuthServiceInterface $authService,
        TotalTypeServiceInterface $totalTypeService,
        ProgramServiceInterface $programService,
        UserServiceInterface $userService)
    {
        $this -> authService = $authService;
        $this -> userService = $userService;
        $this -> totalTypeService = $totalTypeService;
    }
    public function storeTotals(Request $request){
        $request->validate([
            'day' =>  'required|date',
            'total' => 'required|array',
        ]);

        $day = $request->day;
        $data = $request->total;
        $now = now();

        foreach($data as $userId => $programs){
            foreach ($programs as $programId => $types) {
                foreach ($types as $typeId => $amount) {
                    if($amount != null && $amount !== ''){
                        $parsedTotalsArray[] = [
                            'user_id' => $userId,
                            'program_id' => $programId,
                            'type_id' => $typeId,
                            'amount' => $amount,
                            'day' => $day,
                            'created_at' => $now,
                            'updated_at' => $now
                        ];
                    }
                }
            }
        }
        foreach(array_chunk($parsedTotalsArray, 1000) as $chunk){
            Total::insert($chunk);
        }
        return back()->with('success', 'Reporte realizado con éxito');
    }

    public function reportTotals(Request $request){
        $starting_date = $request->starting_date ?? now()->toDateString();
        $ending_date = $request->ending_date ?? $starting_date;

        $user = Auth::user();
        $admin = $user->role == "admin";
        unset($user->password);

        if($admin){
            $listsIds = $request->input('lists');
            if(empty($listsIds)){
                $listsIds = $this->userService->getUsersId();
            }
        } else {
            $listsIds = [$user->id];
        }

        $typesIds = $request->input('types');
        if(empty($typesIds)){
            $typesIds = $this->totalTypeService->listTotalTypesId();
        }

        $resultArray = Total::whereIn("user_id", $listsIds)
            ->whereIn('type_id', $typesIds)
            ->whereBetween('day', [$starting_date, $ending_date])
            ->selectRaw('user_id, program_id, type_id, SUM(amount) as total_amount')
            ->groupBy('user_id', 'program_id', 'type_id')
            ->get();

        $totals = [];
        foreach($resultArray as $record){
            $totals[$record->user_id][$record->program_id][$record->type_id] = $record->total_amount;
        }

        return $totals;
        }
    }

