<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Vendor;
use Illuminate\Http\Request;
use App\Mail\SendRegisterMail;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


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
       $forgettoken= str_random(60);
        b:if(is_numeric($b))
        {
            $record= Vendor::where('phone_number',$b)->get();
            if(count($record))
            {
                return Redirect::to('https://2factor.in/API/V1/d15b8dc8-2c7d-11ea-9fa5-0200cd936042/SMS/'.$b.'/'.$forgettoken);
            }
            else{
                return redirect()->back()->with(['status' => 'Invalid Mobile No']);
            }
        }
        else{
            $record= Vendor::where('email',$b)->get();
            if(count($record))
            {
                // return $record;
                $tokendata = Vendor::findorfail($record->first()->id);
                $tokendata->forgettoken=$forgettoken;
                $tokendata->token_time= date('Y-m-d H:i:s');
                return $tokendata;
                $tokendata->save();
                $z= "127.0.0.1:8000/vendor/resetpassword/email/".Vendor::where('email',$b)->first()->remember_token;
                $details = [
                    'email' => $b,
                    'name'=> Vendor::where('email',$b)->first()->first_name,
                    'link' =>$z
                ];

                Mail::to($b)->send(new SendRegisterMail($details));
                return redirect()->route('vendor')->with(['status' => 'Mail Sent.']);
            }
            else{
                return redirect()->back()->with(['status' => 'Invalid Email-ID']);
            }
        }
   }

   public function updatepasswordmail($token)
   {
        return $record = Vendor::where('forgettoken',$token)->get()->first();

        return view('vendor.updatepassword');
   }

   public function savepasswordmail(request $request)
   {
        return $request;
   }



}
