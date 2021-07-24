<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function login()
    {
        return view("Auth.login");
    }

    public function Loggined(Request $request)
    {
        // return $request->input();
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:5|max:12"
        ]);
        $admin = Admin::where("email", "=", $request->email)->first();
        if (!$admin) {
            return redirect(route("auth.login"))->with("status", "Invalid email and password");
        } else {
            if (Hash::check($request->password, $admin->password)) {
                // $logined=[
                        
                // ];
                $request->session()->put("loggeduser" , $admin->id);
                return redirect(route("dashboard"));
            } else {
                return redirect(route("auth.login"))->with("status", "Invalid email and password");
            }
        }
    }

}