@extends('web.layout')


@section('page-title')

@endsection

@section('other-page-css')

      <!-- Plugins css -->
      <link href="{{ asset('web/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/css" />
      <link href=" {{ asset('web/libs/animate/animate.min.css') }} " rel="stylesheet" type="text/css" />



@endsection

@section('page-css')

        <style>

            #ui-id-1{
                height:200px;
                overflow: auto;
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
            .form-control{
                border-style:solid;
                border-width: 0px 0px 0px 0px;
            }
            .return{
                transform:rotate(180deg);
            }
        </style>

@endsection

@section('content')

        <div class="main-content">
            <div class="row ml-2 mr-2 mt-3">
                <div class="col-lg-12 col-sm-12 col-md-12 col-12 col-xs-12">
                    <div class="card p-2 " style="position:relative;box-shadow: 0 0 4px 0 rgba(0,0,0,.30)">
                        {{-- <label for="">From</label> --}}
                        <textarea name="" class="form-control" id="" cols="1" rows="1" placeholder="From"></textarea>
                        {{-- <input type="text" class="form-control" name="" id="" placeholder="From"> --}}
                        <div class="row">
                            <div class="col-10 col-sm-10 col-md-10 col-lg-11">
                                <hr class=" mx-auto" style="border: 0.5px solid #ddd;">
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 col-lg-1  mt-0 ">
                                <img src="{{ asset('web/images/redbus/icon/van.png') }}" class="return_bus mx-auto" style="z-index:5;position:absolute"  width="30px" height="30px">
                            </div>
                        </div>
                        {{-- <label for="" class="mt-0 pt-0">To</label> --}}
                        <textarea name="" class="form-control" id="" cols="1" rows="1" placeholder="To"></textarea>
                    </div>

                    <div class="card p-2 " style="box-shadow: 0 0 5px 0 rgba(0,0,0,.30)">
                        {{-- <label for="">Journey Date</label> --}}
                        <input type="text" class="form-control  search_input return-datepicker" name="return"  id="inlineFormInput1" placeholder="Return Date">
                    </div>

                    <div class="col-8 col-md-3 col-lg-3 col-sm-10 col-xs-10 mx-auto ">
                        <button class="btn   btn-sm btn-danger" style="width:100%">Search Bus</button>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <h5 class="">OFFERS FOR YOU</h5>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 col-sm-12 col-lg-4 col-md-6">
                            <div class="card card-body p-2">
                                <div class="row mt-0 mb-0">
                                    <div class="col-3 col-sm-3 ">
                                        <img src="{{ asset('web\images\redbus\offer\100x100.png') }}" style="width:50px;height:50px" alt="" class="mx-auto">
                                    </div>
                                    <div class="col-9 col-lg-7">
                                        <h6 class="text-danger">Save up to Rs 250 on bus ticket</h5>
                                        <span>Validity : 1 Mar to 31 Apr</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm-12 col-lg-4 col-md-6">
                            <div class="card card-body p-2">
                                <div class="row mt-0 mb-0">
                                    <div class="col-3 col-sm-3 ">
                                        <img src="{{ asset('web\images\redbus\offer\100x100.png') }}" style="width:50px;height:50px" alt="" class="mx-auto">
                                    </div>
                                    <div class="col-9 col-lg-7">
                                        <h6 class="text-danger">Save up to Rs 250 on bus ticket</h5>
                                        <span>Validity : 1 Mar to 31 Apr</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm-12 col-lg-4 col-md-6">
                            <div class="card card-body p-2">
                                <div class="row mt-0 mb-0">
                                    <div class="col-3 col-sm-3 ">
                                        <img src="{{ asset('web\images\redbus\offer\100x100.png') }}" style="width:50px;height:50px" alt="" class="mx-auto">
                                    </div>
                                    <div class="col-9 col-lg-7">
                                        <h6 class="text-danger">Save up to Rs 250 on bus ticket</h5>
                                        <span>Validity : 1 Mar to 31 Apr</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-12">
                            <h5 class="">Book Bus Tickets Online</h5>
                        </div>
                        <div class="col-12">
                            <p class="text-justify">redBus is the world’s largest online bus ticket booking platform trusted by millions of happy customers globally. redBus comprises of a wide array of noteworthy bus companies in India offering fast, effortless, and secure booking experiences. redBus enables you to choose the destination, select your preferred seat, and book your bus ticket with just a few clicks. Avail exciting redBus offers and experience an unforgettable journey!redBus is the world's leading bus ticket booking company. It operates in 6 countries (India, Malaysia, Singapore, Indonesia, Peru, and Colombia). redBus has sold over 180 million bus tickets worldwide through the redBus website and app. With over 17 million satisfied customers, redBus has set the bar quite high. There is no shortage of buses on remote and unpopular routes as redBus has on-boarded over 2,300 bus operators to meet every traveler’s needs and requirements Buying a bus ticket on the redBus app or website is really simple. You can download the app or you can go directly to redbus.in. In the search box, enter the point of origin and destination. Compare the prices, schedules, and services of every bus operator providing their services on the route of your choice, select a seat and proceed to the payment page to complete the booking process. You can utilize any of the payment portals that are available on the payment page to complete your transaction. Once your payment has been confirmed, all you have to do is pack your bags and get ready to travel. It's that simple!</p>
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


    <!-- Login JS -->
        <script>

        $('.return_bus').click(function(){
            $(this).toggleClass("return");
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

                $.ajax({

                    url:'{{route('opt.varify')}}',
                    data:{"OTP":OTP,"mobileNo":mobileNo,"_token": "{{ csrf_token() }}" },
                    type:"POST",
                    success:function(responce)
                    {
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


@endsection


@section('after-js')


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
                    $('.destination_palace').autocomplete({

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



        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


@endsection
