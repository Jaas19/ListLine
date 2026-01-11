<?php

namespace App\Services;
use Illuminate\Http\Request;

interface AuthServiceInterface {
    public function login($data);
    public function logout(Request $data);
}