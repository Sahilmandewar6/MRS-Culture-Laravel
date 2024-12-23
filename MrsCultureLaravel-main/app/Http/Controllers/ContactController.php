<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function getdata(Request $req){
        $contacts = new Contact();
        $contacts->fullname=$req->fullname; //form name define into the form page.
        $contacts->email=$req->email;
        $contacts->message=$req->message;
        $contacts->save();
        return redirect('/home');
    }
}
