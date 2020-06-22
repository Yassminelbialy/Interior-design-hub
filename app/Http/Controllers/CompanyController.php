<?php

namespace App\Http\Controllers;

use App\Company;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use App\Quiz;

class CompanyController extends Controller
{

    public function index()
    {
        $company = Company::paginate(4);
        return view('manager.companyIndex', ['companies' => $company]);
    }


    public function store(Request $request)
    {
        //

        $this->validate($request, [

            'companyName'   =>     'required',
            'location'      =>     'required',
            'acceptConditions' => 'required ',
            'phoneNum'       => 'phone:EG'
        ]);


        $company = new Company();
        $company->companyName = $request->companyName;
        $company->location = $request->location;
        $company->phoneNum = $request->phoneNum;
        $company->acceptConditions = $request->acceptConditions;
        $company->user_id = Auth::id();
        $company->save();
        $user = Auth::user();
        $user->company_id = $company->id;
        $user->save();
        return back()->with('success', 'Please wait untill admin accept your confirm :)');
    }


    public function ConfirmCompany(User $users)
    {
        $id = $users->id;
        $user = User::find($id);
        if ($user) {
            $user->adminRole = 2;
            $user->save();
        }
        return redirect()->back();
    }
    public function destroy($id)
    {
        $trashCompany = Company::find($id);
        $trashCompany->delete();
        return redirect('/manager/company');
    }
}
