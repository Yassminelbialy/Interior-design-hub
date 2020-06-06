<?php

namespace App\Http\Controllers;

use App\QuizImage;
use Illuminate\Http\Request;
use App\Quiz;
class QuizImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {



        return view('manager.quizimages',['data'=>Quiz::find($id)->images]);
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
     * @param  \App\QuizImage  $quizImage
     * @return \Illuminate\Http\Response
     */
    public function show(QuizImage $quizImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuizImage  $quizImage
     * @return \Illuminate\Http\Response
     */
    public function edit(QuizImage $quizImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuizImage  $quizImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuizImage $quizImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuizImage  $quizImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizImage $quizImage)
    {
        //
    }
}
