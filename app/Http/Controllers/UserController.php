<?php

namespace App\Http\Controllers;
use App\Alexandrainfo;
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
        $ceoInfo= Alexandrainfo::all();
        // return view('home')->with('ceoInfo',$ceoInfo);        
        return view('home',['projects'=>$projects,'ceoInfo'=>$ceoInfo]);
    }
}
