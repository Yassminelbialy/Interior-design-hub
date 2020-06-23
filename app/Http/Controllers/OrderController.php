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
    public function index()
    {
        $user_phone = auth()->user()->phone;
        $user_name = auth()->user()->name;
        $user_phone_in_quiz = Quiz::where('customerPhoneNo', '=', $user_phone)->get();
        $order_list_of_user = Order::where('user_id', '=', auth()->user()->id)->get();

        $chatData = Message::where('user_id', '=', auth()->user()->id)->get();

        return view('userAccount', [
            'orderList' => $order_list_of_user,
            'quizData' => $user_phone_in_quiz, "userName" => $user_name, 'chatData' => $chatData
        ]);
    }
}
