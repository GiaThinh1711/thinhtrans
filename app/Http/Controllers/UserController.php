<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function all()
    {
        $user = User::all();
        return view("user.list", ['user' => $user]);
    }

    public function form()
    {
        return view("user.form");
    }

    public function save(Request $request)
    {
        try {

             User::create([
               "name"=>$request->post("name"),
               "email"=>$request->post("email"),
               "password"=>Hash::make($request->post("password")),
           ]);
//            dd($ud);
            return redirect()->to("admin/user");
        }catch (\Exception $e){
            abort(403);
        }
    }

    public function delete($id){
        DB::table("users")->where("id",$id)->delete();
        return redirect()->to("user");
    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view("user.edit",[
            "user"=>$user,

        ]);
    }

    public function update(Request $request,$id){

        $user = User::findOrFail($id);
        $user->update([
            "name"=>$request->get("name")
        ]);
        return redirect()->to("admin/user");
    }
}
