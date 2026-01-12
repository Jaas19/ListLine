<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramService implements ProgramServiceInterface{
    public function listPrograms(){
        return Program::all();
    }
    public function listActivePrograms(){
        return Program::where('status', '1')->get();
    }
    public function listProgramsIds(){
        return Program::where('status', '1')->pluck('id')->toArray();
    }
}
