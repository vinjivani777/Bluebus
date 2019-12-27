<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{

    public function generalsetting()
    {
        return view('admin.setting.general-setting');
    }

    public function generalsettingstore()
    {
        //
    }

    public function emailsetting()
    {
        return view('admin.setting.email-setting');
    }

    public function emailsettingstore(Request $request)
    {
        //
    }

    public function smssetting()
    {
        return view('admin.setting.sms-setting');
    }

    public function smssettingstore(Request $request)
    {
    }

    public function contactsetting()
    {
        return view('admin.setting.contact-setting');

    }

    public function contactsettingstore(Request $request)
    {
        //
    }

}
