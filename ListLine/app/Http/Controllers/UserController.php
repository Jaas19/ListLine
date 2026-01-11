<?php

namespace App\Http\Controllers;
use App\Services\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserServiceInterface $userService) {
        $this->userService = $userService;
    }

    public function create(Request $request){
        if(Auth::user()->role == "admin"){
            return view('auth.register');
        } else {
            return redirect("/");
        }
    }

    public function store(Request $data){
        if($this->userService->registerUser($data)){
            $res = true;
            return view('auth.login', compact("res"));
        } else {
            return view('auth.register')->with('nores', 'true');
        }
    }
}
