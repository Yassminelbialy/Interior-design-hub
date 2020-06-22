<?php

namespace App\Http\Controllers\CompanyAdmin;

use App\Http\Controllers\Controller;
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
        $this->validate($request, [

            'username'   =>     'required',
            'phone'      =>     'required',
            'comment' => 'required',
            'date' => 'date ',
        ]);
        $consultation = new Consultation();
        $consultation->name = $request->username;
        $consultation->timeToCall = $request->date;
        $consultation->comment = $request->comment;
        $consultation->phone = $request->phone;
        $consultation->save();
        $usersData = array(

            'username'  =>  $request->username,
            'phone'     =>  $request->phone,
            'comment' => $request->comment,
            'date'      =>  $request->date
        );

        Mail::to('yassminelbialy@gmail.com')
            ->send(new SendEmail($usersData));
        return back()->with('success', 'thanx for contacting us :)');
    }
    // ************ Yassmin Part *************************
    public function index()
    {
        return view('CompanyAdmin.consultations', ['data' => Consultation::all()]);
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

        return redirect('/companypanel/consultations');
    }
}
