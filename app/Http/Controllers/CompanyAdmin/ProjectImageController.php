<?php

namespace App\Http\Controllers\CompanyAdmin;
use App\Http\Controllers\Controller;
use App\ProjectImage;
use App\Project;
use Illuminate\Http\Request;
use Uuid ;
use Illuminate\Support\Facades\Auth;


use App\File;
// add this
use Illuminate\Support\Facades\File as LaraFile;


class ProjectImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        $company =Auth::user()->company ;

        if($company)
        {

            $projectImages=$company->projects()->find($id)->images()->paginate(3);

            return view('CompanyAdmin.projectimages',['id'=>$id,'data'=>$projectImages]) ;
        }//getting projects for session user company

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // dd($id);
        return view('CompanyAdmin.projectimagesadd',['id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $company =Auth::user()->company ;

        if ($company)
        {
                   // dd(Project::find($id));
        $project=$company->projects()->find($id);
        $req=$request->all();

        if ($files = $request->file('image'))
        {
                        $uuid =Uuid::generate()->string;
                        $path=$uuid.".".$request->file('image')->getClientOriginalExtension();
                        $desti='projectimages/';
                        $files->move($desti,$path);
                        $req['image']=$path;

                        // dd('dd');
        }
        $image = $project->images()->create($req);
        //     //
        return redirect(route('company.project.images.index',$id));

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectImage  $projectImage
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectImage $projectImage,$id,$iid)
    {
        dd($id,$iid);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectImage  $projectImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectImage $projectImage,$id,$iid)
    {
        // dd($projectImage,$id,$iid);


        return view('CompanyAdmin.projectimagesedit',['data'=> ProjectImage::find($iid),'id'=>$id        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectImage  $projectImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectImage $projectImage,$id,$iid)
    {

        // dd($projectImage,$id,$iid);
        $req=$request->all();
        $image=ProjectImage::find($iid);

        if ($files = $request->file('image'))
        {

                        LaraFile::delete("projectimages/{$image->image}");

                        $uuid =Uuid::generate()->string;
                        $path=$uuid.".".$request->file('image')->getClientOriginalExtension();
                        $desti='projectimages/';
                        $files->move($desti,$path);
                        $req['image']=$path;

                        // dd('dd');
        }


        $image->update($req);
        return redirect(route('company.project.images.index',$id));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectImage  $projectImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectImage $projectImage,$id,$iid)
    {
        $company =Auth::user()->company ;
        $project =$company->projects()->find($id) ;

       if( $project->id == $id)
       {
       $project->images()->find($iid)->delete();
        return redirect(route('company.project.images.index',$id));
       }


        //
    }
}
