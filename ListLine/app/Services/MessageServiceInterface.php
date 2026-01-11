<?php
namespace App\Services;
use Illuminate\Http\Request;
interface MessageServiceInterface {
    public function listMessages();
    public function getmessage($id);
    public function createMessage(Request $request);
}