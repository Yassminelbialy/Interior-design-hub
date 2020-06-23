<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Logo;
use Illuminate\Http\Request;
use Uuid;

class LogoController extends Controller
{

    public function index()
    {
        $logos = Logo::all();
        return view('manager/logoindex', ["logo" => $logos]);
    }

    public function create()
    {
        return view('manager.logocreate');
    }

    public function store(Request $request)
    {
        $req = $request->all();

        if ($files = $request->file('image')) {
            $uuid = Uuid::generate()->string;
            $path = $uuid . "." . $request->file('image')->getClientOriginalExtension();
            $desti = 'images/logo/';
            $files->move($desti, $path);
            $req['image'] = $path;
        }

        $logo = Logo::create($req);

        return redirect('/manager/logo');
    }

    public function edit($id)
    {
        $logo = Logo::findOrFail($id);
        return view('manager.logoedit', ['logo' => $logo]);
    }

    public function update(Request $request, $id)
    {
        $logo = Logo::find($id);
        $path = public_path() . "/images/logo/" . $logo->image;
        unlink($path);
        $req = $request->all();
        if ($files = $request->file('image')) {
            $uuid = Uuid::generate()->string;
            $path = $uuid . "." . $request->file('image')->getClientOriginalExtension();
            $desti = 'images/logo/';
            $files->move($desti, $path);
            $req['image'] = $path;
        }

        $logo = $logo->update($req);
        return redirect(route('manager.logo.index'));
    }
    public function destroy(Request $request, $id)
    {
        $logo = Logo::find($id);
        $logo->delete();
        return redirect('/manager/logo');
    }
}
