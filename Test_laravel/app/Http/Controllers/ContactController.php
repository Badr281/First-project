<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    public function newContact(){
        $newContact = new Contact();
        $newContact->name = "Badr";
        $newContact->email = "Badr@gmail.com";
        $newContact->message ="Model effectué";

        $newContact->save();
    }
    public function listContacts(){
        $Contacts = Contact::all();
        dd($contacts);
    }

}
