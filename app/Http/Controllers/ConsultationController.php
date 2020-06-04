<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function send(Request $request)
     {

            $this->validate($request ,[

                'username'   =>     'required',
                'phone'      =>     'required',
                'date'       =>      'required|date'
            ]);

            $usersData = array(

                    'username'  =>  $request->username,
                    'phone'     =>  $request->phone,
                    'date'      =>  $request->date
            );

            Mail::to('yassminelbialy@gmail.com')
            ->send(new SendEmail($usersData));
            return back()->with('success' , 'thanx for contacting us :)');

     }
}
