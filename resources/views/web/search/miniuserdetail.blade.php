@extends('web.layout')

@section('page-title')
Blue Bus | Search Bus Tickets
@endsection

@section('other-page-css')

    <link href="{{asset('web/libs/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/libs/jquery-toast/jquery.toast.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('web/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('page-css')
    <style>
        .footerss{
            display:none;
        }
        .text-info{
            color:#337ab7;
        }
        .copyright{
            display: none;
        }
    </style>
@endsection

@section('content')



    <div class="row bg-white">
        <div class="col-12 pt-2 pb-1" >
            <div class="container-fluid bus-list-table">
                <div class="row" >
                    <div class="col-8" >
                        <a href="{{  url()->previous() }} }}" class="text-dark" style="font-size:19px;font-weight:800"><i class="fe-arrow-left"></i></a>
                        <span class="text-dark" style="font-size:19px;font-weight:600">{{ $Route->source_name }} </span>
                        To
                        <span class="text-dark" style="font-size:19px;font-weight:600">{{ $Route->destination_name }}  </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light">
        <div class="row m-1" >
            <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12 mt-2">
                <div class="card" style="box-shadow: 0 0 4px rgba(0,0,0,.21);">
                    <div class="card-body pt-0">
                        <div class="row ">
                            <div class="col-sm-11 col-lg-1 col-xs-11 col-md-1 col-md-1 ">
                                <img src="{{ asset('web/images/redbus/icon/van.png') }}" alt="" class="text-left" width="40px" height="40px">
                                <span  type="button" class="text-info float-right mt-1"  data-toggle="collapse" data-target="#viewBooking" aria-expanded="true" aria-controls="collapseExample">
                                    View
                                </span>
                            </div>
                            <div class="col-sm-12 col-xs-12 col-md-5 col-lg-5 mt-1 text-center">
                                <span style="font-weight:600;font-size:14px">{{ $Route->source_name }}</span> - <span style="font-weight:600;font-size:14px">{{ $Route->destination_name }}</span> | <span style="font-weight:400;font-size:16px">Tue-21May2020</span>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-center mt-1">
                                <span style="font-weight:600;font-size:14px">{{ $bus->bus_name }}</span> - <span style="font-weight:600;font-size:14px">{{ $bus->bus_reg_no }}</span>
                            </div>

                        </div>
                        <div class="collapse" id="viewBooking">
                            <div class="row mt-3">
                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                        <div class="row">
                                            <input type="hidden" name="bus_name" value="{{ $bus->id }}">
                                            <div class="col-5">
                                                <h5 style="text-transform: uppercase;">{{ substr($Route->source_name,0,3) }} {{date("g:i A",strtotime($boardPoint->pickup_time)) }}</h5>
                                            </div>
                                            <div class="col-2 m-0 p-0 text-center">
                                                {{ date('G:i',strtotime($boardPoint->pickup_time) -  strtotime($dropPoint->drop_time)) }}
                                            </div>
                                            <div class="col-5 ">
                                                <h5 class="float-right" style="text-transform: uppercase;">{{ substr($Route->destination_name,0,3) }} {{date("g:i A",strtotime($dropPoint->drop_time)) }}</h5>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-0">
                                            <div class="col-5 m-0 p-0">
                                                <hr style="border:0.5px dashed  #dcdcdc">
                                            </div>
                                            <div class="col-2 text-center">
                                                <img src="{{ asset('web/images/redbus/icon/van.png') }}" alt="" class=" float-center" style="position:absolute" width="30px" height="30px">
                                            </div>
                                            <div class="col-5 m-0 p-0">
                                                <hr style="border:0.5px dashed  #dcdcdc">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div>Thu-21May2020</div>
                                                <div>{{ $boardPoint->board_point }}</div>
                                            </div>
                                            <div class="col-6">
                                                <div class="float-right">
                                                    Thu-21May2020
                                                    <div>{{ $dropPoint->drop_point }}</div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-xl-12">
                                    <p>
                                        <span  type="button" class="text-info" style="border-bottom:1px solid #f1556c" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
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
                                                            <li>Penalty is subject to <span ng-bind="(BaggageModel[0].segDTL.split('|')[1]=='AI' || BaggageModel[0].segDTL.split('|')[1]=='UL') &amp;&amp; !isDomestic ?'24':'4'" class="ng-binding">4</span> hours prior to departure and no changes are allowed after that.</li>
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

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card-box ribbon-box">
                    <div class="ribbon  float-left" style="background-color:#6ec7b4"><i class="fe-users mt-0"></i> Passenger Information</div>
                    <div class="ribbon-content" style="max-height:">
                        <input type="hidden" name="BookingId" value="">
                        <input type="hidden" name="Route" id="routeid" class="routeid" value="{{ $Route->id }}">
                        <input type="hidden" name="bus_id" id="nowbusid" class="nowbusid" value="{{ $bus->id }}">
                        <input type="hidden" name="fareAmt"  id="nowfareAmt" class="nowfareAmt" value="{{ $fareAmt }}">
                        <input type="hidden" name="SeatNos"  id="nowseatNo" class="nowseatNo" value="{{ $SeatNos  }}">
                        <input type="hidden" name="dropPoint"  id="dropPoint" class="dropPoint" value="{{ $dropPoint->id }}">
                        <input type="hidden" name="boardPoint"  id="boardPoint" class="boardPoint" value="{{ $boardPoint->id }}">

                        @php  count($SeatNo); $r=0; @endphp
                        @foreach($SeatNo as $Details)

                            @php  $r++; @endphp

                            <div class="row" id="row_{{ $r }}">
                                <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                    <div class="card" style="box-shadow:0 0 10px rgba(0,0,0,.4)">
                                        <div class="card-body pt-0">
                                            <div class="row mt-2">


                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <label style="border-bottom:1px dashed #dcdcdc">Passenger {{ $r }} | Seat {{ $Details }}</label>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-sm-12 col-xs-12 col-md-4 col-xl-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="passanger_name">Full Name</label>
                                                        <input type="hidden" name="seat_no[]" value="{{ $Details }}">
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
                                                {{-- <div class="col-sm-12 col-xs-12 col-md-4 col-xl-4 col-lg-4">
                                                    <p class=" mb-2">Gender</p>
                                                    <div class="radio radio-danger form-check-inline">
                                                        <input type="radio" id="inlineRadio_{{ $r }}" value="m" name="gender_{{ $r }}[]" checked="">
                                                        <label for="inlineRadio_{{ $r }}"> Male </label>
                                                    </div>
                                                    <div class="radio radio-danger form-check-inline">
                                                        <input type="radio" id="inlineRadio_{{ $r }}" value="f" name="gender_{{ $r }}[]">
                                                        <label for="inlineRadio_{{ $r }}"> Female </label>
                                                    </div>
                                                </div> --}}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 ">
                <div class="card-box ribbon-box">
                    <div class="ribbon  float-left" style="background-color:#f1af43"><i class="fe-users mr-1 mt-0"></i> Contact  Details</div>
                    <div class="text-dark float-right mt-0 " style="background-color:#fff181;border-radius:5px;width:50%;padding:3px 10px">Your ticket will be sent to these details</div>
                    <div class="ribbon-content">
                        <div class="row mt-1">
                            <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                <div class="card" style="box-shadow:0 0 10px rgba(0,0,0,.4)">
                                    <div class="card-body pt-0">
                                        <div class="row mt-2">
                                            <div class="col-sm-12 col-xs-12 col-md-3 col-xl-3 col-lg-3">
                                                <div class="form-group">
                                                    <label for="country_code">Country Code</label>
                                                    <select name="country_code" id="country_code" class="form-control country_code"  style="border:1px dashed #dcdcdc" placeholder="Country Code">
                                                        <option>Country Code</option>
                                                        @foreach($Country as $Code)
                                                            <option value="{{ $Code->id }}" @if($Code->id == 101) {{ "selected" }} @endif >+{{ $Code->phone_code }}  -  {{ $Code->country_code }}</option>
                                                        @endforeach
                                                    </select>
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
                                <span  type="button" class="text-info float-right mt-1"  data-toggle="collapse" data-target="#privcePolice" aria-expanded="true" aria-controls="collapseExample">
                                    View In Details
                                </span>
                            </div>
                        </div>
                        {{-- privce police --}}
                        <div class="row collapse" id="privcePolice">
                            <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                <img src="{{ asset('web\images\redbus\icon\insurance\2.svg') }}" width="25" height="25">
                                <div>Upto 2,000 RS</div>
                                <p class="text-center text-dark">Medical expenses due to accident</p>
                            </div>

                            <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                <img src="{{ asset('web\images\redbus\icon\insurance\3.svg') }}" width="25" height="25">
                                <div>Upto 25,000 RS</div>
                                <p class="text-center text-dark">Total & Partial Disability</p>
                            </div>

                            <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                <img src="{{ asset('web\images\redbus\icon\insurance\4.svg') }}" width="25" height="25">
                                <div>Upto 2,50,000 RS</div>
                                <p class="text-center text-dark">Accidental Death</p>
                            </div>

                            <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                <img src="{{ asset('web\images\redbus\icon\insurance\1.svg') }}" width="25" height="25">
                                <div>Upto 500 RS</div>
                                <p class="text-center text-dark">Loss of Luggage (does not cover personal electronics and jewellery)</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-12 col-xl-12 col-lg-12">
                                <div class="radio radio-info ">
                                    <input type="radio" id="radio111"  value="20" name="insurance" checked="">
                                    <label for="radio111"> <p> Yes, secure my trip . I agree to the</p> </label>
                                </div>
                                <div class="radio radio-info ">
                                    <input type="radio"  value="0" id="radio112" name="insurance">
                                    <label for="radio112">No, I do not want to insure my trip</label>
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
                                <div class="checkbox checkbox-info mb-2">
                                    <input id="checkbox6" class="tAndc" type="checkbox" name="tAndc" checked="true">
                                    <label for="checkbox6">
                                        I understand and agree to the rules, <a href="#" class="text-info">Privacy Policy</a> , <a href="#" class="text-info">User Agreement</a> and <a href="#" class="text-info"">Terms &amp; Conditions</a>  of Happy Journey
                                    </label>
                                </div>
                                <span class="text-danger error-for-tAndc"></span>
                            </div>
                        </div>

                        {{-- end privace policy --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="position: sticky;bottom:0;">
        <div class="row">
            <div class="col-5 bg-dark">
                <div class="text-white" style="font-size:14px">Grand Total </div>
                <div class="text-white " id="total_fare_amt">Rs. {{ $fareAmt }}</div>
                <input type="hidden" class="final_fare_amt" id="final_fare_amt" value="{{ $fareAmt }}">

            </div>
            <div class="col-7"  style="width:100%;background:#ef6614" >
                    <button type="submit" class="btn btn-lg pl-3 pr-3 ladda-button   waves-effect process-to-pay " data-style="expand-right" data-size="l" id="process-to-pay" style="width:100%;background:#ef6614">Continue</button>
                </div>
            </div>
        </div>
    </div>



@endsection


@section('other-page-js')

            <!-- Loading buttons js -->
            <script src="{{asset('web/libs/ladda/spin.js')}}"></script>
            <script src="{{asset('web/libs/ladda/ladda.js')}}"></script>

             <!-- Tost-->
            <script src="{{ asset('web/libs/jquery-toast/jquery.toast.min.js') }}"></script>

            <!-- toastr init js-->
            <script src="{{ asset('web/js/pages/toastr.init.js') }}"></script>


            <!-- Buttons init js-->
            <script src="{{asset('web/js/pages/loading-btn.init.js')}}"></script>

            <!-- App js -->
            <script src="{{ asset('web/libs/tippy-js/tippy.all.min.js')}}"></script>

    {{-- operator filetr --}}
        <script>
            $('#insurance_amt').text('₹ '+ 20);
            var action="Insurance";

            $('body').on('change','input[type=radio][name=insurance]',function(){

                var fareAmt=$('.nowfareAmt').val();
                var ins_amt=$(this).val();
                $('#insurance_amt').text('₹ '+ins_amt);
                var action="Insurance";

                FareCount(ins_amt,action,fareAmt)
            });

            function FareCount(ins_amt,action,fareAmt)
            {
                if (action == "Insurance") {

                    if(ins_amt == 0)
                    {
                        fareAmt=parseFloat(fareAmt) - parseFloat(20);

                    }else{

                        fareAmt=parseFloat(fareAmt) + parseFloat(20);

                    }
                }


                $('#total_fare_amt').text('Total Amount : Rs .'+fareAmt);

                $('.final_fare_amt').val(fareAmt)
                $('.nowfareAmt').val(fareAmt)

            }

            $('body').on('click','input[type=checkbox][name=tAndc]',function(){

                if($(this).is(':checked') == false)
                {
                    $('.error-for-tAndc').text('Please Accept Terms and Condition')
                    $(this).val(0)

                }else{

                    $('.error-for-tAndc').text("")
                    $(this).val(1)

                }

            })

            // process the form
            $('body').on('click','.process-to-pay',function(){
                // name
                var name=[];

                    $('input[name="passanger_name[]"]').each( function() {

                        if($(this).val() == "")
                        {
                            $(this).css('border','1px dashed red')

                            return false;

                        }else{

                            name.push($(this).val());

                            $(this).css('border','1px dashed #dcdcdc')
                            return true;


                        }

                    });

                // age
                var age=[];

                    $('input[name="passanger_age[]"]').each( function() {
                        $(this).css('border','1px dashed #dcdcdc')

                        if($(this).val() == "")
                        {
                            $(this).css('border','1px dashed red')
                            return false;

                        }else{

                            age .push($(this).val());

                            $(this).css('border','1px dashed #dcdcdc')
                            return true;


                        }


                    });

                    // gender
                var gender=[];

                    $('.gender').each( function() {
                        $(this).css('border','1px dashed #dcdcdc')

                        if($(this).val() == "")
                        {
                            $(this).css('border','1px dashed red')
                            return false;

                        }else{

                            gender .push($(this).val());

                            $(this).css('border','1px dashed #dcdcdc')
                            return true;


                        }


                    });


                // countrycode
                var country_code=$('.country_code').val();
                if(country_code == "" )
                {

                        $('.error-for-country-code').text('Please Select Country Code')
                        return false;
                }

                //mobileno
                var mobileno=$('.mobileno').val();
                if(mobileno == "" )
                {

                        $('.error-for-mobileno').text('Please Enter MobileNo')
                        return false;

                }

                if(mobileno.length != 10)
                {
                        $('.error-for-mobileno').text('Only Enter 10 Digit No !')
                        return false;

                }


                //email
                var email=$('.email').val();
                if(email == "" )
                {

                        $('.error-for-email').text('Please Enter Email')
                        return false;

                }

                //term & con
                if($('input[type=checkbox][name=tAndc]').is(':checked') == false)
                {
                        $('.error-for-tAndc').text('Please Accept Terms and Condition')
                        return false;
                }

                //    fareamt
                var TotalfareAmts;
                TotalfareAmts=$('input[type=hidden][name=final_fare_amt]').val();

                if(TotalfareAmts == "")
                {
                    alert("Some thing is Wrong ! ");
                    return false;
                }

                var tAndc=$('.tAndc').val();
                var Route=$('#routeid').val();
                var busId=$('#nowbusid').val();
                var seatNo=$('#nowseatNo').val();
                var ins_amt=$('input[type=radio][name=insurance]:checked').val();
                var basefare=parseInt($('.final_fare_amt').val()) - parseInt(ins_amt)
                var boardPoint=$('#boardPoint').val();
                var dropPoint=$('#dropPoint').val();
                var fareAmt=$('#nowfareAmt').val();

                var formData = {
                    'name'              :   name,
                    'age'               :   age,
                    'gender'            :   gender,
                    'country_code'      :   country_code,
                    'mobileno'          :   mobileno,
                    'email'             :   email,
                    'bus_id'            :   busId,
                    'SeatNo'            :   seatNo,
                    'Route'             :   Route,
                    'boardPoint'        :   boardPoint,
                    'dropPoint'         :   dropPoint,
                    'fareAmt'           :   fareAmt,
                    'tAndc'             :   tAndc,
                    "_token"            : "{{ csrf_token() }}",
                };

                var l = Ladda.create(document.querySelector('.ladda-button'));
                        // l.start();
                // process the form
                $.ajax({
                    type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url         : "{{route('passanger.details.store')}}", // the url where we want to POST
                    data        : formData, // our data object
                    dataType    : 'json', // what type of data do we expect back from the server
                    encode      : true
                })
                    // using the done promise callback
                    .done(function(data) {

                        //spinnee btn stop
                        // l.stop();

                        if(data.success == true)
                        {

                            var url=('minpayment/'+'?SeatNo=' + seatNo + '&fareAmt=' + $('.final_fare_amt').val() + '&basefare=' + basefare + '&busId=' + busId + '&insurance=' + ins_amt);
                            location.href=url;

                        }else{

                            $.NotificationApp.send("Oh snap!", "Change a few things up and try submitting again.", "top-right", "#bf441d", "error");

                        }

                        // log data to the console so we can see
                        // console.log(data);

                        // here we will handle errors and validation messages
                    });

                // stop the form from submitting the normal way and refreshing the page
                event.preventDefault();
            });

        </script>
@endsection

@section('after-js')


@endsection
