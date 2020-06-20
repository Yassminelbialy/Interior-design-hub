<?php

namespace App\Http\Controllers\CompanyAdmin;
use App\Http\Controllers\Controller;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services= Auth::user()->company->services;
        return view('CompanyAdmin/serviceIndex',["services"=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('CompanyAdmin.serviceCreate');
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
        $review = Auth::user()->company->services()->create($req);
        return redirect('/companypanel/service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service= Auth::user()->company->services()->find($id) ;
        return view('CompanyAdmin.serviceEdit',['service'=>$service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service= Auth::user()->company->services()->find($id);      
        $req=$request->all();
        $service = $service->update($req);
        return redirect(route('company.service.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service= Auth::user()->company->services()->find($id) ;
        $service->delete();
        return redirect('/companypanel/service');
    }
}
