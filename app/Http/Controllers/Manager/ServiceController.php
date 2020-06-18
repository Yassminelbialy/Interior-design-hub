<?php

namespace App\Http\Controllers\Manager;
use App\Http\Controllers\Controller;
use Uuid ;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services= Service::all();
        return view('manager/serviceIndex',["services"=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('manager.serviceAdd');
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
            $desti='images/service/';
            $files->move($desti,$path);
            $req['image']=$path;
        }
    
            $service = Service::create($req);
            
            return redirect('/manager/service');
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
        $service=Service::findOrFail($id);
        return view('manager.serviceEdit',['service'=>$service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $req=$request->all();        
        $path = public_path()."/images/service/".$service->image;
        unlink($path);       
        if ($files = $request->file('image'))
       {
            $uuid =Uuid::generate()->string;
            $path=$uuid.".".$request->file('image')->getClientOriginalExtension();
            $desti='images/service/';
            $files->move($desti,$path);
            $req['image']=$path;                        
        }
        $service = $service->update($req);
                  
        return redirect(route('manager.service.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        
        $service->delete();
        return redirect('/manager/service');
    }
}
