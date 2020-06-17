<?php

namespace App\Http\Controllers\CompanyAdmin;
use App\Http\Controllers\Controller;

use App\Alexandrainfo;
use App\Contact;
use Illuminate\Http\Request;
use Auth;


class AlexandrainfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ceoInfo= Alexandrainfo::all();

        // return view('CompanyAdmin/alexandrainfoindex',["ceoInfo"=>$ceoInfo]);
        $info =Auth::user()->company->info;
        if($info)
        {
            return view('CompanyAdmin/alexandrainfoindex',["ceoInfo"=>[$info] ]);
        }else{
            return view('CompanyAdmin.alexandrainfoadd');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
      $z=  Auth::user()->company->info()->create($request->all());
        return redirect(route('company.alexandra.index'));
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
        return view('CompanyAdmin.alexandrainfoedit',["ceoInfo"=>$ceoInfo]);
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
        return redirect('/companypanel/alexandra');

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
