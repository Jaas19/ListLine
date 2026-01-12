<?php

namespace App\Services;
use Illuminate\Http\Request;

Interface TotalServiceInterface
{
    public function storeTotals(Request $request);
}
