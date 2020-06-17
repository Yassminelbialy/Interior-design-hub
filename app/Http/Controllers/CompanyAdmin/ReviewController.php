<?php

namespace App\Http\Controllers\CompanyAdmin;
use App\Http\Controllers\Controller;
use Uuid ;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $reviews= Review::all();
         $reviews= Auth::user()->company->reviews ;
         return view('CompanyAdmin/reviewindex',["reviews"=>$reviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('CompanyAdmin.reviewcreate');
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
    $review = Auth::user()->company->reviews()->create($req);

    // $review = Review::create($req);
        //
        // dd($project);
        return redirect('/companypanel/review');
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
        // $review=Review::findOrFail($id);
        $review= Auth::user()->company->reviews()->find($id) ;
        return view('CompanyAdmin.reviewedit',['review'=>$review]);
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
        $review= Auth::user()->company->reviews()->find($id);
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
        return redirect(route('company.review.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $review= Auth::user()->company->reviews()->find($id) ;
        $review->delete();
        return redirect('/companypanel/review');
    }
}
