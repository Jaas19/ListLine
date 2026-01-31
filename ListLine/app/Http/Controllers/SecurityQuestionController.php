<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\SecurityQuestion;
use App\Models\User;

class SecurityQuestionController extends Controller
{
    protected $messages = [
        "answer.required" => "La respuesta es obligatoria.",
        "answer.string" => "La respuesta no es válida.",
        "answer.max" => "La respuesta es muy larga",
        "question.required" => "La pregunta es obligatoria.",
        "question.string" => "La pregunta no es válida.",
        "question.max" => "La pregunta es muy larga",
        "email.exists" => "Este correo no está registrado en el sistema.",
        "email.required" => "El correo es obligatorio.",
        "email.email" => "Este correo es inválido.",
    ];

    public function create()
    {
        if (Auth::user()->securityQuestion) {
            return redirect()->route("auth.index")->with('error', 'Ya tienes una pregunta de seguridad.');
        }
        return view("security-question.create");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "question" => "required|string|max:50",
            "answer" => "required|string|max:50",
        ], $this->messages);

        Auth::user()->securityQuestion()->create([
            'question' => $validatedData['question'],
            'answer' => $validatedData['answer'],
        ]);

        return redirect()->route("auth.index")->with('success', 'Pregunta de seguridad guardada.');
    }

    public function edit()
    {
        $securityQuestion = Auth::user()->securityQuestion;

        if (!$securityQuestion) {
            return redirect()->route('security-question.create');
        }

        return view("security-question.edit", compact('securityQuestion'));
    }

    public function update(Request $request)
    {
        $securityQuestion = Auth::user()->securityQuestion;

        $validatedData = $request->validate([
            "question" => "required|string|max:100",
            "answer" => "required|string|max:100",
        ], $this->messages);

        $securityQuestion->update($validatedData);

        return redirect()->route("auth.index")->with('success', 'Pregunta actualizada.');
    }

    public function recover()
    {
        return view("security-question.recover");
    }

    public function verifyRecovery(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], $this->messages);

        $userToRecover = User::where("email", $request->email)->first();
        if (!$userToRecover->securityQuestion) {
            return back()->with('error', 'Este usuario no ha configurado una pregunta de seguridad.');
        }

        $question = $userToRecover->securityQuestion->question;

        return view("security-question.answer", compact("question", "userToRecover"));
    }

    public function answer(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'answer' => "required|string|max:100",
            'password' => "required|string|min:8|confirmed",
        ], $this->messages);

        $correctAnswer = strtolower($user->securityQuestion->answer);
        $userAnswer = strtolower($request->answer);

        if ($correctAnswer == $userAnswer) {

            $user->password = Hash::make($validatedData['password']);
            $user->save();

            return redirect()->route("auth.index")
                ->with("success", "Identidad verificada. Tu contraseña se ha cambiado.");
        } else {
            return back()->with("error", "Respuesta incorrecta.");
        }
    }
}
