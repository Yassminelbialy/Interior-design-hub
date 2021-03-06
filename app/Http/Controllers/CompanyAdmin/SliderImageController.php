<?php

namespace App\Http\Controllers\CompanyAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use App\Sliderimages;
use DB;

class SliderImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data_slider = DB::table('projects')
        ->join('sliderimages','projects.id' ,'sliderimages.project_id')
        ->get();
        return view ('CompanyAdmin.slider' ,['slider'=>$data_slider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project_name = Project::all();
        return view('CompanyAdmin.addImageSlider' , ['projectsName'=>$project_name]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proj_image = new Sliderimages();
        
        $proj_image->project_id = $request->title;

        
        if($request->hasfile('proImg'))
        {

            $file = $request->file('proImg');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/projectsSlider' , $fileName);
            $proj_image->img = $fileName; 
        }
       
        $proj_image->save();

        return redirect('/companypanel/sliderImage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted_pro = Sliderimages::find($id);
        $deleted_pro->delete();
        return redirect('/companypanel/sliderImage');
    }
}
