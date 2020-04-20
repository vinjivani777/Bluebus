<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Blue Bus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured web theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('web/images/favicon.ico')}}">


        <!-- extra css  -->
        @yield('other-page-css')

        <!-- Plugins css -->
        <link href="{{ asset('web/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('web/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

        <style>


              header {
                padding: 20px 0;
                {{-- background: repeating-linear-gradient(45deg, #f0f2ed, #f0f2ed 20px, #f8f4eb 20px, #f8f4eb 40px); --}}
                box-shadow: 0 4px 6px rgba(0,0,0,.2);
              }

              .logo-box {
                float: left;
                margin-right: 20px;
              }
              .logo-box a {
                outline: none;
                display: block;
              }
              .logo-box img {display: block;}
              nav {
                overflow: hidden;
              }
              ul {
                list-style: none;
                margin: 0;
                padding: 0;
                float: right;
              }
              nav li {
                display: inline-block;
                margin-left: 25px;
                height: 70px;
                line-height: 70px;
                transition: .5s linear;
              }
              nav a {
                text-decoration: none;
                display: block;
                position: relative;
                color: #868686;
                text-transform: uppercase;
              }
              nav a:after {
                content: "";
                width: 0;
                height: 2px;
                position: absolute;
                left: 0;
                bottom: 15px;
                background: #868686;
                transition: width .5s linear;
              }
              nav a:hover:after {width: 100%;}

              @media screen and (max-width: 660px) {
                header {text-align: center;}
                .logo-box {
                  float: none;
                  display: inline-block;
                  margin: 0 0 16px 0;
                }
                ul {float: none;}
                nav li:first-of-type {margin-left: 0;}
              }
              @media screen and (max-width: 550px) {
              nav {overflow: visible;}
              nav li {
                display: block;
                margin: 0;
                height: 40px;
                line-height: 40px;
              }
              nav li:hover {background: rgba(0,0,0,.1);}
              nav a:after {content: none;}
              }
              .slide-bar{
                position:relative;
              }
              .search-bus{
                position:absolute;
                /* margin-top: -207px; */
                /* margin-left: 222px; */
                display: block;
                top: 130px;
                left: 213px;
                 {{-- width: 100%; --}}
              }

            .title-icon{
                width:15px;
                height:15px;
                margin-right:10px;
            }

        </style>

    </head>

    <body class="pb-0">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->

                <div class="clearfix" >
                    <header>
                        <div class="container">
                                <div class="logo-box">
                                    <a href="/">
                                        <h4 class="mt-3 text-info">Blue Bus</h2>
                                    </a>
                                </div>
                            <nav>
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="{{ route('offer') }}">Offers</a></li>
                                    <li><a href="#">Print Ticket</a></li>
                                    <li><a href="#">Cancel Ticket</a></li>
                                    <li>|</li>
                                    <li><button class="btn btn-sm btn-info">Sign In</button>
                                    <button class="btn btn-sm btn-info">Sign Up</button> </<button>
                                </ul>
                            </nav>
                        </div>
                    </header>

                    <div class="slider">
                        <div class="row slide-bar">
                            <div class="col-12">
                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="3" class=""></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid" src="{{ asset('web/images/slider/1.jpg') }}" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="{{ asset('web/images/slider/2.png') }}" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="{{ asset('web/images/slider/3.png') }}" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="{{ asset('web/images/slider/4.jpg') }}" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row search-bus">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="title form-inline" >
                                       <img src="{{ asset('web\images\bus-icon.png') }}" class="title-icon" alt="bus-icon" ><h4 class="page-title">Book Bus Ticket </h4>
                                    </div>
                                   <form action="#" method="post">
                                       <div class="row">
                                        <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                            <div class="form-group  ">
                                                <div class="ml-1 radio radio-info form-check-inline mt-2">
                                                    <input type="radio" id="oneway" class="type" value="one" name="type" checked="true">
                                                    <label for="oneway"> One Way</label>
                                                </div>
                                                <div class="radio form-check-inline">
                                                    <input type="radio" id="round" class="type" value="round" name="type">
                                                    <label for="round"> Two Way </label>
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                       <div class="row">
                                            <div class="col-6 col-md-6 col-sm-6 col-lg-6">
                                                <div class="form-group">
                                                    <label for="from">From</label>
                                                    <input type="text" class="form-control bg-light" id="from" name="from" id="from" placeholder="Source Place">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-6 col-sm-6 col-lg-6">
                                                <div class="form-group">
                                                    <label for="to">To</label>
                                                    <input type="text" class="form-control bg-light" id="to" name="to" id="to" placeholder="Destination Palce">
                                                </div>
                                            </div>
                                       </div>
                                       <div class="row">
                                        <div class="col-6 col-md-6 col-sm-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="depart">Depart Date</label>
                                                <input type="text" id="basic-datepicker" class="form-control" placeholder="Depart Date">
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-sm-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="return">Return</label>
                                                <input type="text" id="return-datepicker" class="form-control" placeholder="Return  Date">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-sm-12 col-lg-12">
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-sm btn-info" name="search" id="search" value="Search" >
                                                </div>
                                            </div>
                                        </div>
                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div style="background-color:#f8fdfe">
                        <div class="offers-slider mt-4">
                            <div class="container">
                                <img src="{{ asset('web\images\offers\ppl-20-nov-strip.png') }}" alt="">
                            </div>
                        </div>
                        <div class="offers-slider mt-5 " style="height:300px">
                            <div class="container-fluid " >
                                <div class="offers row">
                                    <div class="col-12 mt-1 ">
                                        <div class="container ">
                                            <div class="row pt-3">
                                                <div class="col-4">
                                                    <img src="{{ asset('web/images/offers/3.jpg') }}" alt="" class="ml-4 mr-4 " style="border-radius:5px;bottom: 59px;position:absolute;width: 188px;;margin-bottom:0px;z-index:1">
                                                    <div class="card shadow-lg " style="position:relative;z-index:0">
                                                        <div class="card-body">
                                                            <h4 class="max-auto text-center">TOP OFFERS SLIDER</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <img src="{{ asset('web/images/offers/4.png') }}" alt="" class="ml-4 mr-4 " style="border-radius:5px;bottom: 59px;position:absolute;width: 188px;;margin-bottom:0px;z-index:1">
                                                    <div class="card shadow-lg " style="position:relative;z-index:0">
                                                        <div class="card-body">
                                                            <h4 class="max-auto text-center">TOP OFFERS SLIDER</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <img src="{{ asset('web/images/offers/5.jpg') }}" alt="" class="ml-4 mr-4 " style="border-radius:5px;bottom: 59px;position:absolute;width: 188px;;margin-bottom:0px;z-index:1">
                                                    <div class="card shadow-lg " style="position:relative;z-index:0">
                                                        <div class="card-body">
                                                            <h4 class="max-auto text-center">TOP OFFERS SLIDER</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class="row pb-3">
                                                <div class="col-6">
                                                    <button class="btn btn-sm btn-round btn-info float-right"><i class=" mdi mdi-step-backward"></i></button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-sm btn-round btn-info float-left"><i class=" mdi mdi-step-forward"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid bg-white" style="height:500px;">
                            <div class="row">
                                <div class="col-12 mt-5" >
                                    <div class="container" >
                                        <div class="card " style="border:1px solid #c3cbd1;">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h2 class="">Why Choose BlueBus</h2>
                                                        <p class="text-justify">On Bluebuspro.com, you can tailor your trip from end-to-end by scouring suitable flights and making your flight booking before proceeding with your hotel bookings. Yatra’s vast hotel repository will see you through this process seamlessly. Any intervening journey can be conveniently planned by searching up relevant train connectivity and making an IRCTC ticket booking. Look up well-researched holiday packages, sift through cruise packages and finalise your entire trip on just one platform.</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <img src="{{ asset('web/images/slider/1.jpg') }}" height="300px;" width="500px" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="container-fluid" style="border-top:1px solid #c3cbd1;border-bottom:1px solid #c3cbd1">
                           <div class="container" >
                                <div class="row mt-4 mb-0">
                                    <div class="col-8">
                                        <h2>Sign up for Exclusive Email-only Newsletter</h2>
                                        <h4>Exclusive access to coupons, special offers and promotions.</h4>
                                    </div>
                                    <div class="col-4 mb-4">
                                        <div class="form-group mb-3">
                                            <label>Newsletter</label>
                                            <div class="input-group m-b-20">
                                                <input class="form-control" id="single-input" type="text" value="" placeholder="Email">
                                                <div class="input-group-append">
                                                    <button type="button" id="check-minutes" class="btn waves-effect waves-light btn-info">Newsletter</button>
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
                <!-- Footer Start -->
                <div class="container-fluid bg-white" style="height:300px;;">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="font-size:50px">Operators</h3>
                            </div>
                        </div>
                        <hr>
                         <div class="row mt-2" >
                             <div class="col-12 mr-0">
                                <p style="font-size:17px;text-align:justify">Top Operators|
                                    SRS Travels |
                                    Evacay Bus |
                                    Kallada Travels |
                                    KPN Travels |
                                    Orange Travels |
                                    Parveen Travels |
                                    Rajdhani Express |
                                    VRL Travels |
                                    Chartered Speed Bus |
                                    Bengal Tiger |
                                    SRM Travels |
                                    Infant Jesus |
                                    Patel Travels |
                                    JBT Travels |
                                    Shatabdi Travels |
                                    Eagle Travels |
                                    Kanker Roadways |
                                    Komitla |
                                    Sri Krishna Travels |
                                    Humsafar Travels |
                                    Mahasagar Travels |
                                    Raj Express |
                                    Sharma Travels |
                                    Shrinath Travels |
                                    Universal Travels |
                                    Verma Travels |
                                    Gujarat Travels |
                                    Madurai Radha Travels |
                                    Patel Tours and Travels |
                                    Paulo Travels |
                                    Royal Travels |
                                    Amarnath Travels |
                                    Vaibhav Travels |
                                    Ganesh Travels |
                                    Jabbar Travels |
                                    Jain Travels |
                                    Manish Travels |
                                    Pradhan Travels |
                                    YBM Travels |
                                    Hebron Transports |
                                    Mahalaxmi travels |
                                    MR Travels |
                                    Vivegam Travels |
                                    VST Travels |
                                    Jakhar Travels |
                                    Kaleswari Travels |
                                    Mahendra Travels |
                                    Neeta Tours and Travels |
                                    Yamani Travels |
                                    Arthi Travels |
                                    </p>
                             </div>
                         </div>
                         <div class="row">
                            <div class="col-12">
                                <span class="font-size:50px float-right">More -></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bg-light" style="height:300px">
                   <div class="container">
                        <div class="row mt-2" >
                            <div class="col-4 mr-0">
                                <h3>Bluebus</h3>
                                <hr>
                               <p>
                                blueBus is the world's largest online bus ticket booking service trusted by over 17 million happy customers globally. redBus offers bus ticket booking through its website,iOS and Android mobile apps for all major routes.
                               </p>
                               <button type="button" class="btn btn-outline-info btn-rounded waves-effect"><i class="fe-facebook"></i></button>
                               <button type="button" class="btn btn-outline-info btn-rounded waves-effect"><i class="fe-facebook"></i></button>
                               <button type="button" class="btn btn-outline-info btn-rounded waves-effect"><i class="fe-facebook"></i></button>

                            </div>
                            <div class="col-3 mr-0">
                                <h3>Our Website</h3>
                                <hr>
                                <h6><a href="" style="color:#6c757d">About Us</a></h6>
                                <h6><a href="" style="color:#6c757d">Contact US</a></h6>
                                <h6><a href="" style="color:#6c757d">Offers</a></h6>
                                <h6><a href="" style="color:#6c757d">Booking Ticket</a></h6>
                            </div>

                            <div class="col-3 ml-0">
                                <h3>Information</h3>
                                <hr>
                                <h6><a href="" style="color:#6c757d">Privacy Policy</a></h6>
                                <h6><a href="" style="color:#6c757d">T & C</a></h6>
                                <h6><a href="" style="color:#6c757d">FAQ</a></h6>
                                <h6><a href="" style="color:#6c757d">Blog</a></h6>
                                <h6><a href="" style="color:#6c757d">Newsletter</a></h6>
                            </div>
                        </div>
                   </div>
                </div>
                <div class="container-fluid bg-info">
                    <div class="row" style="height:70px">
                        <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                            <h6 class="text-center">Copyright © 2019-2020 Bluebus Group. All rights reserved</h6>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                            <h6 class="text-center">All product names, logos, brands, trademarks and registered trademarks are property of their respective owners.</h6>
                        </div>
                    </div>
                </div>
                <!-- end Footer -->

        <!-- END wrapper -->
        <div class="offerforu" style="height:430px;display:none">
            <div class="offer-body">
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div class="container-fluid">
                           
                            <div class="row">
                                @if($promoCount <= 3 )
                                    <?php $r=0; ?>
                                    @foreach ($promoCode as $item)
                                        <?php $r++; ?>
                                            <div class="col-4 mx-auto">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h6 class="text-center text-dark mt-0">
                                                                    {{ $item->description }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 text-center">
                                                                <img src="{{ asset('/'.$item->promocode_image) }}" alt="" style="width:274px;height:147px;">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h5 class="text-center">Limited Period Offer</h5>
                                                                <h4 class="text-center">  Pay Using AmazonPay Postpaid </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach
                                @else
                                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            @foreach ($promoCode as $item)
                                                <div class="carousel-item ">
                                                    <div class="col-4 mx-auto">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <h6 class="text-center text-dark mt-0">
                                                                            {{ $item->description }}
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 text-center">
                                                                        <img src="{{ asset('/'.$item->promocode_image) }}" alt="" style="width:274px;height:147px;">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <h5 class="text-center">Limited Period Offer</h5>
                                                                        <h4 class="text-center">  Pay Using AmazonPay Postpaid </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Vendor js -->
        <script src="{{ asset('web/js/vendor.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('web/libs/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script>

        <!-- Init js-->
        <script src="{{ asset('web/js/pages/form-pickers.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('web/js/app.min.js')}}"></script>

    </body>

</html>


