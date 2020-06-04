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
             .nav-big{

            background: white;
        }
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
            label.db {
                color: #4a4a4a;
                position: absolute;
                bottom: 0;
                left: 16%;
                font-size: 14px;
                top: 25%;
                height: 25px;
                transition: all .3s ease;
                letter-spacing: 1px;
                font-weight: 400;
                letter-spacing: 0!important;
                line-height: 15px;
            }
            .move-up {
                top: 5%!important;
                /* bottom: 2%!important; */
                font-size: 10px!important;
                color: #9b9b9b!important;
                font-weight: 100!important;
            }

            .offer-list:hover{
                box-shadow: 0 0 5px 0 rgba(0,0,0,.30);
            }
            .offer-list{
                overflow: hidden;
                max-height: 310px;

            }

            .cust-banifit:hover{
                transition:transform 0.5s;
                transform: scale(1.1);
            }
            .cust-banifit{
                border:1px solid #bdbaba;
                max-height: 240px;
                box-shadow: 0.1px 0.1px 0.1px #ccc;
                transition-duration: 0.5s;
                border-radius: 15px;
                background: #ffffff;
                overflow: hidden;
            }
            .visa, .master, .american {
                background-image: url('{{ asset("web/images/redbus/icon/wallet/ns-sprite.png") }}');
                float: left;
                height: 37px;
                width: 57px;
                margin-right: 10px;
            }
            .visa {
                background-position: -1px -35px;
            }
            .master {
                background-position: -69px -35px;
            }
            .american {
                background-position: -138px -35px;
            }
            .py_pal {
                background-image: url('{{ asset("web/images/redbus/icon/wallet/ns-sprite.png") }}');
                float: left;
                height: 37px;
                width: 84px;
                background-position: -315px -83px;
            }
            .rupaylg {
                background-image: url('https://www.easemytrip.com/dm-img/rupay-lg-nw.png');
                float: left;
                height: 35px;
                width: 57px;
                background-position: 0 0;
                margin-top: 6px;
            }
            .sm-nav-svg{
                position: relative;
                width:100%;
                max-height:500px;
            }
            .min-sticky-footer{
                font-size: 12px;
                line-height: 100%;
                font-weight: 500;
                color: #666;
                display: block;
                padding-top: 5px;
            }
            .busInfo {
                width: 71.66666667%;
                float: left;
                border-right: 1px solid #eaebed;
                padding: 0 10px 0 0;
            }

        </style>

@endsection

@section('content')

        <div class="main-content">
            <div class="max-home" id="max-home">
                @include('web.homepage.maxindex')
            </div>
            <div class="row ml-2 mr-2 mt-3 mini-home" id="mini-home">
                @include('web.homepage.minindex')
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


        <script type="text/javascript">

            var path = "{{ route('source') }}";
                $(document).ready(function() {
                    $('.source_place').autocomplete({

                        source: function(request, response) {
                            $.ajax({
                            url: path,
                            data: {
                                    term : request.term
                            },
                            dataType: "json",
                            success: function(data){
                            var resp = $.map(data,function(obj){
                                    return obj.city_name;
                            });

                            response(resp);
                            }
                        });
                    },
                    minLength: 1
                    });
                });


            var path = "{{ route('dest') }}";
                $(document).ready(function() {
                    $('.destination_place').autocomplete({

                        source: function(request, response) {
                            $.ajax({
                            url: path,
                            data: {
                                    term : request.term
                            },
                            dataType: "json",
                            success: function(data){
                            var resp = $.map(data,function(obj){
                                    return obj.city_name;
                            });

                            response(resp);
                            }
                        });
                    },
                    minLength: 1
                    });
                });

        </script>

        <script>

            $('.db').click(function(){
                $(this).siblings('.place').focus();
            });
            $('.source_place').on('focusin',
            function(){
                $(this).siblings('label.db').addClass('move-up');
            }).on('focusout', function(){
                var  source_place=$('.source_place').val();
                if(source_place == "")
                {
                        $(this).siblings('label.db').removeClass('move-up');
                }
            });

            $('.destination_place').on('focusin',
            function(){
                $(this).siblings('label.db').addClass('move-up');
            }).on('focusout', function(){
                var  destination_place=$('.destination_place').val();
                if(destination_place == "")
                {
                        $(this).siblings('label.db').removeClass('move-up');
                }
            });


        </script>

        {{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}

        <script src="{{ asset('web\searchJquery\jquery-1.12.4.js') }}"></script>
        <script src="{{ asset('web\searchJquery\jquery-ui.js')  }}"></script>
@endsection
