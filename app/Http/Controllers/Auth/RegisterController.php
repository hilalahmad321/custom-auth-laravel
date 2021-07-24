<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view("Auth.register");
    }

    public function add_admin(Request $request)
    {
        // return $request->input();

        $request->validate([
            "fname" => "required",
            "lname" => "required",
            "email" => "required|email",
            "password" => "required|min:5|max:12"
        ]);
        $admin = new Admin();

        $admin->fname = $request->fname;
        $admin->lname = $request->lname;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);

        $admin->save();
        return redirect(route("auth.login"))->with("status", "Register Successfully Now you Login");
    }
}