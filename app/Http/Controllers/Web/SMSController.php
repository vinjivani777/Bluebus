<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SMSController extends Controller
{
    public static function LoginOtp($mobileNo,$smsTemplate,$otp)
    {

        // if(count($mobileNo) <= 10){
        //     $mobileNo = "91".$mobileNo;
        // }

        $ApiKey="5fc1ffa2-c104-11ea-9fa5-0200cd936042";


        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        // CURLOPT_URL => "https://2factor.in/API/V1/".$ApiKey."/SMS/".$mobileNo."/".$otp."/login",
        // CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_ENCODING => "",
        // CURLOPT_MAXREDIRS => 10,
        // CURLOPT_TIMEOUT => 10,
        // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        // CURLOPT_CUSTOMREQUEST => "GET",
        // CURLOPT_POSTFIELDS => "",
        // CURLOPT_HTTPHEADER => array("content-type: application/x-www-form-urlencoded")));

        
        // $response = curl_exec($curl);
        // $err = curl_error($curl);

        // curl_close($curl);

        // if ($err) {
        // return  "cURL Error #:" . $err;
        // } else {
        // return  json_decode($response);
        // }


        $client = new \GuzzleHttp\Client();
        $url ="https://2factor.in/API/V1/".$ApiKey."/SMS/".$mobileNo."/".$otp."/login";
        
        $request = $client->get($url);
       return  $response = $request->getBody();

        
    }
}
