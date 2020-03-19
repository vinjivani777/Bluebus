<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function sendmail(request $b)
    {
        return $z= "127.0.0.1:8000/resetpassword/".Vendor::where('email',$b->email)->first()->token;
        $details = [
            'email' => $b->email,
            'name'=> $b->name,
            'link' =>$z
        ];
        
        Mail::to('gggg@gmail.com')->send(new SendRegisterMail($details));
    }
}
