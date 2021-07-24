<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout()
    {
        if (session()->has("loggeduser")) {
            session()->pull("loggeduser");
            return redirect(route("auth.login"));
        }
    }
}