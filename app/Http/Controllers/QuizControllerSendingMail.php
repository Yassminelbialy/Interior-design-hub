<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendQuizMail;

class QuizControllerSendingMail extends Controller
{
    public function sendEmail(Request $request)
    {

       
           $quizData = array(

               'area'               =>  $request->area,
               'check_quiz2'        =>  $request->timeOfRsponse,
               'check_quiz4'        =>  $request->participateState,
               'check_quiz3'        =>  $request->styles,
               'check_quiz1'        =>  $request->design,
               'name'               =>  $request->customerName,
               'phone'              =>  $request->customerPhoneNo,
           );

           Mail::to('yassminelbialy@gmail.com')
           ->send(new SendQuizMail ($quizData));
           return back()->with('success' , 'thanx for contacting us :)');

    }
}
