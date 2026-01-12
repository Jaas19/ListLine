<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\TotalType;

class TotalTypeService implements TotalTypeServiceInterface{
    public function listTotalTypes(){
        return TotalType::all();
    }
}
