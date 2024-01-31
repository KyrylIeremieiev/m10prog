<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function showProject($variable){
        $data = DB::table('project')->where('num', $variable)->get();
        return view('project', ['data'=>$data]);
    }
}
