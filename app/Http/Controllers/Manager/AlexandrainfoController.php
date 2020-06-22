<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;

use App\Alexandrainfo;
use App\Contact;
use Illuminate\Http\Request;

class AlexandrainfoController extends Controller
{

    public function index()
    {
        $ceoInfo = Alexandrainfo::where('company_id', '=', null)->get();
        return view('manager/alexandrainfoindex', ["ceoInfo" => $ceoInfo]);
    }

    public function edit($id)
    {
        $ceoInfo = Alexandrainfo::findOrFail($id);
        return view('manager.alexandrainfoedit', ["ceoInfo" => $ceoInfo]);
    }
    public function update(Request $request, $id)
    {
        $ceo = Alexandrainfo::find($id);
        $ceo->name = $request->name;
        $ceo->hint = $request->hint;
        $ceo->statement = $request->statement;

        $ceo->lat = $request->lat;
        $ceo->lng = $request->lng;
        // first request img then give parameters to store
        // $ceo->image=$request->image->store('images','public');
        // $ceo->video=$request->video->store('videos','public');
        // upload img to path , assign the img request to real file, then get name as date upload
        if ($files = $request->file('image')) {
            $destinationPath = 'images/';
            $Image = $files->getClientOriginalName();
            $files->move($destinationPath, $Image);
            $ceo->image = $Image;
        }
        if ($files = $request->file('video')) {
            $destinationPath = 'videos/';
            $Video = $files->getClientOriginalName();
            $files->move($destinationPath, $Video);
            $ceo->video = $Video;
        }

        $ceo->save();
        // dd($ceo);
        return redirect('/manager/alexandra');
    }
}
