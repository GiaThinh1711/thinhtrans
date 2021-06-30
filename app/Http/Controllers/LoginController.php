<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        if($request->method() == "GET")
            return view("auth.login");
        $credentials = $request->only(["email,password"]);
    }
}
