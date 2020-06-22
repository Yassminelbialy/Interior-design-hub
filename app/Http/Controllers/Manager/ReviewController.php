<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Uuid;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index()
    {
        // $reviews= Review::all(); 
        $reviews = Review::where('company_id', '=', null)->get();
        // dd($chatData);
        return view('manager/reviewindex', ["reviews" => $reviews]);
    }


    public function create()
    {
        return view('manager.reviewcreate');
    }

    public function store(Request $request)
    {
        $req = $request->all();

        if ($files = $request->file('image')) {
            $uuid = Uuid::generate()->string;
            $path = $uuid . "." . $request->file('image')->getClientOriginalExtension();
            $desti = 'images/review/';
            $files->move($desti, $path);
            $req['image'] = $path;
        }

        $review = Review::create($req);

        return redirect('/manager/review');
    }


    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('manager.reviewedit', ['review' => $review]);
    }


    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        $path = public_path() . "/images/review/" . $review->image;
        unlink($path);
        $req = $request->all();
        if ($files = $request->file('image')) {
            $uuid = Uuid::generate()->string;
            $path = $uuid . "." . $request->file('image')->getClientOriginalExtension();
            $desti = 'images/review/';
            $files->move($desti, $path);
            $req['image'] = $path;
        }

        $review = $review->update($req);
        return redirect(route('manager.review.index'));
    }

    public function destroy(Request $request, $id)
    {
        $review = Review::find($id);
        $review->delete();
        return redirect('/manager/review');
    }
}
