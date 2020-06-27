<?php

namespace App\Http\Controllers\Manager;
use App\Http\Controllers\Controller;
use App\QuizImage;
use Illuminate\Http\Request;
use App\Quiz;
class QuizImageController extends Controller
{
    public function index($id)
    {
        return view('manager.quizimages',['data'=>Quiz::find($id)->images]);
    }
}
