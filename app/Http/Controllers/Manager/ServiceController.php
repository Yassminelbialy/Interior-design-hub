<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('manager/serviceIndex', ["services" => $services]);
    }


    public function create()
    {
        return view('manager.serviceAdd');
    }

    public function store(Request $request)
    {
        $req = $request->all();
        $service = Service::create($req);
        return redirect('/manager/service');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('manager.serviceEdit', ['service' => $service]);
    }

    public function update(Request $request, Service $service)
    {
        $req = $request->all();
        $service = $service->update($req);
        return redirect(route('manager.service.index'));
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect('/manager/service');
    }
}
