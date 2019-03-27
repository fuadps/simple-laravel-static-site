<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use App\Notifications\SendContactNotification;

class ContactController extends Controller
{
    // get contact page (/contact)
    public function showForm() {
        return view('contact.form');
    }

    // post message (/contact)
    public function sendEmail(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255|string',
            'email' => 'required|email|max:255',
            'message' => 'required'
        ]);

        Notification::route('mail','test@gmail.com')
                        ->notify(new SendContactNotification($request));

        Session::flash('success','The email was sent successfully!');

        return redirect()->route('pages.index');
    }
}
