<?php

namespace App\Http\Controllers\Manager;
use App\Http\Controllers\Controller;
use Uuid ;
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
        $req=$request->all();

    if ($files = $request->file('image'))
    {
        $uuid =Uuid::generate()->string;
        $path=$uuid.".".$request->file('image')->getClientOriginalExtension();
        $desti='images/review/';
        $files->move($desti,$path);
        $req['image']=$path;
}

    $review = Review::create($req);
        //
        // dd($project);
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
        $req=$request->all();
        if ($files = $request->file('image'))
       {
            $uuid =Uuid::generate()->string;
            $path=$uuid.".".$request->file('image')->getClientOriginalExtension();
            $desti='images/review/';
            $files->move($desti,$path);
            $req['image']=$path;                        
        }

        $review = $review->update($req);           
        return redirect(route('manager.review.index'));

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
        $review->delete();
        return redirect('/manager/review');
    }
}
