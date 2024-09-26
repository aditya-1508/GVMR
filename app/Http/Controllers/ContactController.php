<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact'); // Your contact form view
    }
    public function handleForm(ContactFormRequest $request)
    {
        $data = (object) $request->all(); // Convert to object

        // Send the email
        Mail::send('emails.contact', ['data' => $data], function ($message) {
            $message->to('gvmrinternational@gmail.com')
                ->subject('Contact Us Form Submission');
        });

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
