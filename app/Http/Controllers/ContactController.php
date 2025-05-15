<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the form (you can store in DB, send an email, etc.)
        // Example: send an email to admin
        Mail::to('your-email@example.com')->send(new \App\Mail\ContactForm($validated));

        return back()->with('success', 'Your message has been sent!');
    }
}

