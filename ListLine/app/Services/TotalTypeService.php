<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\TotalType;

class TotalTypeService implements TotalTypeServiceInterface{
    public function listTotalTypes(){
        return TotalType::all();
    }
    public function listActiveTotalTypes(){
        return TotalType::where('status', '1')->get();
    }
    public function listTotalTypesId(){
        return TotalType::where('status', '1')->pluck('id')->toArray();
    }
}
