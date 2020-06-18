<?php

namespace App\Http\Controllers\CompanyAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Review;
use Illuminate\Support\Facades\Redirect;

class ReviewTrashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews=Review::onlyTrashed()->get();
        // $reviews= Auth::user()->company->reviews::onlyTrashed()->get();
        return view('CompanyAdmin.reviewTrash', ["reviews"=>$reviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $review=Review::withTrashed()->where('id',$id)->first();
        $review->restore();
        return Redirect()->back();  
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
        $review=Review::withTrashed()->where('id',$id)->first();
        $path = public_path()."/images/review/".$review->image;
        unlink($path);
        $review->forceDelete();
        return Redirect()->back();

    }
}
