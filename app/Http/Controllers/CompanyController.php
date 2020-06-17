<?php

namespace App\Http\Controllers;

use App\Company;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::paginate(4);

        return view('manager.companyIndex',['companies'=>$company]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $this->validate($request ,[

            'companyName'   =>     'required',
            'location'      =>     'required',
            'acceptConditions' => 'required ',
            'phoneNum'       => 'phone:EG'
            ]);


        $company = new Company ();
        $company->companyName =$request->companyName;
        $company->location=$request->location;
        $company->phoneNum =$request->phoneNum;
        $company->acceptConditions=$request->acceptConditions;
        $company->user_id=Auth::id();
        $company->save();
        $user=Auth::user();
        $user->company_id = $company->id ;
        $user->save();
        return back()->with('success' , 'Please wait untill admin accept your confirm :)');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }
    public function ConfirmCompany(User $users){
        $id = $users->id;
        $user=User::find($id);
        if($user){
            $user->adminRole = 2 ;
            $user->save();
        }
        return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trashCompany = Company::find($id);
        $trashCompany->delete();
        return redirect('/manager/company');

    }
}
