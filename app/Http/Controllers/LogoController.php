<?php

namespace App\Http\Controllers;
use App\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos= Logo::all();
        return view('manager/logoindex',["logo"=>$logos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('manager.logocreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $logo=new Logo;
     
        if ($files = $request->file('image')) {
            $destinationPath = 'images/logo/'; 
            $Image = $files->getClientOriginalName();
            $files->move($destinationPath, $Image);
            $logo->image=$Image; 
        }

        $logo->save();
        return redirect('/manager/logo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logo=Logo::findOrFail($id);
        return view('manager.logoedit',['logo'=>$logo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $logo=Logo::find($id);
        $path = public_path()."/images/logo/".$logo->image;
        unlink($path);      
        if ($files = $request->file('image')) {
            $destinationPath = 'images/logo'; 
            $Image = $files->getClientOriginalName();
            $files->move($destinationPath, $Image);
            $logo->image=$Image; 
        }

        $logo->save();
        return redirect('/manager/logo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $logo=Logo::find($id);
        $path = public_path()."/images/logo/".$logo->image;
        unlink($path);
        $logo->delete();
        return redirect('/manager/logo');
    }
}
