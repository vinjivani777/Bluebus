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
        @yield('other-page-css')

        <!-- App css -->
        <link href="{{ asset('web/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/responsive.css') }}" rel="stylesheet" type="text/css" />


        @yield('page-css')

        <style>

            /* customet animation */

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
            .sidenav {
              height: 100%;
              width: 0;
              position: fixed;
              z-index: 5000;
              top: 0;
              left: 0;
              background-color: #4eb3ee;
              overflow-x: hidden;
              overflow-y: inherit;
              transition: 0.5s;
              padding-top: 60px;


            }

            .sidenav a {
              padding: 15px 8px 15px 32px;
              text-decoration: none;
              font-size: 16px;
              color: #fff;
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
                transform: translateY(-5px);
                display: inline-block;
                zoom: 1;
                margin: 1em .5em;
                cursor: pointer;
                box-shadow: 0 0 5px 0 rgba(0,0,0,.75);

            }

        </style>
    </head>

    <body class="bg-white" style="padding-bottom: 0px;min-height:500px;" id="main-body">

        <!-- Topbar Start -->

            @include('web.layout.navbar.navbar')

        <!-- end Topbar -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        {{-- <div class="main" id="main"> --}}


            @yield('content')
        {{-- </div> --}}
            <!-- Footer Start -->

                @include('web.layout.footer.footer')

            <!-- end Footer -->


        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
   <!-- Right Sidebar -->
        <div class="right-bar" >

            @yield('right-bar')


        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        {{-- LOGIN MODEL --}}
        <div id="con-close-modal" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    {{-- <div class="modal-header custom-modal-title">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div> --}}
                    <div class="modal-body p-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-12  mobileNoLayout" id="mobileNoLayout">
                                    <div class="row mt-0">
                                        <div class="col-12">
                                            <button type="button" class="close float-right" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12">
                                            {{-- <img src="{{ asset('web\images\redbus\logo_r.png') }}"> --}}
                                        </div>
                                        <div class="col-12">
                                                <h3 style="color:#6658dd">Welcome Into Happy Journey</h3>
                                        </div>
                                    </div>
                                    {{-- <form method="post" action="#"> --}}
                                        <div class="row mt-3">
                                            <div class="col-12 ">
                                                <div class="form-group">
                                                    <input type="number" class="form-control mobileNo"  id="mobileNo"  required name="phone" placeholder="Enter Your Mobile no">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12 ">
                                                <input type="submit" class="btn  text-center continue ladda-button" data-style="expand-right" data-size="l" id="continue" value="CONTINUE" style="width:100%;font-weight:700;background-color:#6658dd">
                                            </div>
                                        </div>
                                    {{-- </form> --}}
                                    <div class="row mt-2">
                                        <div class="col-5">
                                            <hr style="border: 0.5px solid #ddd;">
                                        </div>
                                        <div class="col-2 pl-0 pr-0 mt-1 text-center">
                                            <span>OR</span>
                                        </div>
                                        <div class="col-5 pl-0 pr-2">
                                            <hr style="border: 0.5px solid #ddd;">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6 text-center">
                                        <button class="btn bg-white btn-rounded width-lg pt-2 pb-2 " style="border:1px solid #ced4da"><span class="float-left"><img src="{{ asset('web\images\redbus\social-icon\icons-8-google.svg') }}" alt=""></span><span class=" font-weight-bold float-right" style="color:#ff3d00">Google</span></button>
                                        </div>
                                        <div class="col-6 text-center">
                                        <button class="btn bg-white btn-rounded width-lg pt-2 pb-2  " style="border:1px solid #ced4da"><span class="float-left"><img src="{{ asset('web\images\redbus\social-icon\facebook-icon.svg')}}" alt=""></span><span class=" font-weight-bold float-right" style="color:#485a96">Facebook</span></button>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-11 text-center">
                                            <p>By signing up, you agree to our <a href="#" class="text-info">Terms & Conditions</a> and <a href="#" class="text-info">Privacy Policy</a></p>
                                        </div>
                                    </div>
                                </div>
                                {{-- opt --}}
                                <div class="col-12  optLayout" id="optLayout" style="display:none">
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
                                                <h3 style="color:#f1556c;">Sign Into Happy Journey</h3>
                                        </div>
                                    </div>
                                    <p class="bg-light">To continue, please enter OTP sent to verify mobile number</p>
                                        <div class="row mt-3">
                                            <div class="col-11 ">
                                                <div class="form-group">
                                                    <input type="number" class="form-control OTP"  id="OTP"  required name="otp" placeholder="Enter OTP">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-11 ">
                                                <input type="submit" class="btn  text-center otpvarify" id="otpvarify" value="OTP VARIFY " style="width:100%;font-weight:700;background-color:#6658dd">
                                            </div>
                                        </div>
                                    <div class="row mt-2 text-center">

                                        <div class="col-12 pl-0 pr-0 mt-1">
                                            <span>OTP Valid FOR 10 Mins</span>
                                        </div>

                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12 text-center">
                                        <button class="btn bg-white btn-rounded width-sm pt-2 pb-2 mr-2" style="border:1px solid #ced4da:width:100%" ><span class=" font-weight-bold " style="color:#ff3d00">Onother Way To Login</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Vendor js -->
        <script src="{{ asset('web/js/vendor.min.js')}}"></script>

        <!-- extra js -->

        @yield('other-page-js')

       

        <!-- App js -->
        <script src="{{ asset('web/js/app.min.js')}}"></script>

    </body>

        @yield('after-js')


        <script>
                $('.closebtn').hide();

            function openNav() {
              $("#mySidenav").css("width","250px");
              $('.openbtn').hide();
              $('.closebtn').show();
            //   $(body).css('background-color','red');
            }

            function closeNav() {
                $("#mySidenav").css("width","0");
                $('.openbtn').show();
                $('.closebtn').hide();
                // $(body).css('background-color','red');

            }
            </script>
</html>


