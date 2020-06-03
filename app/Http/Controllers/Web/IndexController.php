<?php

namespace App\Http\Controllers\Web;

use App\Model\Menu;
use App\Model\User;
use App\Model\PromoCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact_us_request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function bluecare()
    {
        $promoCode=PromoCode::wherestatus(1)->get();
        $promoFirst=PromoCode::wherestatus(1)->first();
        $Menus=Menu::whereStatus(1)->get();
        $nav=Array();

        $nav['bookingNav']="navbar-active";
        $nav['promoCode']=$promoCode;
        $nav['promoFirst']=$promoFirst;
        $nav['promoCount']=count($promoCode);
        $nav['Menus']=$Menus;

        return  view('web.happycare.blue_help',$nav);
    }

    public function contactus()
    {
        $promoCode=PromoCode::wherestatus(1)->get();
        $promoFirst=PromoCode::wherestatus(1)->first();
        $Menus=Menu::whereStatus(1)->get();
        $nav=Array();

        $nav['bookingNav']="navbar-active";
        $nav['promoCode']=$promoCode;
        $nav['promoFirst']=$promoFirst;
        $nav['promoCount']=count($promoCode);
        $nav['Menus']=$Menus;

        return  view('web.contactus',$nav);
    }

    public function contactusrequest(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'firstname' =>  'required',
            'email'     =>  'required|email',
            'lastname'  =>  'required',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data=$request;
        $params=array();
        $params['firstname']=$request->firstname;
        $params['lastname']=$request->lastname;
        $params['email']=$request->email;
        $params['message']=$request->message;
        $status=Contact_us_request::create($params);
        dd($status);
        return redirect()->route('web.index');
    }

    public function faqs()
    {
        $promoCode=PromoCode::wherestatus(1)->get();
        $promoFirst=PromoCode::wherestatus(1)->first();
        $Menus=Menu::whereStatus(1)->get();
        $nav=Array();

        $nav['bookingNav']="navbar-active";
        $nav['promoCode']=$promoCode;
        $nav['promoFirst']=$promoFirst;
        $nav['promoCount']=count($promoCode);
        $nav['Menus']=$Menus;

        return  view('web.faqs',$nav);
    }
}
