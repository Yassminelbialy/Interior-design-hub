<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DB;
use App\Alexandrainfo;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $ceoInfo= Alexandrainfo::all();
       // $ceoInfo= DB::table('alexandrainfos')->get();

        return view('home')->with('ceoInfo',$ceoInfo);
    }

  
}