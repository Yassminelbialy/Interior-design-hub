<?php

namespace App\Http\Controllers\Manager;
use App\Http\Controllers\Controller;
use App\JopApplicant;
use App\Jop;
use Uuid;
use Illuminate\Http\Request;
use App\Http\Requests\JopApplicantPost;
use \Validator;
use DateTime;

class JopApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('jopApp.jops',['data'=>Jop::all()]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null)
    {
        return view('jopApp.applicationForm',['id'=>$id]);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id=null)
    {
        // return response()->json(['message'=>'application form added successfully']);

        $validator = Validator::make($request->all(), [
            'fullName' => 'required|max:255',
            'email' => 'required|email:rfc,dns|unique:jop_applicants',
            'phone' => 'regex:/^01[0-2][0-9]{8}$/i',
            'age'=>'date',
            'urlprotofolio'=>'url',
            "file" => "required|mimes:pdf|max:10000",

             ]);
        if ($validator->fails()) {
            return response()->json(['erors'=>$validator->messages()->all(),'data'=>$request->all()]);
        }

        $from = new DateTime($request->age);
        $to   = new DateTime('today');
        $age = $from->diff($to)->y;


         $request['age']=$age;
         if ($files = $request->file('file'))
         {
                         $uuid =Uuid::generate()->string;
                         $path=$uuid.".".$request->file('file')->getClientOriginalExtension();
                         $desti='cvs/';
                         $files->move($desti,$path);
                         $request['cv']=$path;
         }
         $applicant =Jop::find($id);
        if($id && $applicant)
        {
             $applicant->applicants()->create($request->except(['gender','file']));
        }else{
                JopApplicant::create($request->except(['gender','file'])        );

}
return response()->json(['message'=>'application form added successfully','s'=>$age]);
}


    /**
     * Display the specified resource.
     *
     * @param  \App\JopApplicant  $jopApplicant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jopApplicant=JopApplicant::findOrFail($id);
        return view('manager.jopApplishow',['jopAppli'=>$jopApplicant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JopApplicant  $jopApplicant
     * @return \Illuminate\Http\Response
     */
    public function edit(JopApplicant $jopApplicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JopApplicant  $jopApplicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JopApplicant $jopApplicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JopApplicant  $jopApplicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(JopApplicant $jopApplicant)
    {
        //
    }
}
