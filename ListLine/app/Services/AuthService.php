<?php

namespace App\Services;
use App\Services\AuthServiceInterface;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthService implements AuthServiceInterface{
    public function login($data){

        $rules = [
            'email' => ['required', 'email'],
            'password' => ['required']
        ];

        $messages = [
            'email.required' => "Por favor, introduzca el correo",
            'email.email' => "Correo inválido",
            'password.required' => "Por favor, introduzca la contraseña"
        ];

        $user = $data->validate($rules, $messages);
        if(Auth::attempt($user)){
            $data->session()->regenerate();
            return true;
        }
        return false;

    }
    public function logout(Request $data){
        Auth::logout();
        $data->session()->invalidate();
        $data->session()->regenerateToken();
    }
}