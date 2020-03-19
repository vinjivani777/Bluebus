<?php

namespace App\Http\Controllers\Web;

use App\Model\Menu;
use App\Model\User;
use App\Model\PromoCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function bluecare()
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

        return  view('web.happycare.blue_help',$nav);
    }
}
