<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Consultation;
use \Validator;


class ConsultationController extends Controller
{
    public function send(Request $request)
    {
        return response()->json(['message' => 'User status added successfully.']);

        // dd($request->all());
        // return response()->json(['message' => 'User status updated successfully.']);
        $validator = Validator::make($request->all(), [
            'username'   =>     'required',
            'phone'      =>     'required',
            'comment' => 'required',
            'date' => 'date '
        ]);
        if ($validator->fails()) {
            return response()->json(['erors' => $validator->messages()->all()]);
        }
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

        // Mail::to('yassminelbialy@gmail.com')
            // ->send(new SendEmail($usersData));
        // return back()->with('success', 'thanx for contacting us :)');
        return response()->json(['message' => 'User status added successfully.']);
    }
    // ************ Yassmin Part *************************
    public function index()
    {
        return view('manager.consultations', ['data' => Consultation::all()]);
    }
    public function destroy($id)
    {
        $delImage = Consultation::find($id);
        $delImage->delete();

        return redirect('/manager/consultations');
    }
}
