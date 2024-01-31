<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginPageController extends Controller
{
    public function login(){
        return view("login");
    }
}
    
