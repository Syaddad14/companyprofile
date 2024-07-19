<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sendMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Mail\ReplyMessage;

class MessageController extends Controller
{
    public function index()
    {
        $send_message = sendMessage::orderBy('created_at', 'DESC')->get();
        return view('message.index', compact('send_message'));
    }
    
    public function viewEmail()
    {
        $users = sendMessage::all();
        return view('message.formEmail', compact('users'));
    }

    public function sendEmail(Request $request)
    {
        // Validate the request data
        $request->validate([
            'user_ids' => 'required|array',
            'user_ids.*' => 'exists:send_messages,id',
            'email_body' => 'required|string',
        ]);

        $userIds = $request->user_ids;
        $emailBody = $request->email_body;

        foreach ($userIds as $userId) {
            $user = sendMessage::find($userId);
            $data = [
                'name' => $user->name,
                'email_body' => $emailBody,
            ];

            // Send Email
            $this->sendEmailToUser($user, $data);
        }

        return response()->json(['message' => 'Emails sent successfully'], 200);
    }

    private function sendEmailToUser($user, $data)
    {
        try {
            Mail::send('emails.replyMessage', ['details' => $data], function($mail) use ($user) {
                $mail->to($user->email)
                     ->subject("Arenzha")
                     ->from('muhammad.sa21@student.unibi.ac.id', 'Arenzha');
            });

            // Check for failures
            if (Mail::failures()) {
                throw new \Exception('Failed to send email to ' . $user->email);
            }
        } catch (\Exception $e) {
            throw new \Exception('An error occurred: ' . $e->getMessage());
        }
    }

    public function sendReply(Request $request, $id)
    {
        $message = sendMessage::findOrFail($id);

        $details = [
            'subject' => 'Reply to Your Message',
            'body' => $request->input('reply_body')
        ];

        Mail::to($message->email)->send(new ReplyMessage($details));

        return redirect()->route('message.index')->with('success', 'Reply sent successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = sendMessage::findOrFail($id);
        return view('message.show', compact('message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = sendMessage::findOrFail($id);
        $message->delete();

        return redirect()->route('message.index')->with('success', 'Message deleted successfully');
    }
}
