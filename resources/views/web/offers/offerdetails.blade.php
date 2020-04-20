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
/*
            .offr_img {
                width: 337px;
                height: 349px;
            } */
            .max-footer{
                display:none;
            }
            .nav-big{
                background-color:#6b8ef1;
            }
        </style>

@endsection

@section('content')

        <div class="main-content bg-light" style="width:100%">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 ">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-xs-12 col-sm-12 col-md-6 mx-auto text-center">
                                    <h4 class="text-dark">{{ $promoCode->description  }}</h4>
                                    <img class=" img-fluid" src="{{ asset(''.$promoCode->promocode_image) }}" alt="{{ $promoCode->promocode }}" style="border-radius:0px " alt="Card image cap">                                </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="row mt-2">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mx-auto ">
                                    <div class="card text-center mx-auto" style="border:1px solid lightgray;">
                                        <div class="text-dark">BOOKING PERIOD</div>
                                        <div class="text-info">Till  {{ date($promoCode->expiry_date) }}</div>
                                        <hr class="ml-1 mr-1" style="border:1px dotted #468be9">
                                        <div class="text-dark">PROMOCODE</div>
                                        <div class="text-info" >{{ $promoCode->promocode }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mx-auto ">
                                    <div class="card" style="border:1px solid lightgray;">
                                        <h4 class="card-header">What You Get?</h4>
                                        <div class="card-body">
                                            <div>
                                                Users will get 5% instant discount (up to Rs.500) on bus tickets
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mx-auto ">
                                    <div class="card" style="border:1px solid lightgray;">
                                        <h4 class="card-header">Terms & Conditions</h4>
                                        <div class="card-body">
                                            <div>
                                                {{ $promoCode->t_and_c }}
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
                        l.stop();
                        if(responce=="Success")
                        {
                            sessionStorage.setItem("mobileNo", mobileNo);

                            $('#mobileNoLayout').hide();
                            $('#mobileNoLayout').css('display','none');
                            $('#optLayout').hide();
                            $('#optLayout').css("display","");


                        }else{

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
