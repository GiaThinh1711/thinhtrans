<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        if($request->method() == "GET")
            return view("auth.login");
        $credentials = $request->only(["email,password"]);
        if(Auth::guard("admin")->attempt($credentials)){
            return redirect()->to("web");
        }
        return redirect()->back()->withInput();
    }
}
