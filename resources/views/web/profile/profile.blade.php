@extends('web.layout')


@section('page-title')

@endsection

@section('other-page-css')

    <link href="{{asset('web/libs/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/libs/jquery-toast/jquery.toast.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="{{ asset('web/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('web/libs/animate/animate.min.css') }} " rel="stylesheet" type="text/css" />

      {{-- <script src="{{ asset('web/libs/pages/form-pickers.min.css') }}"></script> --}}


@endsection

@section('page-css')

        <style>
            .top-bar{
                width: 100%;
                min-height: 280px;
                position: relative;
                background-color: rgb(66, 99, 193);
                background-image: linear-gradient(0deg, rgb(107, 142, 242) 0px, rgb(66, 99, 193) 100%);
            }
            ul.ui-menu{
                position: absolute;
                z-index: 10;
                padding: 0;
                margin: 0;
                list-style: none;
                font-size: 13px;
                background: #fff;
                border: 1px solid #aaa;
                overflow-x: hidden;
                overflow-y: auto;
                max-height: 230px;
                font-size: 14px;
                color: #666;
                line-height: 1;
                color: #333;
                width: 225px;
                margin-left: -1px;
            }

            ul.ui-menu li.selected, ul.ui-menu li:hover {
                background: #dcdcdc;
            }

            .ui-menu .ui-menu-item-wrapper {
                padding: 13px 26px 13px 16px;
                cursor: pointer;
                text-align: left;
                font-weight: 400;
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

            nav a {
                text-decoration: none;
                display: block;
                position: relative;
                color: #ef6614;
                text-transform: uppercase;
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
                font-size:14px;
            }
             /* input:required {
                box-shadow: none;
            }
            input:focus{
                border:none;
            } */
            .input-icons i {
                position: absolute;
            }

            .input-icons {
                width: 100%;
                /* margin-bottom: 10px; */
            }

            .icon {
                padding: 18px;
                min-width: 50px;
                text-align: center;
            }
            .return{
                transform:rotate(180deg);
            }

            .navbar-active{
                border-bottom:2px solid white;
            }
         

        </style>

@endsection

@section('content')

<div class="main-content">
    <div class="content">

        <!-- Start Content-->
        <div class="container">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Profile</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="card-box text-center">
                    <img src="{{asset('web/images/users/user-1.jpg')}}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                        <h4 class="mb-0">User</h4>
                        <p class="text-muted">Personal Profile </p>
                        <div class="text-left mt-3">

                            <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">
                                    {{ Auth::guard('user')->user()->username }}</span></p>

                            <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2"> {{ Auth::guard('user')->user()->mobile_no }}</span></p>

                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">{{ Auth::guard('user')->user()->email }}</span></p>

                            <a href="{{ route('user.logout') }}" class="text-danger mb-1 font-13 text-danger"><strong>Logout</strong></a>
                        </div>

                        {{-- <ul class="social-list list-inline mt-3 mb-0">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                            </li>
                        </ul> --}}
                    </div> <!-- end card-box -->


                </div> <!-- end col-->

                <div class="col-lg-8 col-xl-8">
                    <div class="card-box">
                        <ul class="nav nav-pills navtab-bg nav-justified">
                            <li class="nav-item">
                                <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link active show">
                                    Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#aboutme" data-toggle="tab" aria-expanded="false" class="nav-link ">
                                    Booking Details
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-box">

                        <div class="tab-content">
                            <div class="tab-pane " id="aboutme">
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-briefcase mr-1"></i>
                                    Booking Details
                                </h5>
                            </div> <!-- end tab-pane -->
                            <!-- end about me section content -->

                            <div class="tab-pane active show" id="settings">
                                <form>
                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">First Name</label>
                                                <input type="text" class="form-control" id="firstname" value="{{ Auth::guard('user')->user()->first_name }}" placeholder="Enter first name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastname">Last Name</label>
                                                <input type="text" class="form-control" id="lastname" value="{{ Auth::guard('user')->user()->last_name }}" placeholder="Enter last name">
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="useremail">Email Address</label>
                                                <input type="email" class="form-control" id="useremail" value="{{ Auth::guard('user')->user()->email }}" placeholder="Enter email">
                                                <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phoneno">Phone</label>
                                                <input type="tel" class="form-control" id="phoneno" value="{{ Auth::guard('user')->user()->mobile_no}}" placeholder="Enter password">
                                                <span class="form-text text-muted"><small>If you want to change Mobileno please <a href="javascript: void(0);">click</a> here.</small></span>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->



                                    <div class="text-right">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                    </div>
                                </form>
                            </div>
                            <!-- end settings content-->

                        </div> <!-- end tab-content -->
                    </div> <!-- end card-box-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div>



</div>


@endsection


@section('other-page-js')

    <!-- Plugins js-->
        <script src="{{ asset('web/libs/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script>

    <!-- Init js-->
        <script src="{{ asset('web/js/pages/form-pickers.init.js') }}"></script>

        <!-- Loading buttons js -->
        <script src="{{asset('web/libs/ladda/spin.js')}}"></script>
        <script src="{{asset('web/libs/ladda/ladda.js')}}"></script>

        <!-- Buttons init js-->
        <script src="{{asset('web/js/pages/loading-btn.init.js')}}"></script>

    <!-- Login JS -->
        <script>

            $(document).ready(function(){
                 //mini screen operations
                 $("#minisearch_bus").prop("disabled", true);
                $('#bus_img').click(function(){
                    var source= $("#minisource_place").val();
                    var dest= $("#minidestination_place").val();
                    $("#minisource_place").val(dest);
                    $("#minidestination_place").val(source);
                });
                $("#minisource_place").on("keyup",function(){
                    var source= $("#minisource_place").val().length;
                    var dest= $("#minidestination_place").val().length;
                    if((source > 0)&&(dest > 0))
                    {
                        $("#minisearch_bus").prop("disabled", false);
                    }else{
                        $("#minisearch_bus").prop("disabled", true);
                    }
                });

                $("#minidestination_place").on("keyup",function(){
                    var source= $("#minisource_place").val().length;
                    var dest= $("#minidestination_place").val().length;
                    if((source > 0)&&(dest > 0))
                    {
                        $("#minisearch_bus").prop("disabled", false);
                    }else{
                        $("#minisearch_bus").prop("disabled", true);
                    }
                });

                //max screen events
                $("#search_bus").prop("disabled", true);

                $("#source_place").on("keyup",function(){
                    var source= $("#source_place").val().length;
                    var dest= $("#destination_place").val().length;
                    if((source > 0)&&(dest > 0))
                    {
                        $("#search_bus").prop("disabled", false);
                    }else{
                        $("#search_bus").prop("disabled", true);
                    }
                });

                $("#destination_place").on("keyup",function(){
                    var source= $("#source_place").val().length;
                    var dest= $("#destination_place").val().length;
                    if((source > 0)&&(dest > 0))
                    {
                        $("#search_bus").prop("disabled", false);
                    }else{
                        $("#search_bus").prop("disabled", true);
                    }
                });
            });

            $('#optLayout').hide();
            $('#optLayout').css("display","none");

            $('#continue').click(function(){

                var mobileNo=$('#mobileNo').val();
                var valid;
                if(mobileNo != "")
                {

                    $('#mobileNo').css('border','1px solid #ced4da ')

                }else{

                    $('#mobileNo').css('border','1px solid red')

                    return valid = false;
                }

                var l = Ladda.create(document.querySelector('.ladda-button'));
	 	        l.start();

                $.ajax({

                    url:'{{route('mobileno.login')}}',
                    data:{"mobileNo":mobileNo,"_token": "{{ csrf_token() }}" },
                    type:"POST",
                    success:function(responce)
                    {

                        if(responce=="Success")
                        {
                            sessionStorage.setItem("mobileNo", mobileNo);

                            $('#mobileNoLayout').hide();
                            $('#mobileNoLayout').css('display','none');
                            $('#optLayout').hide();
                            $('#optLayout').css("display","");

                            l.stop();
                        }else{
                            l.stop();
                            $('#optLayout').hide();
                            $('#optLayout').css("display","none");
                        }
                    }

                })
            });



            $('#otpvarify').click(function(){

                var OTP=$('#OTP').val();
                var valid;
                if(OTP != "")
                {

                    $('#OTP').css('border','1px solid #ced4da ')

                }else{

                    $('#OTP').css('border','1px solid red')

                    return valid = false;
                }
                var mobileNo=sessionStorage.getItem("mobileNo")

                var l = Ladda.create(document.querySelector('.ladda-button'));
	 	        l.start()

                $.ajax({

                    url:'{{route('opt.varify')}}',
                    data:{"OTP":OTP,"mobileNo":mobileNo,"_token": "{{ csrf_token() }}" },
                    type:"POST",
                    success:function(responce)
                    {
                        l.stop();

                        if(responce=="Success")
                        {
                            sessionStorage.removeItem("mobileNo");
                            window.location.reload();

                        }else{

                            $('#OTP').css('border','1px solid red')

                        }
                    }

                })
            });


        </script>

        <script>
            $(document).ready(function(){
            $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            if (scroll > 270) {
                $(".nav-big").css("background" , "#6b8ef1");
                $(".nav-link").css('color','white');
                $(".text").css('color','white');

            }

            else{
                $(".nav-big").css("background" , "white");
                $(".nav-link").css('color','#00000080');
                $(".text").css('color','#00000080');

            }
        })
        })
        </script>

@endsection


@section('after-js')

@endsection

