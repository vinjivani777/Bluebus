<?php

namespace App\Http\Controllers\Web;

use App\Model\Menu;
use App\Model\Contect_Diary;
use App\Model\Booking;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        if(Auth::guard('user')->check())
        {


        $Menus=Menu::whereStatus(1)->get();
        $User=Auth::guard('user')->user()->id;
        $CD=Contect_Diary::select('booking_id')->wheremobile_no($User)->get();
        $nav=array();
        $nav['Menus']=$Menus;

        return view('web.profile.profile',$nav);

        }else{

            return redirect()->route('web.index');
        }

    }
}
