<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Quiz;
use Auth;
use App\Message;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_phone = auth()->user()->phone;
        $user_name = auth()->user()->name;
        $user_phone_in_quiz = Quiz::where('customerPhoneNo','=',$user_phone)->get();
         $order_list_of_user = Order::where('user_id', '=', auth()->user()->id)->get();

        $chatData=Message::where('user_id', '=', auth()->user()->id)->get();

         return view('userAccount',['orderList'=>$order_list_of_user ,
          'quizData'=> $user_phone_in_quiz, "userName"=>$user_name,'chatData'=>$chatData]);

         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
