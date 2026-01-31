<?php

namespace App\Http\Controllers;
use App\Services\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    protected $messages = [
        "status.required" => "El estado es obligatorio.",
        "status.in" => "El estado no es válido.",
    ];
    protected $userService;
    public function __construct(UserServiceInterface $userService) {
        $this->userService = $userService;
    }

    public function index(){
        $activeUsers = User::where("role", "user")->where("status", 1)->get();
        $inactiveUsers = User::where("role", "user")->where("status", 0)->get();
        return view('user.index', compact("activeUsers", "inactiveUsers"));
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

    public function status(Request $request, User $user) {
        $validations = [
            'status' => 'required|in:1,0',
        ];
        $validatedData = $request->validate($validations, $this->messages);
        try {
            $user->update($validatedData);
            $status = $request->status == 1 ? 'Activo' : 'Suspendido';
            return response()->json([
                'success' => true,
                'message' => 'Usuario actualizado correctamente',
                'status' => $status,
                'raw_status' => $request->status
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al actualizar el usuario',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
