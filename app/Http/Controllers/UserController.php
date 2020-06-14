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
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    //
    public function index()
    {
        $projects = Project::limit(6)->get();
        $ceoInfo= Alexandrainfo::limit(1)->get();
        $contact= Contact::limit(1)->get();
        $logos= Logo::all();
        $reviews= Review::all();
        $topics = Topic::limit(6)->get();

        
        

        return view('home',['projects'=>$projects,'ceoInfo'=>$ceoInfo,'contact'=>$contact,'logos'=>$logos,'reviews'=>$reviews , 'topics'=>$topics]);
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
        // dd($categories);
        return view('AllProjectShow',['projects'=>$projects,'contact'=>$contact,'categories'=>$categories]);

    }

    public function search(Request $request){
                // dd($request->all());
                $projects = [];

                   $category = Category::where('name',$request->date)->orWhere('name','like','%'."$request->data".'%')->get();
                   if($category->count()>0)
                   {
                                 $getprojects= Project::where('category_id',$category[0]->id)->get();

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



        $contact= Contact::limit(1)->get();
        $categories = Category::all()->pluck('name','id')->toArray();


        return view('AllProjectShow',['projects'=>$projects,'contact'=>$contact,'categories'=>$categories]);

    }

}
