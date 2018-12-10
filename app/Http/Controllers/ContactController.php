<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function newContact() {
$newContact = new Contact();
$newContact->id = "1235";
$newContact->name =  "mohamed ben ibrahim";
$newContact->email = "i3325dbrahim@gmail.com";
$newContact->message = "bonjour voici un nouveau contact";

$newContact->save();

    }




    
public function show($id)
    {
        return view('inscrie', ['inscrie' => Inscription::findOrFail($id)]);
    }

}
