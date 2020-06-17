<?php

namespace App\Http\Controllers;
use App\Alexandrainfo;
use Illuminate\Http\Request;
use App\Contact;
use App\Project;
use App\Logo;
use App\Review;
use App\Category;
use App\ProjectImage;
use App\Topic;
use App\Company;
use App\Sliderimages;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    //
    public function index()
    {
        $projects = Project::limit(2)->get();
        $ceoInfo= Alexandrainfo::limit(1)->get();
        $contact= Contact::limit(1)->get();
        $logos= Logo::all();
        $reviews= Review::all();
        $topics = Topic::limit(6)->get();
// dd($ceoInfo);
        $slider_image_project = DB::table('projects')
        ->join('sliderimages','projects.id' ,'sliderimages.project_id')
        ->get();
        return view('home',['projects'=>$projects,'ceoInfo'=>$ceoInfo,'contact'=>$contact,'logos'=>$logos,'reviews'=>$reviews , 'topics'=>$topics ,'slider_projcts'=>$slider_image_project]);
    }
    public function view($id){
        $project = Project::find($id);
        $relProjects=ProjectImage::where('project_id','=',$id)->get();
        return view('projectView',['project'=>$project,'relProjects'=>$relProjects]);

    }
    public function allprojects($category=null){

        if ($category)
        {
           $category = Category::where('name',$category)->orWhere('name','like','%'."$category".'%')->get();
           if($category->count()>0)
           {
                         $projects= Project::where('category_id',$category[0]->id)->get();


           }else{
               $projects =[];
           }
        }else {
                    $projects = Project::all();

        }



        $contact= Contact::limit(1)->get();
        $categories = Category::all()->pluck('name','id')->toArray();
        $companies = Company::all()->pluck('companyName','id')->toArray();
        $slider_image_project = DB::table('projects')
        ->join('sliderimages','projects.id' ,'sliderimages.project_id')
        ->get();

        // dd($categories);
        return view('AllProjectShow',['projects'=>$projects,'contact'=>$contact,'categories'=>$categories,'companies'=>$companies , 'slider_projcts'=>$slider_image_project]);

    }

    public function search(Request $request){
                // dd($request->all());
                $projects = [];

                   $category = Category::where('name',$request->data)->orWhere('name','like','%'."$request->data".'%')->get();
                   if($category->count()>0)
                   {
                                //  $getprojects= Project::where('category_id',$category[0]->id)->get();
                                $getprojects= $category[0]->projects()->get();

                                 foreach ($getprojects as $key)
                                 {
                                     array_push($projects,$key);
                                 }
                   }
                   $proj = Project::where('title',$request->date)->orWhere('title','like','%'."$request->data".'%')->get();

                   if($proj->count()>0)
                   {

                                 foreach ($proj as $key)
                                 {
                                     array_push($projects,$key);
                                 }
                   }

                   $company = Company::where('companyName',$request->data)->orWhere('companyName','like','%'."$request->data".'%')->get();
                   if($company->count()>0)
                   {
                                //  $getprojects= Project::where('category_id',$category[0]->id)->get();
                                $getprojects= $company[0]->projects()->get();

                                 foreach ($getprojects as $key)
                                 {
                                     array_push($projects,$key);
                                 }
                   }


        return response()->json(['data'=>$projects]);

    }
    public function customsearch(Request $request)
    {
            if($request->category && !$request->company)
            {
                $category = Category::find($request->category);
               if ($category)
               {
                return response()->json(['c3'=>'c3','data'=>$category->projects()->get()]);
               }
            }//for category

            if(!$request->category && $request->company)
            {
                $company = Company::find($request->company);
               if ($company)
               {
                return response()->json(['c2'=>'c2','data'=>$company->projects]);
               }
            }//for company
            if($request->category && $request->company)
            {
                $company = Company::find($request->company);


            return response()->json(['c1'=>'c1','data'=>$company->projects()->where('category_id',$request->category)->get()]);

            }//for all


            if(!$request->category && !$request->company)
            {


            return response()->json(['c9'=>'c9','data'=>Project::all()]);

            }//for all without restrict



    return response()->json(['message' => 'User status updated successfully.','data'=>$request->all()]);


    }


}
