<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        
        $message1 = request('message') . "\n\n" . request('firstname') . " " . request('lastname') . "\n" . request('phone') . "\n" . request('email');
    
        Mail::raw($message1, function( $message)
        {
            $message->from(request('email'), request('email'));

            $message->to('inspect@inspect.com');
        });
        
        return view("mailsent");
    }
}
