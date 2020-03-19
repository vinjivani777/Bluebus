<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Vendor;
use Illuminate\Http\Request;
use App\Mail\SendRegisterMail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


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
       $forget_token= str_random(60);
        b:if(is_numeric($b))
        {
            $record= Vendor::where('mobile_no',$b)->get();
            if(count($record))
            {
                $data=$record->first()->id;
                $data=Vendor::findorfail($data);
                $data->otp=$otp;
                $data->save();
                $responce=SMSController::sendSMS($b,$otp);

                if($responce->Status=="Success")
                {
                    return redirect()->route('vendor.updatepasswordsms',['phone'=>$b]);

                }else{
                    return redirect()->back()->with(['status' => 'Invalid Mobile No']);
                }
                // return Redirect::to('https://2factor.in/API/V1/d15b8dc8-2c7d-11ea-9fa5-0200cd936042/SMS/'.$b.'/'.$otp);

                // return redirect()->route('vendor.savepasswordsms');
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
                $tokendata->forget_token=$forget_token;
                $tokendata->token_time=  Carbon::now();
                // return $tokendata;
                $tokendata->save();
                $z= "127.0.0.1:8000/vendor/resetpassword/email/".Vendor::where('email',$b)->first()->forget_token;
                $details = [
                    'email' => $b,
                    'name'=> Vendor::where('email',$b)->first()->first_name,
                    'link' =>$z
                ];
                // return $details;
                Mail::to(($b))->send(new SendRegisterMail($details));
                return redirect()->route('vendor.showforgetpage')->with(['status' => 'Mail Sent.']);
            }
            else{
                return redirect()->back()->with(['status' => 'Invalid Email-ID']);
            }
        }
   }

   public function updatepasswordmail($token)
   {
        $record = Vendor::where('forget_token',$token)->get();
        if(count($record))
        {
            $start_time=strtotime($record->first()->token_time);
            $end_time=strtotime( Carbon::now());
            if(($end_time - $start_time)>600)
            {
                $update=Vendor::findorfail($record->first()->id);
                $update->forget_token="";
                $update->token_time= Carbon::now();
                $update->save();
                return redirect()->route('vendor.showforgetpage')->with(['status' => 'Sorry,The Link is Expired']);
            }
            else{
                return view('vendor.updatepasswordmail')->with(['firstname' =>$record->first()->first_name])->with(['token'=>$record->first()->forget_token]);
            }
        }
        else
        {
            return redirect()->route('vendor.showforgetpage')->with(['status' => 'Link Expired, Please Try Again.']);
        }
   }

   public function savepasswordmail(request $request)
   {
        $validator=Validator::make($request->all(),[
            'Password'  => 'required',
            'ConfirmPassword'   =>  'required|same:Password',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with(['status' => 'Something Went Wrong']);
        }
        $id=Vendor::where('forget_token',$request->token)->get()->first()->id;
        $update=Vendor::findorfail($id);
        $update->password=bcrypt($request->password);
        $update->forget_token="";
        $update->token_time= Carbon::now();
        $update->save();
        return redirect()->route('vendor')->with(['status' => 'Password Changed Successfully']);
   }

   public function updatepasswordsms($phone)
   {
        return view('vendor.updatepasswordsms',['phone'=>$phone]);
   }

   public function savepasswordsms(request $request)
   {
        $validator=Validator::make($request->all(),[
            'MobileNo'  =>  'required|digits:10|numeric',
            'OTP'   =>  'required|numeric|min:6',
            'Password'  => 'required',
            'ConfirmPassword'   =>  'required|same:Password',
        ],);
        // return $request;
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $id=(Vendor::where('mobile_no',$request->MobileNo)->where('otp',$request->OTP)->get()->first())->id;
        if(!($id))
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with(['status' => 'MobileNo/OTP is Invalid.']);
        }
        $update=Vendor::findorfail($id);
        $update->password=bcrypt($request->Password);
        $update->otp="";
        // return $update;
        $update->save();
        return redirect()->route('vendor')->with(['status' => 'Password Changed Successfully']);
   }

}
