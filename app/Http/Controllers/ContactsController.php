<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactsRequest $request)
    {   
        $message = Message::create($request->only('name', 'email', 'message'));

        Mail::to(config('laracarte.admin_support_email'))
                ->send(new ContactMessageCreated($message));

        flashy()->succes('Nous vous répondrons dans les plus bréfs délais!');
        return redirect()->route('root_path');
    }
}
