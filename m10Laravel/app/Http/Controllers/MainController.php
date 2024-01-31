<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showMain(){
        $projects = DB::table("project")->get();
        return view("base", ["projects" => $projects]);
    }
}
