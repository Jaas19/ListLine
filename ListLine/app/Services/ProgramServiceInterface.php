<?php

namespace App\Services;

Interface ProgramServiceInterface
{
    public function listPrograms();
    public function listActivePrograms();
    public function listProgramsIds();
}
