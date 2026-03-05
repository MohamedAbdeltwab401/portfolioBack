<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
class ContactController extends Controller
{

public function send(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ]);

    Mail::to($request->email)->queue(new ContactMail($data));
    return response()->json([
        'status' => true,
        'message' => 'Email sent successfully'
    ]);
}

public function recieve(Request $request) {
        $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ]);
    Mail::to($request->email)->queue(new ContactMail($data));
    return response()->json([
        'status' => true,
        'message' => 'Email sent successfully'
    ]);
}
}
