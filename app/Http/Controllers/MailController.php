<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail_sent(Request $request) {
   
        $details = [
            'email' => $request->email,
            'msg' => $request->msg,
            'subject' => $request->subject,
            'name' => $request->name
        ];
       
        \Mail::to(config('about.email'))->send(new \App\Mail\inquirymail($details));
       
        return json_encode([
            'status'=>1,
            'msg'=>'mail sent'
        ]);
    }
}
