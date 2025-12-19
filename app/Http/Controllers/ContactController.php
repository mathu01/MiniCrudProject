<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function form() {
        return view('Contact.formulaire');
    }
    public function send(Request $request){
        $request->validate([
            'message' => 'required|min:10',
        ]);
        Mail::raw($request->message, function ($mail) use ($request){
            $mail->to('mathurinamadou@gmail.com')
                 ->subject('Message de contact');
        });
        return back()->with('success','Message envoyé');
    }
}
