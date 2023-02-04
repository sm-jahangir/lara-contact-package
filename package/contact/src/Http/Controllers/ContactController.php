<?php

namespace Codersgift\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Codersgift\Contact\Mail\ContactMailable;
use Codersgift\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function store(Request $request)
    {
        Mail::to(config('sent_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return back();
    }
}
