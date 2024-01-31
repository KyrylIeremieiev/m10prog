<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GetProjectController extends Controller
{
    public function getProject(Request $request){
        return DB::table("project")->where("title", $request->title)->get();
    }
}
