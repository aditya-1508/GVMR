<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\CustomMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class NoticeController extends Controller
{


    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Redirect or return response
        return redirect('/send-notice')->with('success', 'User added successfully!');
    }
    public function sendEmails(Request $request)
    {
        set_time_limit(2000);
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Fetch all users
        $users = User::all(['email']);

        // Loop through each user and send the email
        foreach ($users as $user) {
            $details = [
                'title' => $request->input('title'), // Get title from the form
                'body' => $request->input('body'), // Get body from the form and personalize it
            ];


            // Send the email using the queued method
            Mail::to($user->email)->queue(new CustomMail($details));
        }


        // Redirect back with a success message
        return redirect()->back()->with('success', 'Emails sent successfully!');
    }
}
