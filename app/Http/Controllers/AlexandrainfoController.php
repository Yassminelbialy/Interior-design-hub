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
        // $contactInfo= Contact::all();

        return view('manager/alexandrainfoindex',["ceoArray"=>$ceoInfo]);
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
    public function edit(Alexandrainfo $alexandrainfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alexandrainfo  $alexandrainfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alexandrainfo $alexandrainfo)
    {
        //
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
