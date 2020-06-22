<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Review;
use Illuminate\Support\Facades\Redirect;

class ReviewTrashController extends Controller
{

    public function index()
    {
        $reviews = Review::onlyTrashed()->get();

        return view('manager.reviewTrash', ["reviews" => $reviews]);
    }

    public function edit($id)
    {
        $review = Review::withTrashed()->where('id', $id)->first();
        $review->restore();
        return Redirect()->back();
    }

    public function destroy($id)
    {
        $review = Review::withTrashed()->where('id', $id)->first();
        $path = public_path() . "/images/review/" . $review->image;
        unlink($path);
        $review->forceDelete();
        return Redirect()->back();
    }
}
