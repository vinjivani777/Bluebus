<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Blue Bus Travels  | Booking Volvo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured web theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('web/images/favicon.ico')}}">

        <link rel="stylesheet" href="{{ asset('web\jquery\jquery-ui.css') }}">
        <!-- extra css  -->
        @yield('other-page-css')

        <!-- Plugins css -->
        <link href="{{ asset('web/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href=" {{ asset('web/libs/animate/animate.min.css') }} " rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('web/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

        <style>

            #ui-id-1{
                height:200px;
                overflow: inherit;
            }

            .desc-op-new {
                color: #4a4a4a;
                font-size: 16px;
                font-weight: 300;
                margin-top: 10px;
            }
            .seo a {
                display: block;
                color: #444343;
                cursor: pointer;
                margin-bottom: 15px;
            }
            a:hover{
                text-decoration: none;
                color:#d84f57;
                cursor: pointer;
                -webkit-tap-highlight-color: transparent;
            }
            .footer-row{
                background-color:#1b2330;
                overflow: hidden;
            }
            .footer-links a {
                display: block;
                color: #d7d7d7;
                cursor: pointer;
                margin-bottom: 5px;
                font-weight: 600;
            }
            .search_input{
                border-radius:0px;
            }
            .input-icons i {
            position: absolute;
            }

            .input-icons {
                width: 100%;
                /* margin-bottom: 10px; */
            }

            .icon {
                padding: 10px;
                min-width: 50px;
                text-align: center;
            }
        </style>
    </head>
