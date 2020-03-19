<?php

namespace App\Http\Controllers\web;

use App\Model\Menu;
use App\Model\User;
use App\Model\PromoCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
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
        return view('web.offers.offer',$nav);
    }
}
