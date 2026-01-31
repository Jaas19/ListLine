<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthServiceInterface;
use App\Services\UserServiceInterface;
use App\Services\MessageServiceInterface;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $authService;
    protected $userService;
    protected $messageService;
    public function __construct(AuthServiceInterface $authService, UserServiceInterface $userService, MessageServiceInterface $messageService) {
        $this->authService = $authService;
        $this->userService = $userService;
        $this->messageService = $messageService;
    }
    public function index(){
        if(!$this->userService->checkIfAdminExists()){
            return view('auth.register');
        } elseif (Auth::id()) {
            return view('dashboard.index');
        } else {
            if(isset($response)){
                return view('auth.login', compact('response'));
            } else {
                return view('auth.login');
            }
        }
    }

    public function store(Request $data){
        if($this->userService->registerUser($data)){
            return redirect()->route('auth.index')->with('registerResponse', 'success');
        } else {
            return redirect()->back()->withInput()->with('registerResponse', 'error');
        }
    }

    public function login(Request $data){
        if($this->authService->login($data)){
            return redirect('/');
        } else {
            return back()->withInput()->withErrors(['email' => 'Datos incorrectos']);
        }
    }
    public function logout(Request $data){
        $this->authService->logout($data);
        return redirect("/");
    }
}
