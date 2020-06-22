<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Project;
use App\Category;
use App\ProjectImage;
use Illuminate\Http\Request;
use Uuid;
use Illuminate\Support\Facades\File as LaraFile;


class ProjectController extends Controller
{

    public function index()
    {
        // dd(Uuid::generate()->string);
        // return view('manager.myindex',['data'=>Project::all()]);
        return view('manager.projectindex', ['data' => Project::paginate(3)]);
    }

    public function create()
    {
        //
        $categories = Category::all()->pluck('name', 'id')->toArray();
        // dd($categories);
        return view('manager.projectformadd', ['category' => $categories]);
    }

    public function store(Request $request)
    {
        $req = $request->all();

        if ($files = $request->file('mainimage')) {
            $uuid = Uuid::generate()->string;
            $path = $uuid . "." . $request->file('mainimage')->getClientOriginalExtension();
            $desti = 'projectimages/';
            $files->move($desti, $path);
            $req['mainimage'] = $path;
        }

        $project = Project::create($req);
        return redirect(route('manager.project.index'));
    }

    public function edit(Project $project)
    {
        // dd(Category::all()->pluck('name','id')->toArray());
        return view('manager.projectformedit', ['data' => $project, 'category' => Category::all()->pluck('name', 'id')->toArray()]);
    }

    public function update(Request $request, Project $project)
    {
        // $categories = Category::all()->pluck('name','id')->toArray();

        // dd($project,'s');

        $req = $request->all();

        if ($files = $request->file('mainimage')) {
            LaraFile::delete("projectimages/{$project->mainimage}");
            $uuid = Uuid::generate()->string;
            $path = $uuid . "." . $request->file('mainimage')->getClientOriginalExtension();
            $desti = 'projectimages/';
            $files->move($desti, $path);
            $req['mainimage'] = $path;
            // dd('dd');
        }

        $project = $project->update($req);
        //
        // dd($project);
        return redirect(route('manager.project.index'));

        // //
    }

    public function destroy(Project $project)
    {
        $project->delete();
        // dd($project);
        return redirect(route('manager.project.index'));
    }
}
