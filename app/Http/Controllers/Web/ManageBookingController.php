<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageBookingController extends Controller
{
    public function cancellation()
    {
        return view('web.manage-booking.cancel_booking');
    }

    public function printticket()
    {
        return view('web.manage-booking.print_ticket');
    }

    public function smsandemailticket()
    {
        return view('web.manage-booking.email_sms_ticket');
    }
}
