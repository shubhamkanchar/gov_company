<?php

namespace App\Http\Controllers;

use App\Models\subscribe;
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

    public function mail_sub(Request $request) {
   
        $details = [
            'email' => $request->email,
            'name' => $request->name
        ];
        
        $count=subscribe::where('email',$request->email)->count();

        if($count == 0):
            subscribe::create($details);
        endif;

        return json_encode([
            'status'=>1,
            'msg'=>'subscribed successfully'
        ]);
    }
}
