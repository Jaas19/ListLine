<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramService implements ProgramServiceInterface{
    public function listPrograms(){
        return Program::all();
    }
}
