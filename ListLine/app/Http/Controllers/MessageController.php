<?php

namespace App\Http\Controllers;

use App\Services\MessageServiceInterface;
use App\Services\UserServiceInterface;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller{
    protected $messageService;
    protected $userService;
    public function __construct(MessageServiceInterface $messageService, UserServiceInterface $userService) {
        $this->messageService = $messageService;
        $this->userService = $userService;
    }
    public function index(Request $request){
        $user = Auth::user();
        $message = $this->messageService->getMessage($request->id);
        if($message && Auth::id() == $message->receiver_id){
            $messages = $this->messageService->listMessages();
            $admin = $user->role == "admin";
            return view('message.index', compact("user", "messages", "message", "admin"));
        } else {
            return redirect("/", );
        }
    }
    public function create(){
        $users = $this->userService->listUsers(Auth::id());
        $user = Auth::user();
        $admin = $user->role == "admin";
        $messages = $this->messageService->listMessages();
        return view('message.create', compact("users", "user", "admin", "messages"));
    }

    public function store(Request $request){
        if($this->messageService->createMessage($request)){
            return redirect()->back()->with('messageResponse', 'Mensaje enviado exitosamente.');
        } else {
            return redirect()->back()->withErrors(['error' => 'No se pudo enviar el mensaje.']);
        }
    }
}
