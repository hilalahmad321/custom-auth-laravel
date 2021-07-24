<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard()
    {
        $user_id=session("loggeduser");
        // dd($user_id);
        $data=admin::where("id","=",$user_id)->first();
        return view("dashboard",["users"=>$data]);
    }
}