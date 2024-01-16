<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Middleware\RateLimitContactUs;

class MessageController extends Controller
{
    public function __construct() {
        $this->middleware(RateLimitContactUs::class);
    }
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'your_name' => 'required|min:3',
            'your_email' => 'required|email',
            'your_subject' => 'nullable',
            'your_message' => 'required|min:10',
        ]);

        // Create a new message
        Message::create([
            'sender' => $request->input('your_name'),
            'sender_email' => $request->input('your_email'),
            'subject' => $request->input('your_subject'),
            'text' => $request->input('your_message'),
        ]);
        $request->session()->put('contact-ok', 'Your message sent successfully!');
        // Redirect back with a success message (optional)
        return redirect()->back();
    }
}
