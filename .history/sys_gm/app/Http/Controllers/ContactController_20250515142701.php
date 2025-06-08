<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function send(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // logique d'envoi (mail ou enregistrement)
        public function send(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'subject' => 'required|string',
        'message' => 'required|string',
    ]);

    $data = $request->only('name', 'email', 'subject', 'message');

    Mail::send('emails.contact', $data, function ($message) use ($data) {
        $message->to('contact@mobilite.gouv.bj')
                ->subject($data['subject'])
                ->replyTo($data['email']);
    });

    return back()->with('success', 'Votre message a été envoyé.');
}

    
    }
}

}
