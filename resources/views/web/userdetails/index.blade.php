<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Happy Journey Travels  | Booking Ticket</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('web/images/favicon.ico')}}">

        <link rel="stylesheet" href="{{ asset('web\jquery\jquery-ui.css') }}">

        <!-- extra css  -->

        <!-- App css -->
        <link href="{{ asset('web/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/responsive.css') }}" rel="stylesheet" type="text/css" />

        {{-- sweetalert --}}
        <link href="{{asset('admin/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />


        <style>
            /* customet animation */
            .sidenav {
              height: 100%;
              width: 0;
              position: fixed;
              z-index: 500;
              top: 10;
              left: 0;
              background-color: white;
              overflow-x: hidden;
              overflow-y: inherit;
              transition: 0.5s;
              padding-top: 20px;
            }

            .sidenav a {
              padding: 8px 8px 8px 32px;
              text-decoration: none;
              font-size: 15px;
              color: #818181;
              display: block;
              transition: 0.3s;
            }

            .sidenav a:hover {
              color: #d84f57;
            }

            .sidenav .closebtn {
              position: absolute;
              top: 0;
              right: 25px;
              font-size: 36px;
              margin-left: 50px;
            }



            @media screen and (max-height: 450px) {
              .sidenav {padding-top: 15px;}
              .sidenav a {font-size: 15px;}
            }


            .offer-main-div{
                transition: all 1s ;
            }

            .offer-main-div:hover {
                transform: translateY(-5px);}

                display: inline-block;
                zoom: 1;
                margin: 1em .5em;
                cursor: pointer;
                box-shadow: 0 0 5px 0 rgba(0,0,0,.75);

            }
            .nav-bordered{
                border-bottom: 0px solid !important;
            }
            .payment-style{
                border-width:0px 1px 1px 1px;
                border-style:solid;
                border-color:#e2e2e2;
                background-color:#f1f5f7;
            }
            .payment{
                border-width:0px 0px 1px 1px;
                border-style:solid;
                border-color:#e2e2e2;
                background-color:#f1f5f7;
            }
            .active{
                border-width:0px 0px 1px 1px;
                border-style:solid;
                border-color:#dcdcdc;
                background-color:white;
            }

        </style>
    </head>

    <body class="bg-light" style="padding-bottom: 0px;">

        <div class="navbar-custom bg-white">
            <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                        <span class="pro-user-name ml-1 text-danger" id="timer">
                            <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="http://127.0.0.1:8000/admin/index" class="logo text-center">
                    <span class="logo-lg">

                         <span class="logo-lg-text-dark text-danger">HappyJourny</span>
                    </span>
                    <span class="logo-sm">
                         <span class="logo-lg-text-light">HJ</span>
                    </span>
                </a>
            </div>


        </div>

        <div class="content-page m-0" style="width:100%">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid m-0">

                    <!-- start page title -->
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title-right" style=""><div id="timer"></div></h4>
                            <div class="page-title">
                                <ol class="breadcrumb m-0" style="font">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Happy Journey</a></li>
                                    <li class="breadcrumb-item ">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <form action="{{ route('passanger.details.store',['BookingId'=>1,'signature'=>'79e26b4113920fff5c6292a792bacb24fc6f5aba09f4e88c2069cfb0b8fadf23']) }}" id="myform" method="POST">
                        @csrf
                    <div class="row">

                            <div class="col-sm-12 col-md-8 col-lg-8 p-1">



                                    {{-- Booking Details --}}
                                    <div class="card-box ribbon-box">
                                        <div class="ribbon ribbon-danger float-left"><i class="fe-users mr-1 mt-0"></i> Booking Details</div>
                                        <div class="ribbon-content">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12">
                                                    <div class="card" style="box-shadow:0 0 10px rgba(0,0,0,.4)">
                                                        <div class="card-body pt-0">
                                                            <div class="row ">
                                                                <div class="col-sm-12 col-lg-1 col-xs-12 col-md-1 col-md-1 text-center">
                                                                    <img src="{{ asset('web/images/redbus/icon/van.png') }}" alt="" width="40px" height="40px">
                                                                </div>
                                                                <div class="col-sm-12 col-xs-12 col-md-5 col-lg-5 mt-1 text-center">
                                                                    <span style="font-weight:600;font-size:16px">{{ $Route->source_name }}</span> - <span style="font-weight:600;font-size:16px">{{ $Route->destination_name }}</span> | <span style="font-weight:400;font-size:16px">Tue-21May2020</span>
                                                                </div>
                                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-center mt-1">
                                                                    <span style="font-weight:600;font-size:16px">{{ $bus->bus_name }}</span> - <span style="font-weight:600;font-size:16px">{{ $bus->bus_reg_no }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                                        <div class="row">
                                                                            <input type="hidden" name="bus_name" value="{{ $bus->id }}">
                                                                            <div class="col-5">
                                                                                <h4>DEL {{date("g:i A",strtotime($boardPoint->pickup_time)) }}</h4>
                                                                            </div>
                                                                            <div class="col-2 m-0 p-0 text-center">
                                                                                {{ date('G:i',strtotime($boardPoint->pickup_time) -  strtotime($dropPoint->drop_time)) }}
                                                                            </div>
                                                                            <div class="col-5 ">
                                                                                <h4 class="float-right">Bom {{date("g:i A",strtotime($dropPoint->drop_time)) }}</h4>
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
                                    </div>
                                    {{-- end booking Detais --}}

                                    {{-- passabger details --}}
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="card-box ribbon-box">
                                                <div class="ribbon  float-left" style="background-color:#6ec7b4"><i class="fe-users mr-1 mt-0"></i> Passenger Information</div>
                                                <div class="text-danger float-right mt-0">Name should be same as in Goverment ID proof</div>
                                                <div class="ribbon-content" style="max-height:">
                                                    <input type="hidden" name="BookingId" value="{{ $BookingId }}">
                                                    <input type="hidden" name="Route" value="{{ $Route->id }}">
                                                    <input type="hidden" name="bus_id" value="{{ $bus->id }}">

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
                                    {{-- end passanger details --}}

                                    {{-- contect Details --}}
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
                                                                                <label for="country_code">Coubtry Code</label>
                                                                                <select name="country_code" id="country_code" class="form-control country_code"  style="border:1px dashed #dcdcdc" placeholder="Country Code">
                                                                                    <option>Country Code</option>
                                                                                    @foreach($Country as $Code)
                                                                                        <option value="{{ $Code->id }}">+{{ $Code->phone_code }}  -  {{ $Code->country_code }}</option>
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
                                                        </div>
                                                    </div>
                                                    {{-- privce police --}}
                                                    <div class="row">
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

                                                    <div class="row ml-1">
                                                        <div class="col-sm-12 col-xs-12 col-md-12 col-xl-12 col-lg-12">
                                                            <div class="radio radio-danger ">
                                                                <input type="radio" id="radio111"  value="20" name="insurance" checked="">
                                                                <label for="radio111"> <p> Yes, secure my trip with Takaful. I agree to the</p> </label>
                                                            </div>
                                                            <div class="radio radio-danger ">
                                                                <input type="radio"  value="0" id="radio112" name="insurance">
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
                                                                <input id="checkbox6" class="tAndc" type="checkbox" name="tAndc" checked="true">
                                                                <label for="checkbox6">
                                                                    I understand and agree to the rules, <a href="#" class="text-danger">Privacy Policy</a> , <a href="#" class="text-danger">User Agreement</a> and <a href="#" class="text-danger"">Terms &amp; Conditions</a>  of Happy Journey
                                                                </label>
                                                            </div>
                                                            <span class="text-danger error-for-tAndc"></span>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <div class="float-left" style="font-size:18px;font-weight:500">Total Amount : Rs . {{ $fareAmt }} </div>
                                                        <button class="btn btn-sm btn-danger float-right">PROCEES TO PAY</button>
                                                        </div>
                                                    </div>
                                                    {{-- end privace policy --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end contace detals --}}




                                {{-- payment section --}}
                                <div class="row" style="display:none;">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 col-xl-12">
                                        <div class="card-box ribbon-box" style="height:700px;max-height:1000px;box-shadow:0 0 10px rgba(0,0,0,.4)">
                                            <div class="ribbon  float-left" style="background-color:#465986"><i class="fe-users mr-1 mt-0"></i> Payment Details</div>
                                            <div class="ribbon-content">
                                                <div class="row">
                                                    <div class="col-xl-12 col-sm-12 col-lg-12 col-xs-12 col-md-12 " >
                                                        <div class="row">
                                                            <div class="col-sm-3 payment p-0 m-0">
                                                                <div class="nav flex-column  nav-pills-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                    <a class="nav-link text-dark  payment-style" id="v-pills-credit-dabit-card-tab" data-toggle="pill" href="#v-pills-credit-dabit-card" role="tab"  aria-controls="v-pills-credit-dabit-card" aria-selected="false">
                                                                        Debit/Credit Card</a>
                                                                    <a class="nav-link text-dark payment-style" id="v-pills-net-banking-tab" data-toggle="pill" href="#v-pills-net-banking"  role="tab" aria-controls="v-pills-banking" aria-selected="false">
                                                                        Net Banking</a>
                                                                    <a class="nav-link text-dark payment-style" id="v-pills-wallet-tab" data-toggle="pill" href="#v-pills-wallet"  role="tab" aria-controls="v-pills-wallet" aria-selected="false">
                                                                        My Wallet</a>
                                                                    <a class="nav-link text-dark payment-style" id="v-pills-upi-tab" data-toggle="pill" href="#v-pills-upi"  role="tab" aria-controls="v-pills-upi" aria-selected="true">
                                                                        UPI</a>
                                                                    <a class="nav-link text-dark payment-style" id="v-pills-phonepe-tab" data-toggle="pill" href="#v-pills-phonepe"  role="tab" aria-controls="v-pills-phonepe" aria-selected="true">
                                                                        PhonePe</a>
                                                                    <a class="nav-link text-dark active show payment-style" id="v-pills-paypal-tab" data-toggle="pill" href="#v-pills-paypal"  role="tab" aria-controls="v-pills-paypal" aria-selected="true">
                                                                        Paypal</a>
                                                                </div>
                                                            </div> <!-- end col-->
                                                            <div class="col-sm-9">
                                                                <div class="tab-content pt-0">
                                                                    <div class="tab-pane fade " style="border:none" id="v-pills-credit-dabit-card" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                        <div class="row">
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                <div class="form-group">
                                                                                    <label for="card_no">Enter Your Card No..</label>
                                                                                    <input type="text" id="card_no" maxlength="19" style="border:1px dashed #dcdcdc" class="form-control" name="card_no" placeholder="xxxx-xxxx-xxxx-xxxx">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                <div class="form-group">
                                                                                    <label for="card_holder">Enter Card Holder Name</label>
                                                                                    <input type="text" id="card_holder" maxlength="19" style="border:1px dashed #dcdcdc" class="form-control" name="card_holder" placeholder="Card Holder Name">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                                                                <div class="form-group">
                                                                                    <label for="month">Expiry Month</label>
                                                                                    <select name="month" id="month" class="form-control" style="border:1px dashed #dcdcdc">
                                                                                        <option value="">Month</option>
                                                                                        @for ($i = 1; $i <=12; $i++)
                                                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                                                        @endfor
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                                                                <div class="form-group">
                                                                                    <label for="year">Expiry Year</label>
                                                                                    <select name="year" id="year" class="form-control" style="border:1px dashed #dcdcdc">
                                                                                        <option value="">Year</option>
                                                                                        @for ($i =2000; $i <=2050; $i++)
                                                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                                                    @endfor
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                                                                <div class="form-group">
                                                                                    <label for="cvv">CVV</label>
                                                                                    <input type="text" id="cvv" maxlength="3" style="border:1px dashed #dcdcdc" class="form-control" name="cvv" placeholder="xxxx-xxxx-xxxx-xxxx">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade " style="border:none;" id="v-pills-net-banking" role="tabpanel" aria-labelledby="v-pills-net-banking-tab">
                                                                        <div class="row">
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 ">
                                                                                <label style="font-size:16px">SELECT POPULAR BANKS</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                <div style="border:1px solid #dcdcdc" >
                                                                                    <div class="radio m-2">
                                                                                        <input type="radio"  name="nbank" id="radio1" value="option1" checked=""    >
                                                                                        <label for="radio1">
                                                                                            <img class="ml-2" src="{{ asset('web\images\redbus\icon\bank\ICIB.png') }}" title="" width="25" > <span style="font-size:16px;font-weight:600">ICIC Bank</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                <div style="border:1px solid #dcdcdc" class="">
                                                                                    <div class="radio m-2">
                                                                                        <input type="radio"  name="nbank" id="radio2" value="option1" >
                                                                                        <label for="radio2">
                                                                                            <img class="ml-2" src="{{ asset('web\images\redbus\icon\bank\PNBB.png') }}" title="" width="25" > <span style="font-size:16px;font-weight:600">Punjab National Bank</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                <div style="border:1px solid #dcdcdc" >
                                                                                    <div class="radio m-2">
                                                                                        <input type="radio"  name="nbank" id="radio3" value="option1" checked=""    >
                                                                                        <label for="radio3">
                                                                                            <img class="ml-2" src="{{ asset('web\images\redbus\icon\bank\SBIB.png') }}" title="" width="25" > <span style="font-size:16px;font-weight:600">State Bank of India</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                <div style="border:1px solid #dcdcdc" class="">
                                                                                    <div class="radio m-2">
                                                                                        <input type="radio"  name="nbank" id="radio4" value="option1" >
                                                                                        <label for="radio4">
                                                                                            <img class="ml-2" src="{{ asset('web\images\redbus\icon\bank\YESB.png') }}" title="" width="25" > <span style="font-size:16px;font-weight:600">Yes Bank</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                <div style="border:1px solid #dcdcdc" >
                                                                                    <div class="radio m-2">
                                                                                        <input type="radio"  name="nbank" id="radio5" value="option1" checked=""    >
                                                                                        <label for="radio5">
                                                                                            <img class="ml-2" src="{{ asset('web\images\redbus\icon\bank\hdfb.png') }}" title="" width="25" > <span style="font-size:16px;font-weight:600">HDFC Bank</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                <div style="border:1px solid #dcdcdc" class="">
                                                                                    <div class="radio m-2">
                                                                                        <input type="radio"  name="nbank" id="radio6" value="option1" >
                                                                                        <label for="radio6">
                                                                                            <img class="ml-2" src="{{ asset('web\images\redbus\icon\bank\PSBNB.png') }}" title="" width="25" > <span style="font-size:16px;font-weight:600">Punjab And Sind Bank</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-3">
                                                                            <div class="col-12 mx-auto text-center">
                                                                                <span style="font-size:16px;font-weight:600">OR</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-1">
                                                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                                                <label for="other_bank">SELECT OTHER BANK</label>
                                                                                <select class="form-control" name="other_bank" id="other_bank" style="border:1px solid #dcdcdc">
                                                                                    <option value="Select">Select </option>
                                                                                    <option value="" >ICICI&nbsp;Bank</option>
                                                                                    <option value="" >Punjab National&nbsp;Bank</option>
                                                                                    <option value="" >State&nbsp;Bank&nbsp;of&nbsp;India</option>
                                                                                    <option value="" >Yes Bank</option>
                                                                                    <option value="" >HDFC Bank</option>
                                                                                    <option value="" >Punjab And Sind Bank</option>
                                                                                    <option value="" >Punjab And Maharashtra Co-operative Bank Limited</option>
                                                                                    <option value="" >Lakshmi Vilas Bank - Corporate Netbanking</option>
                                                                                    <option value="" >Lakshmi Vilas Bank - Retail Netbanking</option>
                                                                                    <option value="" >UCO Bank</option>
                                                                                    <option value="" >The Nainital Bank</option>
                                                                                    <option value="" >The Bharat Co-op. Bank Ltd</option>
                                                                                    <option value="" >Janata Sahakari Bank Pune</option>
                                                                                    <option value="" >Cosmos Bank</option>
                                                                                    <option value="" >IDFC Netbanking</option>
                                                                                    <option value="" >State&nbsp;Bank&nbsp;of&nbsp;Mysore</option>
                                                                                    <option value="" >State&nbsp;Bank&nbsp;of&nbsp;Patiala</option>
                                                                                    <option value="" >State&nbsp;Bank&nbsp;of&nbsp;Travancore</option>
                                                                                    <option value="" >Syndicate&nbsp;Bank</option>
                                                                                    <option value="" >Tamilnad Mercantile&nbsp;Bank</option>
                                                                                    <option value="" >Union&nbsp;Bank&nbsp;of&nbsp;India</option>
                                                                                    <option value="" >United&nbsp;Bank&nbsp;Of&nbsp;India</option>
                                                                                    <option value="" >Vijaya&nbsp;Bank</option>
                                                                                    <option value="" >Ratnakar Bank </option>
                                                                                    <option value="" >Saraswat Bank</option>
                                                                                    <option value="" >Shamrao Vitthal Co-operative Bank </option>
                                                                                    <option value="" >South Indian&nbsp;Bank</option>
                                                                                    <option value="" >Standard Chartered&nbsp;Bank</option>
                                                                                    <option value="" >State&nbsp;Bank&nbsp;of Travencore</option>
                                                                                    <option value="" >State&nbsp;Bank&nbsp;Of&nbsp;Bikaner&nbsp;and Jaipur</option>
                                                                                    <option value="" >State&nbsp;Bank&nbsp;of&nbsp;Hyderabad</option>
                                                                                    <option value="" >IDBI&nbsp;Bank</option>
                                                                                    <option value="" >Indian Overseas Bank</option>
                                                                                    <option value="" >Indian Overseas NetBanking</option>
                                                                                    <option value="" >Indian&nbsp;Bank</option>
                                                                                    <option value="" >IndusInd Bank</option>
                                                                                    <option value="" >ING Vysya&nbsp;Bank</option>
                                                                                    <option value="" >Jammu&nbsp;and&nbsp;kashmir&nbsp;Bank</option>
                                                                                    <option value="" >Karnataka&nbsp;Bank</option>
                                                                                    <option value="" >Karur Vysya - Corporate Netbanking</option>
                                                                                    <option value="" >Karur Vysya&nbsp;Bank</option>
                                                                                    <option value="" >Oriental&nbsp;Bank&nbsp;Of Commerce</option>
                                                                                    <option value="" >Punjab National Bank-Corporate</option>
                                                                                    <option value="" >City Union&nbsp;Bank</option>
                                                                                    <option value="" >Corporation&nbsp;Bank</option>
                                                                                    <option value="" >DCB&nbsp;BANK&nbsp;Personal</option>
                                                                                    <option value="" >Dena Bank</option>
                                                                                    <option value="" >Deutsche Bank</option>
                                                                                    <option value="" >Development Credit Bank</option>
                                                                                    <option value="" >Dhanlaxmi&nbsp;Bank</option>
                                                                                    <option value="" >Federal&nbsp;Bank</option>
                                                                                    <option value="" >Airtel Money</option>
                                                                                    <option value="" >Allahabad&nbsp;Bank</option>
                                                                                    <option value="" >Andhra Bank </option>
                                                                                    <option value="" >Axis&nbsp;Bank</option>
                                                                                    <option value="" >Bank of Baroda Corporate Banking</option>
                                                                                    <option value="" >Bank of Baroda Retail Banking</option>
                                                                                    <option value="" >Bank&nbsp;of&nbsp;Bahrain&nbsp;and&nbsp;Kuwait</option>
                                                                                    <option value="" >Bank&nbsp;of&nbsp;Baroda</option>
                                                                                    <option value="" >Bank&nbsp;of&nbsp;Maharashtra</option>
                                                                                    <option value="" >Canara&nbsp;Bank</option>
                                                                                    <option value="" >Catholic Syrian Bank</option>
                                                                                    <option value="" >Central&nbsp;Bank&nbsp;of&nbsp;India</option>
                                                                                    <option value="" >Kotak&nbsp;Mahindra&nbsp;Bank</option>
                                                                                    <option value="" >State&nbsp;Bank&nbsp;of&nbsp;India-Coporate</option>
                                                                                    <option value="" >RBL&nbsp;Bank</option>
                                                                                    <option value="" >ICICI&nbsp;Bank</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div style="font-size:12px">A non-refundable Convenience fee of Rs.269 is added on this booking.</div>
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <h4 class="float-left">Total Fare : <span class="text-danger">₹ 2628</span></h4>
                                                                                <div class="float-right">
                                                                                    <button type="button" class="btn btn- btn-danger width-xl">Make Paymemt</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="font-size:12px" class="mt-1"> <i class="dripicons-lock" ></i> We use 128-bit secure encryption providing you a SAFE payment environment</div>
                                                                    </div>
                                                                    <div class="tab-pane fade " style="border:none" id="v-pills-wallet" role="tabpanel" aria-labelledby="v-pills-wallet-tab">
                                                                        <div class="row">
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 ">
                                                                                <label style="font-size:16px">SELECT YOUR WALLET</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                <div style="border:1px solid #dcdcdc" >
                                                                                    <div class="radio m-2">
                                                                                        <input type="radio"  name="wallet" id="radio7" value="option1" checked=""    >
                                                                                        <label for="radio7">
                                                                                            <img class="ml-2" src="{{ asset('web\images\redbus\icon\wallet\mobikwik-sml-icon.png') }}" title="" width="25" > <span style="font-size:16px;font-weight:600">mobikwik</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                <div style="border:1px solid #dcdcdc" class="">
                                                                                    <div class="radio m-2">
                                                                                        <input type="radio"  name="wallet" id="radio8" value="option1" >
                                                                                        <label for="radio8">
                                                                                            <img class="ml-2" src="{{ asset('web\images\redbus\icon\wallet\payzapp-sml-icon.png') }}" title="" width="25" > <span style="font-size:16px;font-weight:600">PayZapp</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                <div style="border:1px solid #dcdcdc" >
                                                                                    <div class="radio m-2">
                                                                                        <input type="radio"  name="wallet" id="radio9" value="option1" >
                                                                                        <label for="radio9">
                                                                                            <img class="ml-2" src="{{ asset('web\images\redbus\icon\wallet\phonepay-sml-icon.png') }}" title="" width="25" > <span style="font-size:16px;font-weight:600">Phonepe</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                <div style="border:1px solid #dcdcdc" class="">
                                                                                    <div class="radio m-2">
                                                                                        <input type="radio"  name="wallet" id="radio10" value="option1" >
                                                                                        <label for="radio10">
                                                                                            <img class="ml-2" src="{{ asset('web\images\redbus\icon\wallet\amazon-sml-icon.png') }}" title="" width="25" > <span style="font-size:16px;font-weight:600">Amazon</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                <div style="border:1px solid #dcdcdc" >
                                                                                    <div class="radio m-2">
                                                                                        <input type="radio"  name="wallet" id="radio11" value="option1" >
                                                                                        <label for="radio11">
                                                                                            <img class="ml-2" src="{{ asset('web\images\redbus\icon\wallet\airtel-sml-icon.png') }}" title="" width="25" > <span style="font-size:16px;font-weight:600">AirtelMoney</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                <div style="border:1px solid #dcdcdc" class="">
                                                                                    <div class="radio m-2">
                                                                                        <input type="radio"  name="wallet" id="radio12" value="option1" >
                                                                                        <label for="radio12">
                                                                                            <img class="ml-2" src="{{ asset('web\images\redbus\icon\wallet\epaylater-sml-icon.png') }}" title="" width="25" > <span style="font-size:16px;font-weight:600">EpayLater</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                <div style="border:1px solid #dcdcdc" >
                                                                                    <div class="radio m-2">
                                                                                        <input type="radio"  name="wallet" id="radio13" value="option1" >
                                                                                        <label for="radio13">
                                                                                            <img class="ml-2" src="{{ asset('web\images\redbus\icon\wallet\lazy-pay.png') }}" title="" width="120" >
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="font-size:12px">A non-refundable Convenience fee of Rs.269 is added on this booking.</div>
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <h4 class="float-left">Total Fare : <span class="text-danger">₹ 2628</span></h4>
                                                                                <div class="float-right">
                                                                                    <button type="button" class="btn btn- btn-danger width-xl">Make Paymemt</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="font-size:12px" class="mt-1"> <i class="dripicons-lock" ></i> We use 128-bit secure encryption providing you a SAFE payment environment</div>
                                                                    </div>
                                                                    <div class="tab-pane fade " style="border:none" id="v-pills-upi" role="tabpanel" aria-labelledby="v-pills-upi-tab">
                                                                        <div class="row">
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                <div class="form-group">
                                                                                    <label for="upi_id">(Virtual Address ex: CustomerName@BankName) All Major Banks Are Here</label>
                                                                                    <input type="text" id="upi_id" style="border:1px dashed #dcdcdc" class="form-control" name="upi_id" placeholder="xyz@BankName">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="font-size:12px">A non-refundable Convenience fee of Rs.269 is added on this booking.</div>
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <h4 class="float-left">Total Fare : <span class="text-danger">₹ 2628</span></h4>
                                                                                <div class="float-right">
                                                                                    <button type="button" class="btn btn- btn-danger width-xl">Make Paymemt</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="font-size:12px" class="mt-1"> <i class="dripicons-lock" ></i> We use 128-bit secure encryption providing you a SAFE payment environment</div>

                                                                    </div>
                                                                    <div class="tab-pane fade " style="border:none" id="v-pills-phonepe" role="tabpanel" aria-labelledby="v-pills-phonepe-tab">
                                                                        <div style="font-size:12px">A non-refundable Convenience fee of Rs.269 is added on this booking.</div>
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <h4 class="float-left">Total Fare : <span class="text-danger">₹ 2628</span></h4>
                                                                                <div class="float-right">
                                                                                    <button type="button" class="btn btn- btn-danger width-xl">Make Paymemt</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade active show" style="border:none" id="v-pills-paypal" role="tabpanel" aria-labelledby="v-pills-paypal-tab">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="card p-2 mb-0" style="border:1px solid #dcdcdc;">
                                                                                    <div class="row">
                                                                                        <div class="col-12 float-left">
                                                                                            <img src="{{ asset('web\images\redbus\icon\wallet\paypal.png') }}" alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mt-2">
                                                                                        <div class="col-12 ">
                                                                                            <div style="border:1px solid #dcdcdc" >
                                                                                                <div class="radio m-2 p-1">
                                                                                                    <input type="radio"  name="paypalpay" id="radio14" value="option1" checked=""    >
                                                                                                    <label for="radio14">
                                                                                                        INR (Indian Rupee)
                                                                                                        <div style="font-size:12px">No Conversion - This option is currently available to <strong>Indian Paypal Users</strong></div>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mt-1 mb-1 m-0 p-0">
                                                                                        <div class="col-5 m-0 p-0">
                                                                                            <hr style="border:0.5px solid  #dcdcdc">
                                                                                        </div>
                                                                                        <div class="col-2 mt-1 p-0 text-center">
                                                                                            OR
                                                                                        </div>
                                                                                        <div class="col-5 m-0 p-0">
                                                                                            <hr style="border:0.5px solid  #dcdcdc">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row ">
                                                                                        <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                            <div style="border:1px solid #dcdcdc" >
                                                                                                <div class="radio m-2">
                                                                                                    <input type="radio"  name="paypalpay" id="radio15" value="option1" checked=""    >
                                                                                                    <label for="radio15">
                                                                                                        EUR (Euro)
                                                                                                        <div style="font-size:12px">€ 1 EUR = Rs. 78.86 INR</strong></div>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                            <div style="border:1px solid #dcdcdc" class="">
                                                                                                <div class="radio m-2">
                                                                                                    <input type="radio"  name="paypalpay" id="radio16" value="option1" >
                                                                                                    <label for="radio16">
                                                                                                        GBP (British Pound)
                                                                                                        <div style="font-size:12px">£ 1 GBP = Rs. 89.55 INR</strong></div>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mt-2">
                                                                                        <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                            <div style="border:1px solid #dcdcdc" >
                                                                                                <div class="radio m-2">
                                                                                                    <input type="radio"  name="paypalpay" id="radio17" value="option1" checked=""    >
                                                                                                    <label for="radio17">
                                                                                                        HKD (Hong Kong Dollar)
                                                                                                        <div style="font-size:12px">$ 1 HKD = Rs. 9.41 INR</strong></div>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                            <div style="border:1px solid #dcdcdc" class="">
                                                                                                <div class="radio m-2">
                                                                                                    <input type="radio"  name="paypalpay" id="radio18" value="option1" >
                                                                                                    <label for="radio18">
                                                                                                        SGD (Singapore Dollar)
                                                                                                        <div style="font-size:12px">$ 1 SGD = Rs. 50.69 INR</strong></div>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mt-2">
                                                                                        <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                            <div style="border:1px solid #dcdcdc" >
                                                                                                <div class="radio m-2">
                                                                                                    <input type="radio"  name="paypalpay" id="radio19" value="option1" checked=""    >
                                                                                                    <label for="radio19">
                                                                                                        THB (Thai Baht)
                                                                                                        <div style="font-size:12px">฿ 1 THB = Rs. 2.21 INR</strong></div>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 float-left">
                                                                                            <div style="border:1px solid #dcdcdc" class="">
                                                                                                <div class="radio m-2">
                                                                                                    <input type="radio"  name="paypalpay" id="radio20" value="option1" >
                                                                                                    <label for="radio20">
                                                                                                        USD ((United States Dollar)
                                                                                                        <div style="font-size:12px">$ 1 USD = Rs.72.98 INR</strong></div>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="font-size:12px" class="mt-0">A non-refundable Convenience fee of Rs.269 is added on this booking.</div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-12">
                                                                                <h4 class="float-left">Total Fare : <span class="text-danger">₹ 2628</span></h4>
                                                                                <div class="float-right">
                                                                                        <img tabindex="6" ng-click="PostPayPAlRQ()" src="https://www.easemytrip.com/paypal/img/paypal-button.png">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col-->
                                                        </div> <!-- end row-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end payment section --}}
                            </div>

                            <div class="col-sm-12 col-md-3 col-lg-3 mx-auto" style="position:sticky;top: 0;">
                                <div class="row">
                                        <div class="col-12">
                                            <div class="card-box ribbon-box">
                                                <div class="ribbon ribbon-danger float-left"><i class="fe-users mr-1 mt-0"></i>Fare Summary</div>
                                                <div class="text-danger float-right mt-0"><a class="text-info view-sammary" id="view-sammary">View Summary</a></div>

                                                <div class="ribbon-content">
                                                    <div id="collapseTwo " class="details-fare" style="display:none">
                                                        <div class="row mt-2">
                                                            <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12" style="border-bottom:1px dashed #dcdcdc">
                                                                <a href="#">  <span class="text-dark" style="font-weight:600;font-size:14px">Base Fare</span> <div class="text-dark float-right" style="font-weight:600;font-size:14px" class="fareamt" id="fareamt">₹ {{ $fareAmt }}</div> </a>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12" style="border-bottom:1px dashed #dcdcdc">
                                                                <a href="#">  <span class="text-dark" style="font-weight:600;font-size:14px">Insurance </span> <div class="text-dark float-right" style="font-weight:600;font-size:14px" class="insurance_amt" id="insurance_amt">₹ 2,141</div> </a>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12" style="border-bottom:1px dashed #dcdcdc">
                                                                <a href="#">  <span class="text-dark" style="font-weight:600;font-size:14px">Convenience Fee</span> <div class="text-dark float-right" style="font-weight:600;font-size:14px">₹ 0</div> </a>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12" style="border-bottom:1px dashed #dcdcdc">
                                                                <span class="text-dark" style="font-weight:600;font-size:18px">Total Amount Fare</span> <div class="text-dark float-right total_fare_amt" style="font-weight:600;font-size:14px" id="total_fare_amt"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12" >
                                                                <p class="text-light text-dark text-center">Fare has been adjusted to account for currency conversion.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3 alert-success ">
                                                        <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12 " style="    padding: 15px;background-color: #e0fde8;min-height: 59px;overflow: auto;">
                                                            <span class="text-dark" style="font-weight:600;font-size:18px;margin:10px 0">Total PAYBAL AMT</span>
                                                            <div class="text-dark float-right final_fare_amt" style="font-weight:600;font-size:14px" id="final_fare_amt"></div>
                                                            <input type="hidden" name="final_fare_amt" class="final_fare_amt" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="display: none">
                                        <div class="card">
                                            <div class="card-header">Have a coupon code / Gift Voucher No?</div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12" >
                                                        <div class="input-group">
                                                            <input type="text" readonly class="form-control couponcode" id="couponcode" placeholder="ENTER COUPON"  name="couponcode" aria-label="ENTER COUPON">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-danger waves-effect waves-light" type="button" id="applyCoupon">Apply</button>
                                                            </div>
                                                        </div>
                                                        <span class="text-danger error-for-coupon"id="error-for-coupon" ></span>

                                                    </div>
                                                </div>
                                                <div class="row mt-2" style="max-height:150px;overflow:auto">
                                                    @php {{  $r=0;  }} @endphp
                                                    @foreach ($PromoCode as $promo)

                                                        @php {{  $r++; }} @endphp

                                                        <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12" >
                                                            <div style="border:1px solid #dcdcdc;" class="">
                                                                <div class="radio ml-4 ">
                                                                    <input type="radio" class="radio511" name="promocodelist" id="radio51_{{ $r }}" value="{{  $promo->id }}" data="{{ $promo->promocode }}">
                                                                    <label for="radio51_{{ $r }}">
                                                                        {{ $promo->promocode }}
                                                                        <div style="font-size:12px">
                                                                            {{ $promo->description }}
                                                                            <strong>
                                                                                <span type="button" class="text-danger collapsed" style="border-bottom:1px solid #f1556c;font-size:8px" data-toggle="collapse" data-target="#collapseExample_{{ $r }}" aria-expanded="false" aria-controls="collapseExample">
                                                                                    T&C Apply
                                                                                </span>
                                                                            </strong>
                                                                        </div>
                                                                        <div class="collapse " id="collapseExample_{{ $r  }}" style="">
                                                                            <div class="row">
                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                    <p style="font-size:8px">
                                                                                        {{  $promo->t_and_c }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                </form>

                </div> <!-- container -->
            </div> <!-- content -->
        </div>
    </body>




        <!-- Vendor js -->
        <script src="{{ asset('web/js/vendor.min.js')}}"></script>

        <script src="{{asset('admin/libs/sweetalert2/sweetalert2.min.js')}}"></script>


        <!-- App js -->
        <script src="{{ asset('web/js/app.min.js')}}"></script>


        <script>

            var fareAmt = "<?php echo $fareAmt; ?>";
            var SeatNo = "<?php echo count($SeatNo); ?>";
            var busId = "<?php echo $bus->id; ?>";
            var BookingId = "<?php echo $BookingId; ?>";

            $('#insurance_amt').text('₹ '+ 20);
            var action="Insurance";

            FareCount(20,action)

            // seesion counter
            function countdown(minutes) {

                    var seconds = 60;
                    var mins = minutes

                    function tick() {

                        var counter = document.getElementById("timer");
                        var current_minutes = mins - 1
                        seconds--;

                        counter.innerHTML = 'Remaining Time  for your session to expire is ' +
                        current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
                        if (seconds > 0) {
                        setTimeout(tick, 1000);
                        } else {
                        var newMin = mins-1;

                        if(newMin === 0 )

                            swal({
                                    title: "Your Current Session is over!",
                                    text: "Please try the booking again as the maximum time for this booking is complete. !",
                                    type: "danger",
                                    showCancelButton: false,
                                    confirmButtonClass: "btn btn-confirm mt-2",
                                    confirmButtonText: "Yes, delete it!"
                                    }).then((result) => {
                                        if (result.value) {
                                                // location.href('https://127.0.0.1:8000')
                                            }
                                        });

                            if (mins > 1) {
                                    // countdown(mins-1);   never reach “00? issue solved:Contributed    by Victor Streithorst
                                    setTimeout(function() {
                                    countdown(newMin);
                                    }, 1000);
                                }
                            }
                        }

                        tick();

            }

            countdown(10)

            //end counter

            // couponApply
            $('input[type=radio][name=promocodelist]').change(function(){
                var promo=$(this).attr('data');
                $('#couponcode').val(promo)
                $(this).val();
                $('#couponcode').css('border','1px solid #dcdcdc');
                $('#error-for-coupon').text("");

            });

            $('#applyCoupon').click(function(){


                var valid=true;
                var coupon=$('#couponcode').val();
                var promoId=$('input[type=radio][name=promocodelist]:checked').val();
                var fareAmts=$('input[type=hidden][name=final_fare_amt]').val();


                if(coupon == "")
                {
                    $('#couponcode').css('border','1px solid red');
                    $('#error-for-coupon').text("Please Select Code");

                    return valid=false;
                }

                    $.ajax({
                        url:"{{ route('promo.validate') }}",
                        method:"POST",
                        data:{promoId:promoId,'SeatNo':SeatNo,'fareAmt':fareAmts,"_token": "{{ csrf_token() }}"},
                        success:function(data){

                            if(data.success == false)
                            {
                                if(data.errors.promoId[0] != "")
                                {
                                    $('#error-for-coupon').text(data.errors.promoId[0]);
                                    return valid=false;
                                }
                            }

                            if(data.errors)
                            {
                                $('#error-for-coupon').text(data.errors);
                                return valid=false;
                            }

                            var PromoCode=data.promocode;
                            var action="Promocode";
                            console.log(PromoCode)

                            var insurance_amt=$('input[type=radio][name=insurance]:checked').val();
                                if(insurance_amt == 0)
                                {
                                    now=parseFloat(fareAmt) - parseFloat(insurance_amt);
                                    fareAmt=parseFloat(now)   - parseFloat(PromoCode);

                                }else{

                                    now=parseFloat(fareAmt) + parseFloat(insurance_amt);
                                    fareAmt=parseFloat(now)   - parseFloat(PromoCode);

                                }
                        }
                    });
            });
            //endcouponApply


            $('.view-sammary').click(function(){
                $('.details-fare').fadeToggle();
            });

            $('input[type=radio][name=insurance]').change(function(){

                var ins_amt=$(this).val();
                $('#insurance_amt').text('₹ '+ins_amt);
                var action="Insurance";

                FareCount(ins_amt,action)
            });

            function FareCount(ins_amt,action)
            {
                if (action == "Insurance") {

                    if(ins_amt == 0)
                    {
                        fareAmt=parseFloat(fareAmt) - parseFloat(20);

                    }else{

                        fareAmt=parseFloat(fareAmt) + parseFloat(20);

                    }
                }


                $('#total_fare_amt').text('₹ '+fareAmt);

                $('#final_fare_amt').text('₹ '+fareAmt)
                $('.final_fare_amt').val(fareAmt)

            }

        </script>

        <script>
            $(document).ready(function() {

                $('input[type=checkbox][name=tAndc]').click(function(){

                    if($(this).is(':checked') == false)
                    {
                        $('.error-for-tAndc').text('Please Accept Terms and Condition')

                    }else{

                        $('.error-for-tAndc').text("")

                    }

                })
                // process the form
                $('#myform').on('submit', function () {

                    // name
                        $('input[name="passanger_name[]"]').each( function() {

                            if($(this).val() == "")
                            {
                                $(this).css('border','1px dashed red')

                                return false;

                            }else{

                                $(this).css('border','1px dashed #dcdcdc')
                                return true;


                            }

                        });

                    // age
                        $('input[name="passanger_age[]"]').each( function() {
                            $(this).css('border','1px dashed #dcdcdc')

                            if($(this).val() == "")
                            {
                                $(this).css('border','1px dashed red')
                                return false;

                            }else{

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

                    // var formData = {
                    //     'name'              :   name,
                    //     'age'               :   age,
                    //     'gender'            :   gender,
                    //     'country_code'      :   country_code,
                    //     'mobileno'          :   mobileno,
                    //     'email'             :   email,
                    //     'bus_id'            :   busId,
                    //     'SeatNo'            :   SeatNo,
                    //     'BookingId'         :   BookingId,
                    //     "_token"            : "{{ csrf_token() }}",
                    //     "signature"         :   signature,
                    // };

                    // // process the form
                    // $.ajax({
                    //     type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    //     url         : "{{route('passanger.details.store')}}", // the url where we want to POST
                    //     data        : formData, // our data object
                    //     dataType    : 'json', // what type of data do we expect back from the server
                    //     encode      : true
                    // })
                    //     // using the done promise callback
                    //     .done(function(data) {

                    //         // log data to the console so we can see
                    //         // console.log(data);

                    //         // here we will handle errors and validation messages
                    //     });

                    // // stop the form from submitting the normal way and refreshing the page
                    // event.preventDefault();
                });

            });
        </script>



</html>


