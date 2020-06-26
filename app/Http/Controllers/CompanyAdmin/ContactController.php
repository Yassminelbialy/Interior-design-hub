<?php

namespace App\Http\Controllers\CompanyAdmin;
use App\Http\Controllers\Controller;
use App\Contact;
use Illuminate\Http\Request;

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
        // $contact =Auth::user()->company->contact;
        // if($info)
        // {
        //     return view('CompanyAdmin/alexandrainfoindex',["ceoInfo"=>[$info] ]);
        // }else{
        //     return view('CompanyAdmin.alexandrainfoadd');
        // }
        // // Auth::user()->company->contact
        $contacts= Contact::all();
        return view('CompanyAdmin/contactindex',["contacts"=>$contacts]);
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
