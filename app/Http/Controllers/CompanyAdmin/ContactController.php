<?php

namespace App\Http\Controllers\CompanyAdmin;
use App\Http\Controllers\Controller;
use App\Contact;
use Illuminate\Http\Request;
use Auth;
class ContactController extends Controller
{
    // User::find(2)->company->contact()->create(['email'=>'ahmdd hazem','company_id'=>1])
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact =Auth::user()->company->contact;
        if($contact)
        {
            return view('CompanyAdmin/contactindex',["contacts"=>[$contact] ]);
        }else{
            return view('CompanyAdmin.contactadd');
        }
    }

    public function login()
    {

        $company=Auth::user()->company;
        // dd($company);
        $length=0;

        $data=[];
        if($company->info)
        {

        }else{
             $length+=.25;
             array_push($data,'please add info <a href="/companypanel/alexandra">#here</a>');

        }

        if($company->reviews)
        {

        }else{
            $length+=.25;
            array_push($data,'please add review <a href="/companypanel/review">#here</a>');

        }
        if($company->services)
        {

        }else{
            $length+=.25;
            array_push($data,'please add services <a href="/companypanel/service">#here</a>');

        }
        if($company->contact)
        {

        }else{
            $length+=.25;
            array_push($data,'please add contact <a href="/companypanel/contacts">#here</a>');
        }
        // dd($length);
        if($length){
            return view('CompanyAdmin.profilelogin',['percent'=>100-(100*$length),'data'=>$data]);

        }else{
            return view('CompanyAdmin.profilelogin',['percent'=>100,'data'=>[]]);

        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company=Auth::user()->company;
        if ($company)
        {
            $company->contact()->create($request->all());
            return redirect(route('company.contacts.index'))->with('success','Done');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts= Contact::findOrFail($id);
        return view('CompanyAdmin.contactedit',["contact"=>$contacts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact=Contact::find($id);
        $contact->phoneNo=$request->phoneNo;
        $contact->email=$request->email;
        $contact->whatsAppLink=$request->whatsAppLink;
        $contact->facebookLink=$request->facebookLink;
        $contact->instaLink=$request->instaLink;
        $contact->telegramLink=$request->telegramLink;
        $contact->viberLink=$request->viberLink;
        $contact->pinterestLink=$request->pinterestLink;
        $contact->wLink=$request->wLink;

        $contact->save();
        return redirect('/companypanel/contacts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
