<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    protected $bannedViews = ["report.create", "user.create"];

    protected $allowedViews = ["message.create", "message.index", 
                                'message.detail', "dashboard.index", "report.index"];

    public function handleView($view){
        if(Auth::check()){
            $admin = Auth::user()->role == "admin";
            $user = Auth::user();
            return view("$view.index", compact("admin", "user"));
        } else {
            return redirect()->route('auth.login');
        }
    }

    public function allowView($view){
        return $this->bannedViews[$view];
    }
    public function handleSpecificView($view, $subview){
    if(!Auth::check()){
        return redirect()->route('auth.index');
    } else {
        $admin = Auth::user()->role == "admin";
        $user = Auth::user();
        return view("$view.$subview", compact("admin", "user"));
    }

    /*
    if($this->allowView($view) !== $subview 
    || Auth::user()->role === 'admin'){
        return view("$view.$subview");
    } else {
        return redirect()->route('auth.index');
    }*/
    }
}
