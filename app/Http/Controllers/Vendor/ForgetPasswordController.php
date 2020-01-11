<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Vendor;
use Illuminate\Http\Request;
use App\Mail\SendRegisterMail;
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
       $forgettoken= str_random(60);
        b:if(is_numeric($b))
        {
            $record= Vendor::where('phone_number',$b)->get();
            if(count($record))
            {
                return Redirect::to('https://2factor.in/API/V1/d15b8dc8-2c7d-11ea-9fa5-0200cd936042/SMS/'.$b.'/'.$otp);
                return redirect()->route('vendor.savepasswordsms');
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
                $tokendata->token_time= now();
                // return $tokendata;
                $tokendata->save();
                $z= "127.0.0.1:8000/vendor/resetpassword/email/".Vendor::where('email',$b)->first()->forgettoken;
                $details = [
                    'email' => $b,
                    'name'=> Vendor::where('email',$b)->first()->first_name,
                    'link' =>$z
                ];

                Mail::to($b)->send(new SendRegisterMail($details));
                return redirect()->route('vendor.showforgetpage')->with(['status' => 'Mail Sent.']);
            }
            else{
                return redirect()->back()->with(['status' => 'Invalid Email-ID']);
            }
        }
   }

   public function updatepasswordmail($token)
   {
        $record = Vendor::where('forgettoken',$token)->get();
        if(count($record))
        {
            $start_time=strtotime($record->first()->token_time);
            $end_time=strtotime(now());
            if(($end_time - $start_time)>600)
            {
                return redirect()->route('vendor.showforgetpage')->with(['status' => 'Sorry,The Link is Expired']);
            }
            else{
                return view('vendor.updatepassword')->with(['firstname' =>$record->first()->first_name])->with(['token'=>$record->first()->forgettoken]);
            }
        }
        else
        {
            return redirect()->route('vendor.showforgetpage')->with(['status' => 'Invalid Link']);
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
        $id=Vendor::where('forgettoken',$request->token)->get()->first()->id;
        $update=Vendor::findorfail($id);
        $update->password=bcrypt($request->password);
        $update->forgettoken="";
        $update->token_time=now();
        $update->save();
        return redirect()->route('vendor')->with(['status' => 'Password Changed Successfully']);
   }

   public function updatepasswordsms()
   {
        return view('vendor.updatepassword');
   }

   public function savepasswordsms(request $request)
   {
        return $request;
   }

}
