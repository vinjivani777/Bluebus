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

            .razorpay-payment-button{
                float:right;
                display: inline-block;
                font-weight: 400;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                border: 1px solid transparent;
                padding: .45rem .9rem;
                font-size: .875rem;
                line-height: 1.5;
                border-radius: .15rem;
                -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
                transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
                transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
                color: #fff;
                background-color: #f1556c;
                border-color: #f1556c;
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
                    {{-- <form action="{{ route('passanger.details.store')}}" id="myform" method="POST"> --}}
                        {{-- @csrf --}}
                        <div class="row">

                                <div class="col-sm-12 col-md-8 col-lg-8 p-1">

                                    {{-- payment section --}}
                                    <div class="row" >
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
                                                                           InstaMojo</a>
                                                                        <a class="nav-link text-dark payment-style" id="v-pills-net-banking-tab" data-toggle="pill" href="#v-pills-net-banking"  role="tab" aria-controls="v-pills-banking" aria-selected="false">
                                                                            Rozarpay</a>
                                                                        {{-- <a class="nav-link text-dark payment-style" id="v-pills-wallet-tab" data-toggle="pill" href="#v-pills-wallet"  role="tab" aria-controls="v-pills-wallet" aria-selected="false">
                                                                            My Wallet</a>
                                                                        <a class="nav-link text-dark payment-style" id="v-pills-upi-tab" data-toggle="pill" href="#v-pills-upi"  role="tab" aria-controls="v-pills-upi" aria-selected="true">
                                                                            UPI</a>
                                                                        <a class="nav-link text-dark payment-style" id="v-pills-phonepe-tab" data-toggle="pill" href="#v-pills-phonepe"  role="tab" aria-controls="v-pills-phonepe" aria-selected="true">
                                                                            PhonePe</a>
                                                                        <a class="nav-link text-dark active show payment-style" id="v-pills-paypal-tab" data-toggle="pill" href="#v-pills-paypal"  role="tab" aria-controls="v-pills-paypal" aria-selected="true">
                                                                            Paypal</a> --}}
                                                                    </div>
                                                                </div> <!-- end col-->
                                                                <div class="col-sm-9">
                                                                    <div class="tab-content pt-0">
                                                                        <div class="tab-pane fade active show" style="border:none" id="v-pills-credit-dabit-card" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                            <form action="{{ route('checkout.pay') }}" method="post" class="was-validated">
                                                                                @csrf
                                                                                <div class="row">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                        <div class="form-group">
                                                                                            <label for="uname">Username:</label>
                                                                                            <input type="text" class="form-control" id="uname" style="border:1px dashed #dcdcdc" placeholder="Enter username" name="name" required>
                                                                                            <div class="valid-feedback">Valid.</div>
                                                                                            <div class="invalid-feedback">Please fill out this field.</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="hidden" class="form-control" id="pwd" placeholder="Enter amount" name="amount" value=" {{ $fareAmt }}" required>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                        <div class="form-group">
                                                                                            <label for="pwd">Mobile:</label>
                                                                                            <input type="tel" class="form-control" id="pwd" style="border:1px dashed #dcdcdc" placeholder="Enter mobile" name="mobile" required>
                                                                                            <div class="valid-feedback">Valid.</div>
                                                                                            <div class="invalid-feedback">Please fill out this field.</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                                        <div class="form-group">
                                                                                            <label for="pwd">Email:</label>
                                                                                            <input type="email" class="form-control" id="pwd" style="border:1px dashed #dcdcdc" placeholder="Enter email" name="email" required>
                                                                                            <div class="valid-feedback">Valid.</div>
                                                                                            <div class="invalid-feedback">Please fill out this field.</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div style="font-size:12px">A non-refundable Convenience fee of Rs.269 is added on this booking.</div>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <h4 class="float-left">Total Fare : <span class="text-danger">₹  {{ $fareAmt }}</span></h4>
                                                                                    </span></h4>
                                                                                        <button class="btn btn-danger float-right instamojo-pay" id="instamojo-pay">Make Payment</button>

                                                                                    </div>


                                                                                </div>
                                                                                <div style="font-size:12px" class="mt-1"> <i class="dripicons-lock" ></i> We use 128-bit secure encryption providing you a SAFE payment environment</div>

                                                                            </form>

                                                                        </div>
                                                                        <div class="tab-pane fade " style="border:none;" id="v-pills-net-banking" role="tabpanel" aria-labelledby="v-pills-net-banking-tab">
                                                                            {{-- <div class="row">
                                                                                <div class="col-xs-12 col-sm-12 col-md-12 ">
                                                                                    <label style="font-size:16px">SELECT POPULAR BANKS</label>
                                                                                </div>
                                                                            </div> --}}
                                                                            {{-- <div class="row">
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
                                                                            </div> --}}
                                                                            <div style="font-size:12px">A non-refundable Convenience fee of Rs.269 is added on this booking.</div>
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <h4 class="float-left">Total Fare : <span class="text-danger">₹ {{ $fareAmt  }}</span></h4>
                                                                                    <form action="{{ route('redirect') }}" method="GET">
                                                                                        @csrf
                                                                                    <script
                                                                                        src="https://checkout.razorpay.com/v1/checkout.js"
                                                                                        data-key="rzp_test_LydWON1S4dDRfw" // Enter the Key ID generated from the Dashboard
                                                                                        data-amount="100" // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise or INR 500.
                                                                                        data-button="Make Payment"
                                                                                        data-name="Acme Corp"
                                                                                        data-description="test txn with rozapay"
                                                                                        data-image="https://example.com/your_logo.jpg"
                                                                                        data-prefill.name="Gaurav Kumar"
                                                                                        data-prefill.email="gaurav.kumar@example.com"
                                                                                        data-prefill.contact="9999999999"
                                                                                        data-theme.color="#F37254"
                                                                                    ></script>
                                                                                    <input type="hidden" custom="Hidden Element" name="hidden">
                                                                                    </form>
                                                                                </div>


                                                                            </div>
                                                                            <div style="font-size:12px" class="mt-1"> <i class="dripicons-lock" ></i> We use 128-bit secure encryption providing you a SAFE payment environment</div>
                                                                        </div>
                                                                        {{-- <div class="tab-pane fade " style="border:none" id="v-pills-wallet" role="tabpanel" aria-labelledby="v-pills-wallet-tab">
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
                                                                        </div> --}}
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
                                                                    <a href="#">  <span class="text-dark" style="font-weight:600;font-size:14px">Insurance </span> <div class="text-dark float-right" style="font-weight:600;font-size:14px" class="insurance_amt" id="insurance_amt">₹ {{ $insurance }}</div> </a>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12" style="border-bottom:1px dashed #dcdcdc">
                                                                    <a href="#">  <span class="text-dark" style="font-weight:600;font-size:14px">Convenience Fee</span> <div class="text-dark float-right" style="font-weight:600;font-size:14px">₹ 0</div> </a>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12" style="border-bottom:1px dashed #dcdcdc">
                                                                    <span class="text-dark" style="font-weight:600;font-size:18px">Total Amount Fare</span> <div class="text-dark float-right total_fare_amt" style="font-weight:600;font-size:14px" id="total_fare_amt">₹ {{ $fareAmt }}</div>
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
                                                                <div class="text-dark float-right final_fare_amt" style="font-weight:600;font-size:14px" id="final_fare_amt">₹ {{ $fareAmt }}</div>
                                                                <input type="hidden" name="final_fare_amt" class="final_fare_amt" value="{{ $fareAmt }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
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

                    {{-- </form> --}}

                </div> <!-- container -->
            </div> <!-- content -->
        </div>
    </body>




        <!-- Vendor js -->
        <script src="{{ asset('web/js/vendor.min.js')}}"></script>

        <script src="{{asset('admin/libs/sweetalert2/sweetalert2.min.js')}}"></script>


        <!-- App js -->
        <script src="{{ asset('web/js/app.min.js')}}"></script>
        <script src="https://js.instamojo.com/v1/checkout.js"></script>


        <script>

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

            countdown(7)

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


            // $('#instamojo-pay').click(function(){
            //     alert()
            //     Instamojo.open("https://test.instamojo.com/@jivanivinay777/d66cb29dd059482e8072999f995c4eef/");

            // });


        </script>




</html>