<body class="bg-white" style="padding-bottom: 0px;">
    <section>
        <nav class="navbar navbar-expand-xl sticky-top  navbar-light  " style="background-color:#d84f57">
            <a class="navbar-brand text-white" href="{{route('web.index')}}">BlueBus</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link text-white" href="{{route('web.index')}}">Booking Ticket <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('offer')}}">Offers</a>
                    </li>
                </ul>
                <div>
                    <div>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Help</a>
                            </li>
                            <li class="dropdown notification-list show">
                                <a class="nav-link dropdown-toggle nav-user mr-0 mt-1" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="text-white">
                                        Manage Booking
                                    </span>
                                    <span class="pro-user-name ml-1">
                                    <i class="mdi mdi-chevron-down text-white"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown " x-placement="bottom-end" style="background-color:#fff;position: absolute;margin-top:12px;width:220px; will-change: transform; top: 20px; left: 0px; transform: translate3d(-52px, 70px, 0px);">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title pb-0">
                                        <h6 class="text-overflow m-0">BUS TICKET</h6>
                                    </div>
                                    <!-- item-->
                                    <a  data-toggle="modal" data-target=".bs-example-modal-lg" class="dropdown-item notify-item pb-0">
                                        <i class="fe-alert-octagon"></i>
                                        <span>Cancel/Refund</span>
                                    </a>
                                    <a  data-toggle="modal" data-target=".bs-example-modal-lg" class="dropdown-item notify-item pb-0">
                                        <i class="fe-printer"></i>
                                        <span>
                                            Print/Download
                                        </span>
                                    </a>
                                    <a  data-toggle="modal" data-target=".bs-example-modal-lg" class="dropdown-item notify-item pb-0">
                                        <i class="fe-send"></i>
                                        <span>
                                            Email/SMS
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="dropdown notification-list show">
                                <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('web\user.png') }}" alt="user-image" class="rounded-circle">
                                    <span class="pro-user-name ml-1">
                                    <i class="mdi mdi-chevron-down text-white"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown " x-placement="bottom-end" style="background-color:#fff;position: absolute;margin-top:12px;width:220px; will-change: transform; top: 20px; left: 0px; transform: translate3d(-52px, 70px, 0px);">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a  data-toggle="modal" data-target=".bs-example-modal-lg" class="dropdown-item notify-item">
                                        <i class="fe-user"></i>
                                        <span>SignUp / SignIN</span>
                                    </a>
                                    <a  href="{{route('user.profile')}}" class="dropdown-item notify-item">
                                        <i class="fe-user"></i>
                                        <span>Profile</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="main-content">
            <section class="offers">
                <div class="row">
                    <div class="col-9 mx-auto">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 mx-auto">
                                    <h3 class="text-center">Offers</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="card shadow-lg">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="float-right">Till: 31-Jan-2020
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <img src="{{ asset('web/images/redbus/offer/274x147.png') }}" alt="" style="width:200px;height:147px;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <h5 class="text-center">Get assured cashback between Rs.75 to Rs.500</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="float-right">
                                                        Pay Using OlaMoney Postpaid
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card shadow-lg">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="float-right">Till: 31-Jan-2020
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <img src="{{ asset('web/images/redbus/offer/274x147.png') }}" alt="" style="width:200px;height:147px;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <h5 class="text-center">Get assured cashback between Rs.75 to Rs.500</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="float-right">
                                                        Pay Using OlaMoney Postpaid
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card shadow-lg">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="float-right">Till: 31-Jan-2020
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <img src="{{ asset('web/images/redbus/offer/274x147.png') }}" alt="" style="width:200px;height:147px;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <h5 class="text-center">Get assured cashback between Rs.75 to Rs.500</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="float-right">
                                                        Pay Using OlaMoney Postpaid
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card shadow-lg">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="float-right">Till: 31-Jan-2020
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <img src="{{ asset('web/images/redbus/offer/274x147.png') }}" alt="" style="width:200px;height:147px;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <h5 class="text-center">Get assured cashback between Rs.75 to Rs.500</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="float-right">
                                                        Pay Using OlaMoney Postpaid
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <div class="col-3">
                                    <div class="card shadow-lg">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="float-right">Till: 31-Jan-2020
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <img src="{{ asset('web/images/redbus/offer/274x147.png') }}" alt="" style="width:200px;height:147px;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <h5 class="text-center">Get assured cashback between Rs.75 to Rs.500</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="float-right">
                                                        Pay Using OlaMoney Postpaid
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer>
                <div style="padding-bottom: 0;padding-top: 15px;color:#444343;background-color: #e5e5e5;border-top:1px solid #c0c0c0;border-bottom:1px solid #c0c0c0;">
                        <div style="min-width: 1000px;max-width: 1300px;margin: 0 auto;overflow: hidden;">
                            <div class="container-fluid">
                                <div class="row mt-3 mb-3">
                                    <div class="col-1">
                                    </div>
                                    <div class="col-2 seo">
                                        <h3 class="mb-2" style="font-weight: 800;font-size: 1.1em;">Top Bus Routes</h3>
                                        <a href="#" target="_blank" title="Hyderabad to Bangalore Bus" >Hyderabad to Bangalore Bus</a>
                                        <a href="#" target="_blank" title="Bangalore to Chennai Bus" >Bangalore to Chennai Bus</a>
                                        <a href="#" target="_blank" title="Pune to Bangalore Bus" >Pune to Bangalore Bus</a>
                                        <a href="#" target="_blank" title="Mumbai to Bangalore Bus" >Mumbai to Bangalore Bus</a>
                                        <a href="#" target="_blank" title="More" >More ></a>
                                    </div>
                                    <div class="col-2 seo">
                                        <h3 class="mb-2" style="font-weight: 800;font-size: 1.1em;">Top Cities</h3>
                                        <a href="#" target="_blank" title="Hyderabad Bus Tickets" >Hyderabad Bus Tickets</a>
                                        <a href="#" target="_blank" title="Bangalore Bus Tickets" >Bangalore Bus Tickets</a>
                                        <a href="#" target="_blank" title="Pune Bus Tickets" >Pune Bus Tickets</a>
                                        <a href="#" target="_blank" title="Mumbai Bus Tickets" >Mumbai Bus Tickets</a>
                                        <a href="#" target="_blank" title="More" >More ></a>
                                    </div>
                                    <div class="col-2 seo">
                                        <h3 class="mb-2" style="font-weight: 800;font-size: 1.1em;">Top RTC's</h3>
                                        <a href="#" target="_blank" title="APSRTC" >APSRTC</a>
                                        <a href="#" target="_blank" title="MSRTC" >MSRTC</a>
                                        <a href="#" target="_blank" title="HRTC" >HRTC</a>
                                        <a href="#" target="_blank" title="UPSRTC" >UPSRTC</a>
                                        <a href="#" target="_blank" title="More" >More ></a>
                                    </div>
                                    <div class="col-2 seo">
                                        <h3 class="mb-2" style="font-weight: 800;font-size: 1.1em;">Others</h3>
                                        <a href="#" target="_blank" title="GSRTC" >GSRTC</a>
                                        <a href="#" target="_blank" title="RSRTC" >RSRTC</a>
                                        <a href="#" target="_blank" title="KTCL" >KTCL</a>
                                        <a href="#" target="_blank" title="PEPSU" >PEPSU</a>
                                        <a href="#" target="_blank" title="More" >More ></a>
                                    </div>
                                    <div class="col-2 seo">
                                        <h3 class="mb-2" style="font-weight: 800;font-size: 1.1em;">Tempo Traveller in Cities</h3>
                                        <a href="#" target="_blank" title="Tempo Traveller Bangalore">Tempo traveller in Bangalore</a>
                                        <a href="#" target="_blank" title="Tempo Traveller Chennai">Tempo traveller in Chennai</a>
                                        <a href="#" target="_blank" title="Tempo traveller in Mumbai">Tempo traveller in Mumbai</a>
                                        <a href="#" target="_blank" title="Tempo traveller in Hyderabad">Tempo traveller in Hyderabad</a>
                                        <a href="#" target="_blank" title="Tempo traveller in Ahmedabad">Tempo traveller in Ahmedabad</a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-11 mx-auto">
                                        <hr class="" style="border:0.5px solid #999;">
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-1"></div>
                                    <div class="col-10">
                                        <h3 class="mb-2" style="font-weight: 800;font-size: 1.1em;">Top Operator</h3>
                                        <p style="font-size:16.2px">
                                            SRS Travels &nbsp; | &nbsp; Evacay Bus &nbsp; | &nbsp; Kallada Travels &nbsp; | &nbsp; KPN Travels &nbsp; | &nbsp; Orange Travels &nbsp; | &nbsp; Parveen Travels &nbsp; | &nbsp; Rajdhani Express &nbsp; | &nbsp; VRL Travels &nbsp; | &nbsp; Chartered Speed Bus
                                            Bengal Tiger &nbsp; | &nbsp; SRM Travels &nbsp; | &nbsp; Infant Jesus &nbsp; | &nbsp; Patel Travels &nbsp; | &nbsp; JBT Travels &nbsp; | &nbsp; Shatabdi Travels &nbsp; | &nbsp; Eagle Travels &nbsp; | &nbsp; Kanker Roadways &nbsp; | &nbsp; Komitla &nbsp; | &nbsp;
                                            Sri Krishna Travels &nbsp; | &nbsp; Humsafar Travels &nbsp; | &nbsp; Mahasagar Travels &nbsp; | &nbsp; Raj Express &nbsp; | &nbsp; Sharma Travels &nbsp; | &nbsp; Shrinath Travels &nbsp; | &nbsp; Universal Travels &nbsp; | &nbsp; Verma Travels &nbsp; | &nbsp;
                                            Gujarat Travels &nbsp; | &nbsp; Madurai Radha Travels &nbsp; | &nbsp; Patel Tours and Travels &nbsp; | &nbsp; Paulo Travels &nbsp; | &nbsp; Royal Travels &nbsp; | &nbsp; Amarnath Travels &nbsp; | &nbsp; Vaibhav Travels &nbsp; | &nbsp; Ganesh Travels &nbsp; | &nbsp;
                                            Jabbar Travels &nbsp; | &nbsp; Jain Travels &nbsp; | &nbsp; Manish Travels &nbsp; | &nbsp; Pradhan Travels &nbsp; | &nbsp; YBM Travels &nbsp; | &nbsp; Hebron Transports &nbsp; | &nbsp; Mahalaxmi travels &nbsp; | &nbsp; MR Travels &nbsp; | &nbsp;
                                            Vivegam Travels &nbsp; | &nbsp; VST Travels &nbsp; | &nbsp; Jakhar Travels &nbsp; | &nbsp; Kaleswari Travels &nbsp; | &nbsp; Mahendra Travels &nbsp; | &nbsp; Neeta Tours and Travels &nbsp; | &nbsp; Yamani Travels &nbsp; | &nbsp; Arthi Travels
                                        </p>
                                    </div>
                                </div>
                                <div class="row mt-0">
                                    <div class="col-12 text-right ">
                                        <h3 class="mb-4 mr-5" style="font-weight: 800;font-size: 1.1em;">All Operator ></h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
                <div class="footer-row" >
                    <div class="container">
                        <div class="row">
                            <div class="col-8 mt-3 ml-3">
                                 <div class="row footer-links">
                                    <div class="col-3 ">
                                        <h3 class="mb-2 " style="font-weight: 700;font-size: 1.1em;color: #797979;">About redBus</h3>
                                        <a href="/info/aboutus" target="_blank">About Us</a>
                                        <a href="/info/contactus" target="_blank">Contact Us</a>
                                        <a href="//m.redbus.in" target="_blank">Mobile Version</a>
                                        <a href="/info/mobile" target="_blank">redBus on Mobile</a>
                                        <a href="/sitemap.html" target="_blank">Sitemap</a>
                                        <a href="/info/OfferTerms" target="_blank">Offers</a>
                                        <a href="/careers" target="_blank">Careers</a>
                                        <a href="/values" target="_blank">Values</a>
                                    </div>
                                    <div class="col-3 ">
                                        <h3 class="mb-2 " style="font-weight: 700;font-size: 1.1em;color: #797979;">Info </h3>
                                        <a href="/info/termscondition" target="_blank">T &amp; C</a>
                                        <a href="/info/privacypolicy" target="_blank">Privacy Policy</a>
                                        <a href="/info/faq" target="_blank">FAQ</a>
                                        <a href="http://blog.redbus.in/" target="_blank">Blog</a>
                                        <a href="https://in3.seatseller.travel/" target="_blank">Agent Registration</a>
                                        <a href="https://www.icicilombard.com/" target="_blank">Insurance Partner</a>
                                        <a href="/info/useragreement" target="_blank">User Agreement</a>
                                    </div>
                                    <div class="col-3 ">
                                        <h3 class="mb-2 " style="font-weight: 700;font-size: 1.1em;color: #797979;">Global Sites </h3>
                                        <a href="https://www.redbus.in" target="_blank">India</a>
                                        <a href="https://www.redbus.sg" target="_blank">Singapore</a>
                                        <a href="https://www.redbus.my" target="_blank">Malaysia</a>
                                        <a href="https://www.redbus.id" target="_blank">Indonesia</a>
                                        <a href="https://www.redbus.pe" target="_blank">Peru</a>
                                        <a href="https://www.redbus.co" target="_blank">Colombia</a>
                                    </div>
                                    <div class="col-3 ">
                                        <h3 class="mb-2 " style="font-weight: 700;font-size: 1.1em;color: #797979;">Our Partners</h3>
                                        <a href="https://www.redbus.in" target="_blank">Goibibo</a>
                                        <a href="https://www.redbus.sg" target="_blank">redbus</a>
                                        <a href="https://www.redbus.my" target="_blank">MakeMytrip</a>
                                        <a href="https://www.redbus.id" target="_blank">Easytotrip</a>
                                        <a href="https://www.redbus.pe" target="_blank">HappyJourny</a>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-3 mt-3">
                                <h3 class="text-white" href="#">BlueBus</h3>
                                <div style="color:#d7d7d7;font-size:14px">
                                    redBus is the world's largest online bus ticket booking service trusted by over
                                    17 million happy customers globally. redBus offers bus ticket booking through its
                                    website,iOS and Android mobile apps for all major routes.
                                </div>
                                <div class="mt-2">
                                    <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect"><i class="fe-facebook color-white"></i></button>
                                    <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect ml-2"><i class="fe-twitter color-white"></i></button>
                                    <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect ml-2"><i class="fe-instagram color-white"></i></button>
                                </div>
                                <div class=" text-white mt-2 ml-0 ">
                                    <span>Ⓒ</span><span> 2019-2020 ......... All rights reserved</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>
        </div>
    </section>


    {{-- LOGIN MODEL --}}

     <!--  Modal content for the above example -->
     <div class="modal fade bs-example-modal-lg"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg modal-dialog-centered" style="border-radius:25px;">
            <div class="modal-content" style="border-radius: 0.8rem;">
                {{-- <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div> --}}
                <div class="modal-body p-0" style="overflow:hidden;border-radius: 0.6rem;" >
                    <div class="row ">
                        <div class="col-6 pr-0">
                            <img src="{{ asset('web\images\login\login-ilistratar.jpg')}}" alt="" width="100%" height="100%">
                        </div>
                        {{-- <div class="col-6 pl-0" style="background-image:url({{ asset('web/images/login/login-bg.jpg') }});background-size: cover;opacity: 0.3;border-radius: 0.8rem;width:100%" > --}}
                        <div class="col-6 mt-3 mb-3 pr-1">
                            <div class="row mt-0">
                                <div class="col-11">
                                    <button type="button" class="close float-right" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12">
                                    <img src="{{ asset('web\images\redbus\logo_r.png') }}">
                                </div>
                                <div class="col-12">
                                        <h3 style="color:#f1556c;">Welcome Into Happy Journey</h3>
                                </div>
                            </div>
                            <form method="post" action="#">
                                <div class="row mt-3">
                                    <div class="col-11 ">
                                        <div class="form-group">
                                            <input type="tel" class="form-control"  name="phone" placeholder="Enter Your Mobile no">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-11 ">
                                        <input type="submit" class="btn btn-danger text-center" value="CONTINUE" style="width:100%;font-weight:700">
                                    </div>
                                </div>
                            </form>
                            <div class="row mt-2">
                                <div class="col-5">
                                    <hr style="border: 0.5px solid #ddd;">
                                </div>
                                <div class="col-1 pl-0 pr-0 mt-1">
                                    <span>OR</span>
                                </div>
                                <div class="col-5 pl-0 pr-2">
                                    <hr style="border: 0.5px solid #ddd;">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                <button class="btn bg-white btn-rounded width-lg pt-2 pb-2 " style="border:1px solid #ced4da"><span class="float-left"><img src="{{ asset('web\images\redbus\social-icon\icons-8-google.svg') }}" alt=""></span><span class=" font-weight-bold float-right" style="color:#ff3d00">Google</span></button>
                                </div>
                                <div class="col-6">
                                <button class="btn bg-white btn-rounded width-lg pt-2 pb-2 float-left" style="border:1px solid #ced4da"><span class="float-left"><img src="{{ asset('web\images\redbus\social-icon\facebook-icon.svg')}}" alt=""></span><span class=" font-weight-bold float-right" style="color:#485a96">Facebook</span></button>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-11 text-center">
                                    <p>By signing up, you agree to
                                        our <a href="#" class="text-info">Terms & Conditions</a> and <a href="#" class="text-info">Privacy Policy</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</body>



