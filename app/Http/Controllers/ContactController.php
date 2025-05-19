<?php

namespace App\Http\Controllers;

use \App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'number' => 'required|string|max:255|regex:/^\+?[0-9\s\-]+$/',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:500|min:10',
        ], [
            'name.required' => 'The name field is required.',
            'name.regex' => 'The name must only contain letters and spaces.',
            'number.required' => 'The phone number is required.',
            'number.regex' => 'The phone number format is invalid.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'message.min' => 'The message must be at least 10 characters long.',
        ]);

        Mail::to('jackyberi67@gmail.com')
            ->send(new ContactMailable($request->all()));

        session()->flash('success', 'Your message has been sent successfully!');

        return redirect()->route('contact.index');
    }
}
