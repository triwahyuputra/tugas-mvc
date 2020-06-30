<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function form(){
        return view('form');
    }

    public function welcome(){
        return view('welcome');
    }

    public function welcome_post(Request $request){
        $first_name = $request["first-name"];
        $last_name = $request["last-name"];
        return view('welcome', ["first_name" => $first_name, "last_name" => $last_name]);
    }
}
