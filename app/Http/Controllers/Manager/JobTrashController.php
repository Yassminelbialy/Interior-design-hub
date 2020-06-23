<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jop;
use Illuminate\Support\Facades\Redirect;

class JobTrashController extends Controller
{
    public function index()
    {
        $jops = Jop::onlyTrashed()->get();

        return view('manager.jobTrash', ["jops" => $jops]);
    }
    public function edit($id)
    {
        $jops = Jop::withTrashed()->where('id', $id)->first();
        $jops->restore();
        return Redirect()->back();
    }

    public function destroy($id)
    {
        $jop = Jop::withTrashed()->where('id', $id)->first();
        $jop->forceDelete();
        return Redirect()->back();
    }
}
