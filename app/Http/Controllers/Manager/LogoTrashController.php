<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Logo;
use Illuminate\Support\Facades\Redirect;

class LogoTrashController extends Controller
{
    public function index()
    {
        $logos = Logo::onlyTrashed()->get();

        return view('manager.logoTrash', ["logos" => $logos]);
    }
    public function edit($id)
    {
        $logo = Logo::withTrashed()->where('id', $id)->first();
        $logo->restore();
        return Redirect()->back();
    }
    public function destroy($id)
    {
        $logo = Logo::withTrashed()->where('id', $id)->first();
        $path = public_path() . "/images/logo/" . $logo->image;
        unlink($path);
        $logo->forceDelete();
        return Redirect()->back();
    }
}
