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
<body class="bg-white" style="padding-bottom: 0px;margin-bottom:0px">
    <section>
        <nav class="navbar navbar-expand-xl sticky-top  navbar-light  " style="background-color:#d84f57">
            <a class="navbar-brand text-white" href="{{ route('web.index')}}">BlueBus</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link text-white" href="{{route('web.index')}}">Booking Ticket <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('offer') }}">Offers</a>
                    </li>

                </ul>
            <div>
                <div>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('bluecare')}}">Help</a>
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
                             <a  href="{{route('cancellation')}}" class="dropdown-item notify-item pb-0">
                                <i class="fe-alert-octagon"></i>
                                <span>Cancel/Refund</span>
                            </a>
                            {{-- <a  data-toggle="modal" data-target=".bs-example-modal-lg" class="dropdown-item notify-item pb-0">
                                <i class="fe-user"></i>
                                <span>Reschedule</span>
                            </a> --}}
                            <a  href="{{ route('printticket')}}" class="dropdown-item notify-item pb-0">
                                <i class="fe-printer"></i>
                                <span>
                                    Print/Download
                                </span>
                            </a>
                            <a  href="{{route('smsandemailticket')}}" class="dropdown-item notify-item pb-0">
                                <i class="fe-send"></i>
                                <span>
                                    Email/SMS
                                </span>
                            </a>
                            {{-- <div class="dropdown-divider"></div> --}}
                        {{--
                            <!-- item-->
                            <a href="http://127.0.0.1:8000/admin/logout" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a> --}}

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
                        {{-- <div class="dropdown-divider"></div> --}}
{{--
                        <!-- item-->
                        <a href="http://127.0.0.1:8000/admin/logout" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a> --}}

                    </div>
                </li>
                </ul>

                    {{-- <img src="{{ asset('web\user.png') }} " alt="user" style="width:30px;height:30px" > --}}
                    </div>
            </div>
            </div>
        </nav>

        <div class="main-content">
            <section class="cancelltion">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <div style="font-weight:100;letter-spacing: 2px;font-size:35px;">SMS AND EMAIL TICKET</div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-12 text-center">
                            <div style="font-weight:100;letter-spacing: 2px;font-size:20px;font-family: Montserrat;">Verify your details, and <span class="text-danger">EMAIL / SMS</span> your tickets</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 mx-auto mb-3 mt-3">
                            <form action="">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-5">
                                            <label for="">TICKET NUMBER</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('web\images\redbus\icon\tickets.png')}}"></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>                                        </div>
                                        <div class="col-5">
                                            <label for="">EMAIL</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><img src="{{ asset('web\images\redbus\icon\e-mail.png')}}"></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-2" style="margin-top:28px">
                                                <input type="submit" class="btn " style="background-color:#d84f57" value="SUBMIT">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>


            <footer>
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


</body>
<script src="{{ asset('web/js/vendor.min.js')}}"></script>

<script src="{{ asset('web/js/app.min.js')}}"></script>

</html>
