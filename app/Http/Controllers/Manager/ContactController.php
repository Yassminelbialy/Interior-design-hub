<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('manager/contactindex', ["contacts" => $contacts]);
    }

    public function edit($id)
    {
        $contacts = Contact::findOrFail($id);
        return view('manager.contactedit', ["contact" => $contacts]);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->phoneNo = $request->phoneNo;
        $contact->email = $request->email;
        $contact->whatsAppLink = $request->whatsAppLink;
        $contact->facebookLink = $request->facebookLink;
        $contact->instaLink = $request->instaLink;
        $contact->telegramLink = $request->telegramLink;
        $contact->viberLink = $request->viberLink;
        $contact->pinterestLink = $request->pinterestLink;
        $contact->wLink = $request->wLink;

        $contact->save();
        return redirect('/manager/contacts');
    }
}
