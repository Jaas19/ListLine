<?php
namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessageService implements MessageServiceInterface{
    public function listMessages()
    {
        return Message::where("receiver_id", "=", Auth::id())->with('transmissor')->get();
    }

    public function getMessage($id){
        return Message::where("id", "=", $id)->first();
    }
    public function createMessage(Request $request)
    {
        $rules = [
            "receiver_id" => ["required", "exists:users,id"],
            "header" => "required",
            "body" => "required",
            "image" => ["nullable", "image", "mimes:jpeg,png,jpg", "max:2048"]
        ];
        $messages = [
            "receiver_id.required" => "Seleccione un destinatario",
            "receiver_id.exists" => "El destinatario seleccionado no existe",
            "header.required" => "Escriba el título del mensaje",
            "body.required" => "Escriba el cuerpo del mensaje",
            "image.image" => "Introduzca una imagen válida",
            "image.max" => "La imagen no puede superar los 2MB"
        ];
        $validatedData = $request->validate($rules, $messages);
        $validatedData['transmissor_id'] = Auth::id();

        $image = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('messages', 'public');
        }
        $validatedData['image'] = $image;
        return Message::create($validatedData);
    }
}