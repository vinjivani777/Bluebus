<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function sendmail(request $v)
    {
        $b =$v->email;
        b:if (is_numeric($b)) {
                return "Message Sent";
        } else {
            $z= "127.0.0.1:8000/resetpassword/".Vendor::where('email',$v->email)->first()->token;
            $details = [
                'email' => $v->email,
                'name'=> $v->name,
                'link' =>$z
            ];

            Mail::to($_REQUEST['email'])->send(new SendRegisterMail($details));
            return view('vendor.login');
        }
    }
}
