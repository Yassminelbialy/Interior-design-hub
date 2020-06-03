<?php

namespace App\Http\Controllers;
use App\Alexandrainfo;
use Illuminate\Http\Request;
use App\Project;
use App\ProjectImage;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    public function index()
    {
        $projects = Project::limit(6)->get();
        $ceoInfo= Alexandrainfo::all();
        // return view('home')->with('ceoInfo',$ceoInfo);        
        return view('home',['projects'=>$projects,'ceoInfo'=>$ceoInfo]);
    }
    public function view($id){
        $project = Project::find($id);
        $relProjects=ProjectImage::where('project_id','=',$id)->get();
        return view('projectView',['project'=>$project,'relProjects'=>$relProjects]);

    }
}
