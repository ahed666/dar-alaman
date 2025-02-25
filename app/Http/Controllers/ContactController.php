<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\WebsiteSetting;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:500',
        ]);

        // Prepare email data
        $emailData = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'message_text' => $validatedData['message'],
        ];
        

        // Send email to admin
        Mail::send('emails.contact', $emailData, function ($message) use ($validatedData) {
            $message->to(env('ADMIN_MAIL')) // Replace with admin email
                    ->subject('New Contact Form Submission');

        
        });

        // Return a response
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function index(){
        $settings=WebsiteSetting::first();
       
        return view('contact',compact('settings'));
    }
}
