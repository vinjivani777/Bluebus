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
              .card{
                width: 105%;
                height: auto;
            }
            .
            .title-icon{
                width:15px;
                height:15px;
                margin-right:10px;
            }

              }
        </style>

    </head>
    <body>

        <!-- Begin page -->
        <div id="wrapper">
            <div class="clearfix" >
                <header>
                    <div class="container">
                            <div class="logo-box">
                                <a href="/">
                                    <h3 class="mt-3 text-info">Blue Bus</h2>
                                </a>
                            </div>
                        <nav>
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('offer') }}">Offers</a></li>
                                <li><a href="#">Print Ticket</a></li>
                                <li><a href="#">Cancel Ticket</a></li>
                                <li>|</li>
                                <li>
                                    <button type="button" class="btn btn-sm btn-info  waves-effect" data-toggle="modal" data-target="#exampleModalCenter">Sign Up</button>
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
                    <div class="row search-bus mt-5">
                                <h2 class="text-info">Great And Amaging Offer</h2>
                    </div>
                </div>

                <div class="offers-slider mt-3">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2>Amazing Offers</h2>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row bg-light">
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/1.png') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/2.png') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/3.jpg') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                    </div>
                                    <div class="row  bg-light">
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/4.png') }}" alt="Card image cap"  width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/5.jpg') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/6.png') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                    </div>
                                    <div class="row  bg-light">
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/7.png') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/8.jpg') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/9.png') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                    </div>
                                    <div class="row  bg-light">
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/10.jpg') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/11.png') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/12.jpg') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                    </div>
                                    <div class="row  bg-light">
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/13.jpg') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/14.png') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/15.png') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                    </div>
                                    <div class="row  bg-light">
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/16.png') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/17.png') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-lg-3 m-4 mx-auto">
                                            <div class="card shadow-lg ">
                                                <img class="card-img-top img-fluid" src="{{ asset('web/images/offers/18.png') }}" alt="Card image cap" width="360px" height="18px">
                                                <div class="card-body">
                                                    <h5 class="card-title">Use Paypal to Book Bus</h5>
                                                    <p class="card-text">Coupon Code : YAPT1020</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Last updated 3 mins ago</small>
                                                    </p>
                                                    <button class="btn btn-sm btn-info">View Details -></button>
                                                </div>
                                            </div> <!-- end card-box-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <!-- sign up -->
        </div>
        <!-- END wrapper -->

        <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Login<01/.h5>
                    <button type="button" class="close" data-dismiss="modal" aria-labe1l="Close">
                    <span aria-hidden="true">&times;</span>1
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
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


