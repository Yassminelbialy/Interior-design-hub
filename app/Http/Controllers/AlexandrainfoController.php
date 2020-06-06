<?php

namespace App\Http\Controllers;

use App\Alexandrainfo;
use App\Contact;
use Illuminate\Http\Request;

class AlexandrainfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ceoInfo= Alexandrainfo::all();
        return view('manager/alexandrainfoindex',["ceoInfo"=>$ceoInfo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alexandrainfo  $alexandrainfo
     * @return \Illuminate\Http\Response
     */
    public function show(Alexandrainfo $alexandrainfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alexandrainfo  $alexandrainfo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ceoInfo=Alexandrainfo::findOrFail($id);
        return view('manager.alexandrainfoedit',["ceoInfo"=>$ceoInfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alexandrainfo  $alexandrainfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ceo=Alexandrainfo::find($id);
        $ceo->name=$request->name;
        $ceo->hint=$request->hint;
        $ceo->statement=$request->statement;
        // first request img then give parameters to store 
        // $ceo->image=$request->image->store('images','public');        
        // $ceo->video=$request->video->store('videos','public');
        // upload img to path , assign the img request to real file, then get name as date upload
        if ($files = $request->file('image')) {
            $destinationPath = 'images/'; 
            $Image = $files->getClientOriginalName();
            $files->move($destinationPath, $Image);
            $ceo->image=$Image; 
        }

       
        if ($files = $request->file('video')) {
            $destinationPath = 'videos/'; 
            $Video = $files->getClientOriginalName();
            $files->move($destinationPath, $Video);
            $ceo->video=$Video; 
        }

        $ceo->save();
        return redirect('/manager/alexandra');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alexandrainfo  $alexandrainfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alexandrainfo $alexandrainfo)
    {
        //
    }
}
