<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReplyMessage;

class EmailController extends Controller
{
    public function sendReply(Request $request)
    {
        $details = [
            'email' => $request->email,
            'name' => $request->name,
            'email_body' => $request->email_body
        ];

        Mail::to($request->email)->send(new ReplyMessage($details));

        return back()->with('success', 'Email has been sent successfully!');
    }
}
