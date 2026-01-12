<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Services\TotalServiceInterface;
use App\Services\AuthService;
use App\Models\Total;


class TotalService implements TotalServiceInterface {
    protected $authService;
    public function __construct(
        AuthServiceInterface $authService,
        TotalTypeServiceInterface $totalTypeService,
        ProgramServiceInterface $programServiceInterface)
    {
        $this -> authService = $authService;
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
        // {{ $totals[$list->id][$program->id][$type->id] }}
        $starting_date = $request->starting_date;
        $ending_date = $request->ending_date;
        $lists = $request->lists;

    }
}
