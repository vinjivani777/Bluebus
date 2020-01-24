<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SMSController extends Controller
{
    public static function sendSMS($number,$otp){
        if(strlen($number) <= 10){
            $number = "91".$number;
        }
        // dd($number,$otp);
        $client = new \GuzzleHttp\Client();
        $url = "https://2factor.in/API/V1/d15b8dc8-2c7d-11ea-9fa5-0200cd936042/SMS/$number/$otp";

         $request = $client->get($url);
        $response = $request->getBody();
        return json_decode($response);

    }
}
