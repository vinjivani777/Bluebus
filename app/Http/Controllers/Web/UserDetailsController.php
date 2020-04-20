<?php

namespace App\Http\Controllers\Web;

use App\Model\Bus;
use App\Model\Route;
use App\Model\Booking;
use App\Model\Country;
use App\Model\DropPoint;
use App\Model\PromoCode;
use App\Model\BoardPoint;
use App\Model\Contect_Diary;
use Illuminate\Http\Request;
use App\Model\Passenger_Detail;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class UserDetailsController extends Controller
{
    public function index(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'Droppoint'     =>  'required',
            'Broadpoint'    =>  'required',
            'SeatNo'    =>  'required',
            'fareAmt'    =>  'required',
            'busId'    =>  'required',

        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $params=Array();

        $params['bus_id']=$request->busId;

        $BusIdData=Bus::FindorFail($request->busId);

        $params['vendor_id']=$BusIdData->vendor_id;
        $params['customer_id']=0;
        $params['route_id']=$BusIdData->route_id;
        $params['board_point_id']=$request->Broadpoint;
        $params['drop_point_id']=$request->Droppoint;
        $params['ticket_no']='#'.rand(10000,99999);
        $params['booking_date']=date('Y-m-d');
        $params['seat_no']=$request->SeatNo;
        $params['payment_method']="padding";
        $params['total_fare']=$request->fareAmt;
        $params['note']="";
        $params['insurance_policy']=0;
        $params['booking_status']=0;
        $params['payment_status']=0;
        $params['operator_confirmation_status']=0;

        // $Booking =Booking::create($params);

         $url= URL::temporarySignedRoute(
            'unsubscribe', now()->addMinutes(20), ['BookingId' => 1,'Droppoint'=> $request->Droppoint,'Broadpoint'=> $request->Broadpoint,'busId'=> $request->busId,'fareAmt'=> $request->fareAmt,'SeatNo'=> $request->SeatNo]
        );

        return redirect($url);
    }

    public  function user(Request $request)
    {

        if (! $request->hasValidSignature()) {
            abort(401);
        }

        $bus_id=$request->busId;
        $Droppoint=$request->Droppoint;
        $Broadpoint=$request->Broadpoint;
        $fareAmt=$request->fareAmt;
        $BookingId=$request->BookingId;

        $SeatNo=$request->SeatNo;
        $SeatNo=explode(',',$SeatNo);

        $bus=Bus::whereId($bus_id)->first();
        $dropPoint=DropPoint::whereId($Droppoint)->first();
        $boardPoint=BoardPoint::whereId($Broadpoint)->first();
        $Route=Route::whereId($dropPoint->route_id)->first();
        $Country=Country::select('id','phone_code','country_code')->get();
        $PromoCode=PromoCode::whereStatus(1)->get();

        $nav=Array();

        $nav['bus']=$bus;
        $nav['dropPoint']=$dropPoint;
        $nav['boardPoint']=$boardPoint;
        $nav['fareAmt']=$fareAmt;
        $nav['SeatNo']=$SeatNo;
        $nav['Route']=$Route;
        $nav['Country']=$Country;
        $nav['PromoCode']=$PromoCode;
        $nav['BookingId']=$BookingId;



        return view('web.userdetails.index',$nav);

    }

    public function passngerdetails(Request $request)
    {

        $bus_id=$request->busId;
        $Droppoint=$request->Droppoint;
        $Broadpoint=$request->Broadpoint;
        $fareAmt=$request->fareAmt + 20;

        $SeatNos=$request->SeatNo;
        $SeatNo=explode(',',$SeatNos);

        $bus=Bus::whereId($bus_id)->first();
        $dropPoint=DropPoint::whereId($Droppoint)->first();
        $boardPoint=BoardPoint::whereId($Broadpoint)->first();
        $Route=Route::whereId($dropPoint->route_id)->first();
        $Country=Country::select('id','phone_code','country_code')->get();

        $nav=Array();

        $nav['bus']=$bus;
        $nav['dropPoint']=$dropPoint;
        $nav['boardPoint']=$boardPoint;
        $nav['fareAmt']=$fareAmt;
        $nav['SeatNo']=$SeatNo;
        $nav['Route']=$Route;
        $nav['Country']=$Country;

        $url="web/images/redbus/icon/van.png";
        $helt1="web/images/redbus/icon/insurance/1.svg";
        $helt2="web/images/redbus/icon/insurance/2.svg";
        $helt3="web/images/redbus/icon/insurance/3.svg";
        $helt4="web/images/redbus/icon/insurance/4.svg";

        $html="";

        $html.='
        <div style="height:auto;max-height:650px;overflow-x:hidden;overflow-y:auto">
            <div class="rightbar-title bg-danger p-2" >
                <h5 class="m-0 text-white">Passanger Datails</h5>
            </div>
        ';

        $html.='

            <div class="slimscroll-menu" >

                <div class="row mr-2">
                    <div class="col-sm-12 col-md-12 col-lg-12 p-1 m-2">

                            <div class="card-box ribbon-box">
                                <div class="ribbon ribbon-danger float-left "><i class="fe-users  mt-0"></i> Booking Details</div>
                                <div class="ribbon-content">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                            <div class="card" style="box-shadow:0 0 10px rgba(0,0,0,.4)">
                                                <div class="card-body pt-0">
                                                    <div class="row ">
                                                        <div class="col-sm-12 col-lg-1 col-xs-12 col-md-1 col-md-1 text-center">
                                                            <img src="'. asset($url) .'" alt="" width="40px" height="40px">
                                                        </div>
                                                        <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 mt-1 text-center">
                                                            <span style="font-weight:600;font-size:16px">'. $Route->source_name .'</span> - <span style="font-weight:600;font-size:16px">'. $Route->destination_name .'</span> | <span style="font-weight:400;font-size:16px">Tue-21May2020</span>
                                                        </div>
                                                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-center mt-1">
                                                            <span style="font-weight:600;font-size:16px">'. $bus->bus_name .'</span> - <span style="font-weight:600;font-size:16px">'. $bus->bus_reg_no .'</span>
                                                        </div>
                                                            <span  type="button" class="text-danger"  data-toggle="collapse" data-target="#viewBooking" aria-expanded="true" aria-controls="collapseExample">
                                                                View
                                                            </span>
                                                    </div>
                                                    <div style="" class="collapse" id="viewBooking">
                                                        <div class="row mt-3" >
                                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                                    <div class="row">
                                                                        <input type="hidden" name="bus_name" value="'. $bus->id .'">
                                                                        <div class="col-5">
                                                                            <h4>DEL '.date("g:i A",strtotime($boardPoint->pickup_time)) .'</h4>
                                                                        </div>
                                                                        <div class="col-2 m-0 p-0 text-center">
                                                                            '. date('G:i',strtotime($boardPoint->pickup_time) -  strtotime($dropPoint->drop_time)) .'
                                                                        </div>
                                                                        <div class="col-5 ">
                                                                            <h4 class="float-right">Bom '.date("g:i A",strtotime($dropPoint->drop_time)) .'</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row m-0 p-0">
                                                                        <div class="col-5 m-0 p-0">
                                                                            <hr style="border:0.5px dashed  #dcdcdc">
                                                                        </div>
                                                                        <div class="col-2 text-center">
                                                                            <img src="'.asset($url) .'" alt="" class=" float-center" style="position:absolute" width="30px" height="30px">
                                                                        </div>
                                                                        <div class="col-5 m-0 p-0">
                                                                            <hr style="border:0.5px dashed  #dcdcdc">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div>Thu-21May2020</div>
                                                                            <div>'. $boardPoint->board_point .'</div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="float-right">
                                                                                Thu-21May2020
                                                                                <div>'. $dropPoint->drop_point .'</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-xl-12">
                                                                <p>
                                                                    <span  type="button" class="text-danger" style="border-bottom:1px solid #f1556c" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                                                                        Fare Rules
                                                                    </span>
                                                                </p>
                                                                <div class="collapse" id="collapseExample" style="">
                                                                        <div class="row">
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                <span style="font-weight:400px;font-size:15px">Cancellation Charges</span>
                                                                                <table rules="all" border="1" class="mt-2 table table-hover" style="border:1px solid #ddd;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td scope="row" width="50%" style="padding:20px" >4 hours to 8760 hours</td>
                                                                                            <td width="50%" style="padding:20px">
                                                                                                <span >1832</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="row" width="50%" style="padding:20px">Happy Journey Fee </td>
                                                                                            <td width="50%" style="padding:20px">
                                                                                                <span >300</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
                                                                                <span style="font-weight:400px;font-size:15px">Terms & Conditions</span>
                                                                                <div class="mt-2" style="max-height:100px;overflow:auto">
                                                                                    <ul>
                                                                                        <li>The charges will be on per passenger per sector</li>
                                                                                        <li>Rescheduling Charges = Rescheduling/Change Penalty + Fare Difference (if applicable)</li>
                                                                                        <li>Partial cancellation is not allowed on the flight tickets which are book under special discounted fares</li>
                                                                                        <li>In case, the customer have not cancelled the ticket within the stipulated time or no show then only statutory taxes are refundable from the respective airlines</li>
                                                                                        <li>For infants there is no baggage allowance</li>
                                                                                        <li>In certain situations of restricted cases, no amendments and cancellation is allowed</li>
                                                                                        <li>Penalty from airlines needs to be reconfirmed before any cancellation or amendments</li>
                                                                                        <li>Penalty changes in airline are indicative and can be changed without any prior notice</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="card-box ribbon-box">
                                        <div class="ribbon  float-left" style="background-color:#6ec7b4"><i class="fe-users mt-0"></i> Passenger Information</div>
                                        <div class="text-danger float-right mt-0">Name should be same as in Goverment ID proof</div>
                                        <div class="ribbon-content" style="max-height:">
                                            <input type="hidden" name="BookingId" value="">
                                            <input type="hidden" name="Route" id="routeid" class="routeid" value="'. $Route->id .'">
                                            <input type="hidden" name="bus_id" id="nowbusid" class="nowbusid" value="'. $bus->id .'">
                                            <input type="hidden" name="fareAmt"  id="nowfareAmt" class="nowfareAmt" value="'. $fareAmt .'">
                                            <input type="hidden" name="fareAmt"  id="nowseatNo" class="nowseatNo" value="'. $SeatNos .'">';
                                              $r=0;
                                                foreach($SeatNo as $Details)
                                                {
                                                    $r++;

                                                    $html.='
                                                        <div class="row" id="row_'. $r .'">
                                                            <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                                                <div class="card" style="box-shadow:0 0 10px rgba(0,0,0,.4)">
                                                                    <div class="card-body pt-0">
                                                                        <div class="row mt-2">
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                <label style="border-bottom:1px dashed #dcdcdc">Passenger '. $r .' | Seat '. $Details .'</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-sm-12 col-xs-12 col-md-4 col-xl-4 col-lg-4">
                                                                                <div class="form-group">
                                                                                    <label for="passanger_name">Full Name</label>
                                                                                    <input type="hidden" name="seat_no[]" value="'. $Details .'">
                                                                                    <input type="text" id="passanger_name" class="form-control passanger_name" name="passanger_name[]" style="border:1px dashed #dcdcdc" placeholder="First Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-xs-12 col-md-4 col-xl-4 col-lg-4">
                                                                                <div class="form-group">
                                                                                    <label for="passanger_age">Age</label>
                                                                                    <input type="number" min="1" id="passanger_age" class="form-control passanger_age" name="passanger_age[]" style="border:1px dashed #dcdcdc" placeholder="Age">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-xs-12 col-md-4 col-xl-4 col-lg-4">
                                                                                <div class="form-group">
                                                                                    <label class="">Gender</label>
                                                                                    <select name="gender[]" id="gender" class="gender form-control" style="border:1px dashed #dcdcdc">
                                                                                        <option value="m">Male</option>
                                                                                        <option value="f">Female</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';

                                                }

                                        $html.='
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';

                            $html.='
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 ">
                                        <div class="card-box ribbon-box">
                                            <div class="ribbon  float-left" style="background-color:#f1af43"><i class="fe-users mr-1 mt-0"></i> Contact  Details</div>
                                            <div class="text-dark float-right mt-0 " style="background-color:#fff181;border-radius:5px;width:50%;padding:3px 10px">Your ticket will be sent to these details</div>
                                            <div class="ribbon-content">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                                        <div class="card" style="box-shadow:0 0 10px rgba(0,0,0,.4)">
                                                            <div class="card-body pt-0">
                                                                <div class="row mt-2">
                                                                    <div class="col-sm-12 col-xs-12 col-md-3 col-xl-3 col-lg-3">
                                                                        <div class="form-group">
                                                                            <label for="country_code">Country Code</label>
                                                                            <select name="country_code" id="country_code" class="form-control country_code"  style="border:1px dashed #dcdcdc" placeholder="Country Code">
                                                                                <option value="" >Country Code</option>';
                                                                                    foreach($Country as $Code)
                                                                                    {
                                                                                        $html.='<option value="'.$Code->id .'">+ '. $Code->phone_code .'  -  '. $Code->country_code .'</option>';
                                                                                    }
                                                                            $html.='</select>
                                                                            <span class="text-danger error-for-country-code"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-xs-12 col-md-4 col-xl-4 col-lg-4">
                                                                        <div class="form-group">
                                                                            <label for="mobileno">Mobile No</label>
                                                                            <input type="tel" id="mobileno" class="form-control mobileno" name="mobileno" style="border:1px dashed #dcdcdc"  placeholder="Mobile No">
                                                                            <span class="text-danger error-for-mobileno"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-xs-12 col-md-5 col-xl-5 col-lg-5">
                                                                        <div class="form-group">
                                                                            <label for="email">Email </label>
                                                                            <input type="email" id="email" class="form-control email" name="email" style="border:1px dashed #dcdcdc"  placeholder="Email">
                                                                            <span class="text-danger error-for-email"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-12  m-1"  style="padding:10px;background-color:#fff181">
                                                        <div class="per_passenger_insurance" id="per_passenger_insurance">
                                                            Protect your journey with the coverage below from Takaful Sincerity (per passenger) for just 20 Rs
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                                        <img src="'.asset($helt2).'" width="25" height="25">
                                                        <div>Upto 2,000 RS</div>
                                                        <p class="text-center text-dark">Medical expenses due to accident</p>
                                                    </div>

                                                    <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                                        <img src="'.asset($helt3).'" width="25" height="25">
                                                        <div>Upto 25,000 RS</div>
                                                        <p class="text-center text-dark">Total & Partial Disability</p>
                                                    </div>

                                                    <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                                        <img src="'.asset($helt4).'" width="25" height="25">
                                                        <div>Upto 2,50,000 RS</div>
                                                        <p class="text-center text-dark">Accidental Death</p>
                                                    </div>

                                                    <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                                        <img src="'.asset($helt1).'" width="25" height="25">
                                                        <div>Upto 500 RS</div>
                                                        <p class="text-center text-dark">Loss of Luggage (does not cover personal electronics and jewellery)</p>
                                                    </div>
                                                </div>

                                                <div class="row ml-1">
                                                    <div class="col-sm-12 col-xs-12 col-md-12 col-xl-12 col-lg-12">
                                                        <div class="radio radio-danger ">
                                                            <input type="radio" id="radio111" class="insurance"  value="20" name="insurance" checked="">
                                                            <label for="radio111"> <p> Yes, secure my trip with Takaful. I agree to the</p> </label>
                                                        </div>
                                                        <div class="radio radio-danger ">
                                                            <input type="radio"  value="0" class="insurance"  id="radio112" name="insurance">
                                                            <label for="radio112"> No, I am willing to risk my trip without Takaful </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row ml-1">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="checkbox checkbox-danger mb-2">
                                                            <input id="checkbox6" class="tAndc" type="checkbox" name="tAndc" value="1" checked="true">
                                                            <label for="checkbox6">
                                                                I understand and agree to the rules, <a href="#" class="text-danger">Privacy Policy</a> , <a href="#" class="text-danger">User Agreement</a> and <a href="#" class="text-danger"">Terms &amp; Conditions</a>  of Happy Journey
                                                            </label>
                                                        </div>
                                                        <span class="text-danger error-for-tAndc"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>

            </div>

            <div class="row bg-white p-1" style="position: sticky;bottom: 0;">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="float-left" style="font-size:18px;font-weight:500 total_fare_amt" id="total_fare_amt">Total Amount : Rs . '. $fareAmt .' </div>
                    <input type="hidden" class="final_fare_amt" id="final_fare_amt" value="'. $fareAmt .'">
                    <button class="btn btn-sm btn-danger  ladda-button   waves-effect  float-right process-to-pay "  data-style="expand-right" data-size="l" id="process-to-pay">PROCEES TO PAY</button>
                </div>
            </div>
        </div>
        ';

        // $nav['html']=$html;
        return $html;

    }

    public function passanger(Request $request)
    {

       try {
            //code...

            $validator=Validator::make($request->all(),[
                'country_code'     =>  'required',
                'mobileno'    =>  'required',
                'email'    =>  'required',
                'tAndc'    =>  'required',

            ]);

            if($validator->fails())
            {

                return Response::json(array(
                    'success' => false,
                    'errors' => $validator->getMessageBag()

                ));
            }

            $params=array();

            $params['user_id']=1;
            $params['bus_id']=$request->bus_id;
            $params['ticket_id']=1;
            $params['date_of_journey']=date('Y-m-d');

            if ($request->insurance == 0) {
                $params['insurance_status']=0;
            }else{
                $params['insurance_status']=1;

            }
            $params['status']=1;

            // $passanger=Passenger_Detail::create($params);

            $contect=array();

            $contect['ticket_no']=1;
            $contect['country_code']=$request->country_code;
            $contect['mobile_no']=$request->mobileno;
            $contect['email']=$request->email;
            $contect['customer_id']=1;

            // $CD=Contect_Diary::create($contect);


            return Response::json(array(
                'success' => true
            ));


        } catch (\Throwable $th) {



            return Response::json(array(
                'success' => false,

            ));

        }



    }

    public function payment(Request $request)
    {

          $url= URL::temporarySignedRoute(
                'payment.view', now()->addMinutes(70), ['BookingId' => 1,'fareAmt'=>$request->fareAmt,'basefare'=>$request->basefare,'SeatNo'=>$request->SeatNo,'busId'=>$request->busId,'insurance'=>$request->insurance]
            );

            return redirect($url);


    }

    public function paymentview(Request $request)
    {

        if (! $request->hasValidSignature()) {
            abort(401);
        }

        $PromoCode=PromoCode::whereStatus(1)->get();

        $nav=Array();
        $nav['BookingId']=$request->BookingId;
        $nav['fareAmt']=$request->fareAmt;
        $nav['basefare']=$request->basefare;
        $nav['SeatNo']=$request->SeatNo;
        $nav['busId']=$request->busId;
        $nav['insurance']=$request->insurance;
        $nav['PromoCode']=$PromoCode;
// return $nav;
        return view('web.userdetails.paymentpage',$nav);
    }


    public function minpayment(Request $request)
    {

          $url= URL::temporarySignedRoute(
                'min.payment.view', now()->addMinutes(70), ['BookingId' => 1,'fareAmt'=>$request->fareAmt,'basefare'=>$request->basefare,'SeatNo'=>$request->SeatNo,'busId'=>$request->busId,'insurance'=>$request->insurance]
            );

            return redirect($url);


    }

    public function minpaymentview(Request $request)
    {

        if (! $request->hasValidSignature()) {
            abort(401);
        }

        $PromoCode=PromoCode::whereStatus(1)->get();

        $nav=Array();
        $nav['BookingId']=$request->BookingId;
        $nav['fareAmt']=$request->fareAmt;
        $nav['basefare']=$request->basefare;
        $nav['SeatNo']=$request->SeatNo;
        $nav['busId']=$request->busId;
        $nav['insurance']=$request->insurance;
        $nav['PromoCode']=$PromoCode;
// return $nav;
        return view('web.userdetails.minpaymentpage',$nav);
    }


    public function createRequest(Request $request)
    {

        $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER,
                        array("X-Api-Key:test_fef02ad5747a2c8a8b6db85e86c",
                            "X-Auth-Token:test_db99fed0f2b95d8265cb61cb7a8"));

            $payload = Array(
                'purpose' => 'Testing',
                'amount' => $request->amount,
                'phone' => $request->mobile,
                'buyer_name' => $request->name,
                "longurl"=> "https://test.instamojo.com/@jivanivinay777/d66cb29dd059482e8072999f995c4eef/",
                'redirect_url' => '',
                'send_email' => true,
                'webhook' => 'http://www.example.com/webhook/',
                'send_sms' => true,
                'email' => $request->email,
                'allow_repeated_payments' => false
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
            $response = curl_exec($ch);
            curl_close($ch);

            echo $response;

            $data=json_decode($response,true);

            return redirect ($data['payment_request']['longurl']);

        
    }


    public function redirect(Request $request)
    {
        return $request->all();
    }

    public function promovalidate(Request $request)
    {

        if (! $request->hasValidSignature()) {
            abort(401);
        }

        try {

            $validator=Validator::make($request->all(),[
                'promoId'   => 'required|exists:promocodes,id',
                'fareAmt'   => 'required',
                'SeatNo'    => 'required',

            ]);

            if ($validator->fails())
            {
                return Response::json(array(
                    'success' => false,
                    'errors' => $validator->getMessageBag()

                ));
            }

            $promoId=$request->promoId;
            $SeatNo=$request->SeatNo;
            $fareAmt=$request->fareAmt;

            $PromoCode=PromoCode::findOrFail($promoId);

            if($PromoCode->min_order_amount <= $fareAmt)
            {
                if($PromoCode->discount_type == "Flat")
                {
                $TotalAmt=$PromoCode->amount;
                return response()->json(['promocode'=>$TotalAmt]);


                }
                // else{

                //     return response()->json(['errors'=>"Sorry ! Not For Apply"]);

                // }

                if($PromoCode->discount_type ==  "Percentage")
                {
                    $amt= $PromoCode->amount / 100;
                    $TotalAmt=$amt * $fareAmt;
                    return response()->json(['promocode'=>$TotalAmt]);

                }
                // else{

                //     return response()->json(['errors'=>"Sorry ! Not For Apply"]);

                // }

            }else{

                return response()->json(['errors'=>"Sorry ! Not For Apply"]);

            }

        } catch (\Throwable $th) {

                return response()->json(['errors'=>"Sorry ! Not For Apply"]);
        }

    }

}
