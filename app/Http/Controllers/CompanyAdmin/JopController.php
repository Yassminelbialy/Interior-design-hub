<?php

namespace App\Http\Controllers\CompanyAdmin;
use App\Http\Controllers\Controller;
use App\Jop;
use Illuminate\Http\Request;

class JopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jops= Jop::all();
        return view('CompanyAdmin/jopindex',["jops"=>$jops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('CompanyAdmin.jopcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jop=new Jop;
        $jop->title= $request->title;
        $jop->description= $request->description;
        $jop->location= $request->location;
        $jop->requirements= $request->requirements;
        $jop->jopType= $request->jopType;

        $jop->save();
        return redirect('/companypanel/jops');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $jop=Jop::findOrFail($id);
        $applicant= $jop->applicants;
        return view('CompanyAdmin.jopshow',['jop'=>$jop,'applicants'=>$applicant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $jop=Jop::findOrFail($id);
        return view('CompanyAdmin.jopedit',['jop'=>$jop]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jop= Jop::find($id);
        $jop->title= $request->title;
        $jop->description= $request->description;
        $jop->location= $request->location;
        $jop->requirements= $request->requirements;
        $jop->jopType= $request->jopType;

        $jop->save();
        return redirect('/companypanel/jops');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $jop=Jop::find($id);       
        $jop->delete();
        return redirect('/companypanel/jops');
    }
}
