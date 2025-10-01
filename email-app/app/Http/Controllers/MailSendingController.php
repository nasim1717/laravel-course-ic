<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSendingController extends Controller
{
    function sendEmail()
    {
        $emailTo="engr.rabbil@yahoo.com";
        $emailSubject="This is your OTP Mail";
        $otp=224466;

        Mail::to($emailTo)
            ->later(now()->addMinutes(2),new WelcomeMail($emailSubject,$otp));


        return response()->json(['success'=>true,'message'=>'Email Sent Successfully']);

    }
}
