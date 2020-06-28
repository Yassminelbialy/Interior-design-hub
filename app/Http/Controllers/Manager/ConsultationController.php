<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Consultation;
use \Validator;
use App\Company;


class ConsultationController extends Controller
{
    public function send(Request $request)
    {
        // return response()->json(['message' => $request->all()]);
        $company =   Company::find($request->company);

        $validator = Validator::make($request->all(), [
            'username'   =>     'required',
            'phone'      =>     'required',
             'comment' => 'required',
            'timeToCall' => 'date '
        ]);
        if ($validator->fails()) {
            return response()->json(['erors' => $validator->messages()->all()]);
        }
        $consultation = new Consultation();
        $consultation->name = $request->username;
        $consultation->timeToCall = $request->timeToCall;
        $consultation->comment = $request->comment;
        $consultation->phone = $request->phone;
        if ($company)
        {
            $consultation->company_id =$company->id ;
        }

        $consultation->save();
        $usersData = array(

            'username'  =>  $request->username,
            'phone'     =>  $request->phone,
            'comment' => $request->comment,
            'date'      =>  $request->date
        );

        Mail::to('yassminelbialy@gmail.com')
            ->send(new SendEmail($consultation));
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
