<?php

namespace App\Http\Controllers;
use App\Services\UserServiceInterface;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TotalController extends Controller{
    public function pdf(){
        return Pdf::loadView("total.pdf", [
            'totals' => []
        ])->stream();
    }
}