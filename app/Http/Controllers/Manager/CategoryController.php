<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;
use Uuid;


use Illuminate\Support\Facades\File as LaraFile;


class CategoryController extends Controller
{

    public function index()
    {
        return view('manager.categoryindex', ['data' => Category::all()]);
        //
    }

    public function create()
    {
        return view('manager.categoryformadd');
    }

    public function store(Request $request)
    {

        // dd(Uuid::generate()->string);
        $path = '';

        // dd($category);
        if ($files = $request->file('image')) {
            $uuid = Uuid::generate()->string;
            $path = $uuid . "." . $request->file('image')->getClientOriginalExtension();
            $desti = 'categoryimages/';
            $files->move($desti, $path);
            // dd('dd');
        }
        $req = $request->all();
        $req['image'] = $path;
        $category = Category::create($req);

        return redirect(route('manager.category.index'));
    }


    public function show(Category $category)
    {
        return view('manager.fff');
    }

    public function edit(Category $category)
    {
        return view('manager.categoryformedit', ['data' => $category]);
    }


    public function update(Request $request, Category $category)
    {
        $req = $request->all();

        if ($files = $request->file('image')) {

            LaraFile::delete("categoryimages/{$category->image}");

            $uuid = Uuid::generate()->string;
            $path = $uuid . "." . $request->file('image')->getClientOriginalExtension();
            $desti = 'categoryimages/';
            $files->move($desti, $path);
            $req['image'] = $path;
        }
        $category->update($req);
        return redirect(route('manager.category.index'));
    }
   
}
