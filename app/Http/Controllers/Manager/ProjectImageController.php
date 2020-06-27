<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\ProjectImage;
use App\Project;
use Illuminate\Http\Request;
use Uuid;

use App\File;
// add this
use Illuminate\Support\Facades\File as LaraFile;


class ProjectImageController extends Controller
{
    public function index(Request $request, $id)
    {
    // dd($id);
        $projectImages = Project::find($id)->images()->paginate(3);

        return view('manager.projectimages', ['id' => $id, 'data' => $projectImages]);
    }


    public function create($id)
    {
        // dd($id);
        return view('manager.projectimagesadd', ['id' => $id]);
    }

    public function store(Request $request, $id)
    {
        // dd(Project::find($id));
        $request->validate([
            'description' => 'required|max:150',
            'keyWords' => 'required',
            'image' => 'image|required',
        ]);
        $project = Project::find($id);
        $req = $request->all();

        if ($files = $request->file('image')) {
            $uuid = Uuid::generate()->string;
            $path = $uuid . "." . $request->file('image')->getClientOriginalExtension();
            $desti = 'projectimages/';
            $files->move($desti, $path);
            $req['image'] = $path;

            // dd('dd');
        }
        $image = $project->images()->create($req);
        //     //
        return redirect(route('manager.project.images.index', $id))->with('success','done');
    }


    public function show(ProjectImage $projectImage, $id, $iid)
    {
        dd($id, $iid);
    }

    public function edit(ProjectImage $projectImage, $id, $iid)
    {
        // dd($projectImage,$id,$iid);


        return view('manager.projectimagesedit', ['data' => ProjectImage::find($iid), 'id' => $id]);
    }

    public function update(Request $request, ProjectImage $projectImage, $id, $iid)
    {

        // dd($projectImage,$id,$iid);
        $req = $request->all();
        $image = ProjectImage::find($iid);

        if ($files = $request->file('image')) {

            LaraFile::delete("projectimages/{$image->image}");

            $uuid = Uuid::generate()->string;
            $path = $uuid . "." . $request->file('image')->getClientOriginalExtension();
            $desti = 'projectimages/';
            $files->move($desti, $path);
            $req['image'] = $path;

            // dd('dd');
        }


        $image->update($req);
        return redirect(route('manager.project.images.index', $id));
    }


    public function destroy(ProjectImage $projectImage, $id, $iid)
    {

        ProjectImage::find($iid)->delete();
        return redirect(route('manager.project.images.index', $id));

        //
    }
}
