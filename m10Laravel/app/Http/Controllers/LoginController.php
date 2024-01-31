<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        $name = $request->input('name');
        $password = $request->input('password');

        // Check if user with the provided credentials exists in the database
        $user = DB::table("user")->where('name', $name)->where('pass', $password)->first();

        if ($user) {
            // If user exists, return a view
            return view('projectAdmin', compact('user'));
        } else {
            // If user doesn't exist, return an error message
            return "Gorlocks are slurping yoghurt";
        }
    }
}
