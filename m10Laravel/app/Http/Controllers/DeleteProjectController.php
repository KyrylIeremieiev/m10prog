<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DeleteProjectController extends Controller
{
    public function deleteProject(Request $request){
        DB::table('project')->where('title', $request->title)->delete();
        return ["request"=>"success"];
    }
}
