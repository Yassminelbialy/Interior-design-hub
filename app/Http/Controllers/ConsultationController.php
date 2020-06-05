<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Consultation;

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
    // ************ Yassmin Part *************************
     public function index()
    {
        return view('manager.consultations',['data'=>Consultation::all()]);

    }

     public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Contact $contact)
    {
        //
    }
    public function edit(Contact $contact)
    {
        //
    }
    public function update(Request $request, Contact $contact)
    {
        //
    }
    public function destroy($id)
    {
        $delImage = Consultation::find($id);
        $delImage->delete();

        return redirect('/manager/consultations');
    }

}
