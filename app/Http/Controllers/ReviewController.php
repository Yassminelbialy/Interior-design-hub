<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews= Review::all();
        return view('manager/reviewindex',["reviews"=>$reviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('manager.reviewcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review=new Review();
     
        if ($files = $request->file('image')) {
            $destinationPath = 'images/review/'; 
            $Image = $files->getClientOriginalName();
            $files->move($destinationPath, $Image);
            $review->image=$Image; 
        }

        $review->save();
        return redirect('/manager/review');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review=Review::findOrFail($id);
        return view('manager.reviewedit',['review'=>$review]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $review=Review::find($id);
        $path = public_path()."/images/review/".$review->image;
        unlink($path);
        if ($files = $request->file('image')) {
            $destinationPath = 'images/review'; 
            $Image = $files->getClientOriginalName();
            $files->move($destinationPath, $Image);
            $review->image=$Image; 
        }

        $review->save();
        return redirect('/manager/review');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $review=Review::find($id);
        $path = public_path()."/images/review/".$review->image;
        unlink($path);
        $review->delete();
        return redirect('/manager/review');
    }
}
