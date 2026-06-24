<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function sendMail(Request $request)
    {

        $request ->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'content' => $request->content,
        ];

        Mail::send('emails.contact-admin', $details, function ($mail) use ($details) {
            $mail->to('info@ndg-webdesign.net');
            $mail->subject($details['subject']);
        });

        // 3️⃣ Bevestigingsmail naar GEBRUIKER
        Mail::send('emails.contact-user', $details, function ($mail) use ($details) {
            $mail->to($details['email'])
                 ->subject('Thank you for contacting NDG Webdesign');

        });
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