<script src="{{ asset('web/js/vendor.min.js')}}"></script>

<script src="{{ asset('web/js/pages/animation.init.js')}}"></script>

<!-- Plugins js-->
<script src="{{ asset('web/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script>

<!-- Init js-->
<script src="{{ asset('web/js/pages/form-pickers.init.js') }}"></script>

<script type="text/javascript">
    var path = "{{ route('source') }}";
    $(document).ready(function() {
        $('.source_palace').autocomplete({

            source: function(request, response) {
                $.ajax({
                url: path,
                data: {
                        term : request.term
                 },
                dataType: "json",
                success: function(data){
                   var resp = $.map(data,function(obj){
                        //console.log(obj.board_point);
                        return obj.board_point;
                   });

                   response(resp);
                }
            });
        },
        minLength: 1
     });
    });

</script>

{{-- <script>
    $('.source_palace').keyup(function(){
       var Source=$(this).val();
            $.ajax({
                    url:'{{route('source')}}',
                    data:{Source : Source},
                    type:'get',
                    success:function(resource)
                    {

                        if(resource != " ")
                        {
                            $('#countryList').show(100);
                            $('#countryList').html(resource);
                        }

                    }
                });
            });

            $(document).on('click', '.source_select', function(){
                $('.source_palace').val($(this).text());
                $('#countryList').fadeOut();
            });

            $('.source_palace').focusout( function(){
                $('#countryList').fadeOut();
            });
</script> --}}

{{-- <script>
    $('.destination_palace').keyup(function(){
       var Destnation=$(this).val();
            $.ajax({
                    url:'{{route('dest')}}',
                    data:{Destnation : Destnation},
                    type:'get',
                    success:function(resource)
                    {

                        if(resource != " ")
                        {
                            $('#destationList').show(100);
                            $('#destationList').html(resource);
                        }

                    }
                });
            });

            $(document).on('click', '.dest_select', function(){
                $('.destination_palace').val($(this).text());
                $('#destationList').fadeOut();
            });

            $('.destination_palace').focusout( function(){
                $('#destationList').fadeOut();
            });
</script> --}}

<!-- App js -->
<script src="{{ asset('web/js/app.min.js')}}"></script>


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</html>
