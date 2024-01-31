<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UpdateProjectController extends Controller
{
    public function updateProject(Request $request){
        DB::table('project')
    ->where('num', $request->num) 
    ->update(["num"=>$request->num,
    "title"=>$request->title,
    "disc"=>$request->disc,
    "image"=>$request->image]);
    return $request;
    }




}
