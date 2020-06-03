<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Uuid;


use Illuminate\Support\Facades\File as LaraFile;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manager.categoryindex',['data'=>Category::all()]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manager.categoryformadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd(Uuid::generate()->string);
        $path ='';

        // dd($category);
        if ($files = $request->file('image'))
        {
                        $uuid =Uuid::generate()->string;
                        $path=$uuid.".".$request->file('image')->getClientOriginalExtension();
                        $desti='categoryimages/';
                        $files->move($desti,$path);
                        // dd('dd');
        }
        $req=$request->all();
        $req['image']=$path;
        $category = Category::create($req);

        return redirect(route('manager.category.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('manager.fff');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('manager.categoryformedit',['data'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $req=$request->all();

        if ($files = $request->file('image'))
        {

                        LaraFile::delete("categoryimages/{$category->image}");

                        $uuid =Uuid::generate()->string;
                        $path=$uuid.".".$request->file('image')->getClientOriginalExtension();
                        $desti='categoryimages/';
                        $files->move($desti,$path);
                        $req['image']=$path;

        }
        $category->update($req);
        dd($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
