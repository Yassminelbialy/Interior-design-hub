<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    public function index()
    {
        // $projects = Project::all();
        $projects = DB::table('projects')
                ->limit(6)
                ->get();
        return view('home')->with('projects',$projects);
    }
}
