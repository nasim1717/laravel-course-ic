<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class SMSSendController extends Controller
{
    public function SMSSendPage(){
        return view('SmsSend');
    }

    public function SMSSend(Request $request){
        $mobile = $request->input('mobile');
        $message = $request->input('message');



        $BASE="http://bulksmsbd.net/api/smsapi";
        $API_KEY="rbx14pmSVxza7bXtqfTW";
        $TYPE="text";
        $MOBILE=$mobile;
        $SENDER_ID="8809617622720";
        $MESSAGE=$message;

        //  http://bulksmsbd.net/api/smsapi?api_key=rbx14pmSVxza7bXtqfTW&type=text&number=Receiver&senderid=8809617622720&message=TestSMS

        $URL=$BASE."?api_key=".$API_KEY."&type=".$TYPE."&number=".$MOBILE."&senderid=".$SENDER_ID."&message=".$MESSAGE;
        Http::get($URL);

        return redirect()
            ->route('SMSSendPage')
            ->with('message', "Message Sent Successfully");



        // Trigger SMS
    }
}
