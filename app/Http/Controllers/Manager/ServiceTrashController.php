<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use Illuminate\Support\Facades\Redirect;

class ServiceTrashController extends Controller
{

    public function index()
    {
        $services = Service::onlyTrashed()->get();

        return view('manager.serviceTrash', ["services" => $services]);
    }

    public function edit($id)
    {
        $service = Service::withTrashed()->where('id', $id)->first();
        $service->restore();
        return Redirect()->back();
    }
    public function destroy($id)
    {
        $service = Service::withTrashed()->where('id', $id)->first();
        $service->forceDelete();
        return Redirect()->back();
    }
}
