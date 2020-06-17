<?php

namespace App\Http\Controllers\Manager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company;
use App\Quiz;
use DB;

class CounterController extends Controller
{
    public function getCounterOfSpecificCompany(){

        
        $company= Company::all();
        $company_id = Company::pluck('id');
        $company_counter = Company::pluck('counter');
        $company_name = Company::pluck('companyName');

        //dd($company_id);
        foreach($company_id as $id)
    {
            $quiz_com = Quiz::where('company_id' , $id)->count();
            $last_data = Company::find($id)
            ->update(['counter' => $quiz_com]);
         
    }

    return view('manager.counter',['companyCounter'=>$company]);
      
    }
}
