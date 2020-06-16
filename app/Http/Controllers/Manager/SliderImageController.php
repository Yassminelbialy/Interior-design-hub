<?php

namespace App\Http\Controllers\Manager;
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
        return view ('manager.slider' ,['slider'=>$data_slider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project_name = Project::all();
        return view('manager.addImageSlider' , ['projectsName'=>$project_name]);
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
        //  $data = Project::find('id')
        //  ->join('sliderimages','sliderimages.project_id' , 'projects.id')
        //  ->get();

        //  dd($data);
        // $data = Project::find($request->projectid)
        // ->join('sliderimages','sliderimages.project_id' , 'projects.id')
        // ->where($request->projectid,'=','proects.id')
        // ->get();

        //dd($data);
        $proj_image->project_id = $request->title;

        //dd($proj_image->project_id);
        if($request->hasfile('proImg'))
        {

            $file = $request->file('proImg');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/projectsSlider' , $fileName);
            $proj_image->img = $fileName; 
        }
       
        $proj_image->save();

        return redirect('manager/sliderImage');
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
        return redirect('manager/sliderImage');
    }
}
