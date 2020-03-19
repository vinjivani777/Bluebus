<?php

namespace App\Http\Controllers\Web;

use App\Model\Menu;
use App\Model\User;
use App\Model\PromoCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function index()
    {
        $promoCode=PromoCode::wherestatus(1)->get();
        $promoFirst=PromoCode::wherestatus(1)->first();
        $Menus=Menu::whereStatus(1)->get();
        $nav=Array();

        $nav['active']="active";
        $nav['promoCode']=$promoCode;
        $nav['promoFirst']=$promoFirst;
        $nav['promoCount']=count($promoCode);
        $nav['Menus']=$Menus;

        return view('web.homepage.minindex',$nav);
    }

    public function LoginVaiOTP(Request $request)
    {
        $mobileNo=$request->mobileNo;
        $otp= mt_rand(000000,999999);

        $validator = Validator::make($request->all(), [
			'mobileNo' => 'required|numeric|min:10',
        ]);

        if($validator->fails())
        {
            return "Please Enter Valid Mobile number";
        }

        $UserDetails=User::whereMobile_no($mobileNo)->first();

        if($UserDetails != " " && $UserDetails)
        {

                $smsTemplate = "Your One Time Password is ".$otp."and it valid for the next  10 mins. Please do not share this
                OTP with anyone. Thank you, Happy Journey Team.";

                SMSController::LoginOtp($mobileNo,$smsTemplate,$otp);


                $forgot_token =  bcrypt($mobileNo.$otp);
                $r=count(User::get());
                $User=Array();


                $User['remember_token']=md5($otp.$mobileNo);
                $User['token']='HappyJourny';
                $User['otp']=$otp;
                $User['forget_token']= $forgot_token;
                $User['referral_code']=str_random(5);

                $User=User::whereId($UserDetails->id)->update($User);

                return "Success";


        }else{

            if($mobileNo != "")
                {




                    $smsTemplate = "Your One Time Password is ".$otp."and it valid for the next  10 mins. Please do not share this
                                    OTP with anyone. Thank you, Happy Journey Team.";

                    SMSController::LoginOtp($mobileNo,$smsTemplate,$otp);


                    $forgot_token =  bcrypt($mobileNo.$otp);
                    $r=count(User::get());
                    $User=New  User;

                    $User->role_id=3;
                    $User->username="User". $r . str_random(5);
                    $User->first_name="User". $r . str_random(5);;
                    $User->last_name="User". $r . str_random(5);;
                    $User->gender="m";
                    $User->email="User". $r . str_random(5) . "@happyjourney.com";
                    $User->mobile_no=$mobileNo;
                    $User->password= bcrypt("User". $r . str_random(5));
                    $User->avatar="admin/images/admin-profile/defaultimage.png";
                    $User->status=1;
                    $User->remember_token=md5($otp.$mobileNo);
                    $User->token='HappyJourny';
                    $User->otp=$otp;
                    $User->forget_token= $forgot_token;
                    $User->referral_code=str_random(5);
                    $User->parent_id=0;

                    $User->save();


                    return "Success";


                }else{

                    return "Error";
                }

        }

    }


    public function optvarify(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'OTP'       => 'required|exists:users,otp',
            'mobileNo'  => 'required|exists:users,mobile_no'
        ]);

        if($validator->fails())
        {
            return "Please Enter Valid OTP";
        }

        $OTP=$request->OTP;
        $mobileNo=$request->mobileNo;

        if($OTP !="" && $mobileNo != "")
        {

            $UserDetails=User::wheremobile_no($mobileNo)->first();

            $User=Array();

            $User['otp']="";

            $Update=User::whereId($UserDetails->id)->update($User);
            // dd($Update);
            Auth::guard('user')->loginUsingId($Update);

            return "Success";


        }else{

            return "Error";
        }
    }


    public function logout()
    {
        Auth::guard('user')->logout();

        return redirect()->route('web.index');
    }
}
