<?php

namespace App\Services;
use App\Services\UserServiceInterface;
use App\Services\AuthService;
use App\Models\User;


class UserService implements UserServiceInterface{
    protected $authService;
    public function __construct(AuthServiceInterface $authService) {
        $this -> authService = $authService;
    }
    public function checkIfAdminExists(){
        if(User::where("role", "=", "admin")->first()){
            return true;
        } else {
            return false;
        }
    }

    public function listUsers($excludedUserId = null){
        if($excludedUserId){
            return User::where("id", '!=', $excludedUserId)->get();
        }
        return User::all();
    }

    public function getUsersId(){
        return User::where('status', '1')->pluck('id')->toArray();
    }

    public function basicUsersListing(){
        return User::where("role", "user")->where("status", "1")->get(["name", "id"]);
    }

    public function registerUser($data){
        $rules = [
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'name' => ['required'],
            'photo' => ['nullable', 'image', 'max:2048']
        ];
        $messages = [
            'email.required' => "Por favor, introduzca un correo",
            'email.email' => "Por favor, ingrese un correo válido",
            'email.unique' => "El correo ya existe",
            'password.required' => "Por favor, introduzca una contraseña",
            'password.min' => "La contraseña es muy corta (8)",
            'name.required' => "Por favor, introduzca un nombre",
            'photo.image' => "Tipo de archivo inválido, introduzca una imagen",
            'photo.max' => "La imagen es muy grande"
        ];

        $validationResult = $data->validate($rules, $messages);
        $url = null;
        if($data->hasFile('photo')){
            $url = $data->file('photo')->store('profilePictures', 'public');
        }


        $userData = [
            'name' => $validationResult['name'],
            'email' => $validationResult['email'],
            'password' => $validationResult['password'],
            'photo' => $url,
            'role' => $this -> checkIfAdminExists() ? 'user' : 'admin'
        ];

        return User::create($userData);
    }
}
