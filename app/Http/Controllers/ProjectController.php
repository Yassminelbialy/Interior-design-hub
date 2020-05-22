<?php

namespace App\Http\Controllers;

use App\Project;
use App\Category;
use App\ProjectImage;
use Illuminate\Http\Request;
use Ramsey\Uuid\Rfc4122\UuidV1;
use Uuid ;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Uuid::generate()->string);
        return view('manager.myindex',['data'=>Project::all()]);
        // return view('manager.projectindex',['data'=>Project::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all()->pluck('name','id')->toArray();
// dd($categories);
        return view('manager.projectformadd',['category'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    if ($files = $request->file('mainimage'))
    {
                    $uuid =Uuid::generate()->string;
                    $path=$uuid.".".$request->file('mainimage')->getClientOriginalExtension();
                    $desti='projectimages/';
                    $files->move($desti,$path);
                    // dd('dd');
    }
    $req=$request->all();
    $req['mainimage']=$path;
    $project = Project::create($req);
        //
        dd($project);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $categories = Category::all()->pluck('name','id')->toArray();

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
