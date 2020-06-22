<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Jop;
use Illuminate\Http\Request;

class JopController extends Controller
{
    public function index()
    {
        $jops = Jop::all();
        return view('manager/jopindex', ["jops" => $jops]);
    }

    public function create()
    {
        return view('manager.jopcreate');
    }

    public function store(Request $request)
    {
        $jop = new Jop;
        $jop->title = $request->title;
        $jop->description = $request->description;
        $jop->location = $request->location;
        $jop->requirements = $request->requirements;
        $jop->jopType = $request->jopType;

        $jop->save();
        return redirect('/manager/jops');
    }

    public function show($id)
    {
        $jop = Jop::findOrFail($id);
        $applicant = $jop->applicants;
        return view('manager.jopshow', ['jop' => $jop, 'applicants' => $applicant]);
    }

    public function edit($id)
    {
        $jop = Jop::findOrFail($id);
        return view('manager.jopedit', ['jop' => $jop]);
    }

    public function update(Request $request, $id)
    {
        $jop = Jop::find($id);
        $jop->title = $request->title;
        $jop->description = $request->description;
        $jop->location = $request->location;
        $jop->requirements = $request->requirements;
        $jop->jopType = $request->jopType;

        $jop->save();
        return redirect('/manager/jops');
    }

    public function destroy(Request $request, $id)
    {
        $jop = Jop::find($id);
        $jop->delete();
        return redirect('/manager/jops');
    }
}
