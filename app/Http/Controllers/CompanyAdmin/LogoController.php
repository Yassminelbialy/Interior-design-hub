<?php

namespace App\Http\Controllers\CompanyAdmin;
use App\Http\Controllers\Controller;
use App\Logo;
use Illuminate\Http\Request;
use Uuid ;

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
        return view('CompanyAdmin/logoindex',["logo"=>$logos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('CompanyAdmin.logocreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req=$request->all();

    if ($files = $request->file('image'))
    {
                    $uuid =Uuid::generate()->string;
                    $path=$uuid.".".$request->file('image')->getClientOriginalExtension();
                    $desti='images/logo/';
                    $files->move($desti,$path);
                    $req['image']=$path;
                
    }

    $logo = Logo::create($req);
        
        return redirect('/companypanel/logo');
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
        return view('CompanyAdmin.logoedit',['logo'=>$logo]);
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
        $req=$request->all();
        if ($files = $request->file('image'))
        {
                        $uuid =Uuid::generate()->string;
                        $path=$uuid.".".$request->file('image')->getClientOriginalExtension();
                        $desti='images/logo/';
                        $files->move($desti,$path);
                        $req['image']=$path;                        
        }

        $logo = $logo->update($req);           
        return redirect(route('company.logo.index'));
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
        return redirect('/companypanel/logo');
    }
}
