<?php

namespace App\Http\Controllers\Web;

use App\Model\Menu;
use App\Model\User;
use App\Model\PromoCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageBookingController extends Controller
{
    public function cancellation()
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
        return view('web.manage-booking.cancel_booking',$nav);
    }

    public function printticket()
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
        return view('web.manage-booking.print_ticket',$nav);
    }

    public function smsandemailticket()
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
        return view('web.manage-booking.email_sms_ticket',$nav);
    }
}
