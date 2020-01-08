<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendRegisterMail;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordController extends Controller
{
    public function showforgetpage()
   {
        return view('vendor.forgetpassword');
   }

   public function forgetpassword(Request $request)
   {
       $otp= mt_rand(000000,999999);
       $b=$request->emailphone;
        b:if(is_numeric($b))
        {
            return Redirect::to('https://2factor.in/API/V1/d15b8dc8-2c7d-11ea-9fa5-0200cd936042/SMS/'.$b.'/'.$otp);
        }
        else{
            $z= "127.0.0.1:8000/vendor/resetpassword/email/".Vendor::where('email',$b)->first()->remember_token;
            $details = [
                'email' => $b,
                'name'=> Vendor::where('email',$b)->first()->first_name,
                'link' =>$z
            ];

            Mail::to($b)->send(new SendRegisterMail($details));
            return redirect()->route('vendor');
        }
   }

   public function updatepasswordmail($token)
   {
        return view('vendor.updatepassword');
   }
}
