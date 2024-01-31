<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CreateProjectController extends Controller
{
    public function createProject(Request $request){
        
        $data = [
            "num"=>$request->num,
            "title"=>$request->title,
            "disc"=>$request->disc,
            "image"=>$request->image
        ];;
        DB::table("project")->insert($data);
        return $data;
    }
}
