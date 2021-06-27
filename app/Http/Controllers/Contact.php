<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
    //
    function sendMail(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'object' => 'required',
            'message' => 'required',
        ]);
        $information = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'object' => $request->object,
            'message' => $request->message,
        ];

        Mail::to('youzik@contact.com')->send(new \App\Mail\contact($information));
        return view('contact')->with('success', 'Mail Envoyé');
    }
}
