<?php

namespace App\Http\Controllers;

use App\JopApplicant;
use App\Jop;
use Uuid;
use Illuminate\Http\Request;
use App\Http\Requests\JopApplicantPost;

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
        // dd($id);
        // dd('ssss');
        return view('jopApp.applicationForm',['id'=>$id]);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JopApplicantPost $request,$id=null)
    {
        $birthDate=$request->age;
        $birthDate = explode("/", $birthDate);
        //get age from date or birthdate
        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
         ? ((date("Y") - $birthDate[2]) - 1)
         : (date("Y") - $birthDate[2]));

         $request['age']=$age+1;
         if ($files = $request->file('file'))
         {
                         $uuid =Uuid::generate()->string;
                         $path=$uuid.".".$request->file('file')->getClientOriginalExtension();
                         $desti='cvs/';
                         $files->move($desti,$path);
                         $request['cv']=$path;
                         // dd('dd');
         }
         $applicant =Jop::find($id);
        //  dd($request['cv']);
        if($id && $applicant)
        {
             $applicant->applicants()->create($request->except(['gender','file']));
        }else{
                JopApplicant::create($request->except(['gender','file'])        );

}
        // dd($request->all());
        return redirect(route('applyjop'))->with('success', 'Done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JopApplicant  $jopApplicant
     * @return \Illuminate\Http\Response
     */
    public function show(JopApplicant $jopApplicant)
    {
        //
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
