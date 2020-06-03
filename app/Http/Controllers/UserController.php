<?php

namespace App\Http\Controllers;

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
        return view('home')->with('projects',$projects);
    }
    public function view($id){
        $project = Project::find($id);
        $relProjects=ProjectImage::where('project_id','=',$id)->get();
        return view('projectView',['project'=>$project,'relProjects'=>$relProjects]);

    }
}
