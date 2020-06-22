<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use App\Sliderimages;
use DB;

class SliderImageController extends Controller
{
    public function index()
    {

        $data_slider = DB::table('projects')
            ->join('sliderimages', 'projects.id', 'sliderimages.project_id')
            ->get();
        return view('manager.slider', ['slider' => $data_slider]);
    }


    public function create()
    {
        $project_name = Project::all();
        return view('manager.addImageSlider', ['projectsName' => $project_name]);
    }

    public function store(Request $request)
    {
        $proj_image = new Sliderimages();

        $proj_image->project_id = $request->title;


        if ($request->hasfile('proImg')) {

            $file = $request->file('proImg');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/projectsSlider', $fileName);
            $proj_image->img = $fileName;
        }

        $proj_image->save();

        return redirect('manager/sliderImage');
    }
    public function destroy($id)
    {
        $deleted_pro = Sliderimages::find($id);
        $deleted_pro->delete();
        return redirect('manager/sliderImage');
    }
}
