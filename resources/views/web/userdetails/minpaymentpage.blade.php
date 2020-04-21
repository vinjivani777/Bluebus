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

    <div class="container-fluid " style="position:sticky;top:0;">
        <div class="row" style="position: sticky;top:0;background:#4a81d4">
            <div class="col-12 p-1">
                <div class="float-left pl-1">
                    <a class=" text-white text-center" style="font-size:14px;"   href="{{ route('web.index')}}">HappyJourney</a>
                </div>
                <div class="float-right pr-2">
                    <span class="text-white" id="timer" style="font-size:10px">
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light">
        <div class="row" >
            <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12 mt-2">
                <div class="card" style="box-shadow: 0 0 4px rgba(0,0,0,.21);">
                    <div class="card-body p-1">
                        <div class="row" data-toggle="collapse" data-target="#InstaMojo" aria-expanded="true" aria-controls="collapseExample">
                            <div class="col-4 mx-auto">
                                <img src="{{ asset('web\images\download.jpg') }}" width="40px" height="40px">
                            </div>
                            <div class="col-8 mx-auto">
                                <h4>InstaMojo</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row collapse" id="InstaMojo">
            <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12 mt-2">
                <div class="card" style="box-shadow: 0 0 4px rgba(0,0,0,.21);">
                    <div class="card-body p-1">
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
                </div>
            </div>
        </div>

        <div class="row mt-0 " id="">
            <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12">
                <div class="card" style="box-shadow: 0 0 4px rgba(0,0,0,.21);">
                    <div class="card-body p-1">
                        <div class="row"  data-toggle="collapse" data-target="#RazorPay" aria-expanded="true" aria-controls="collapseExample">
                            <div class="col-4 mx-auto">
                                <img src="{{ asset('web\images\razoepay.png') }}" width="40px" height="40px">
                            </div>
                            <div class="col-8 mx-auto">
                                <h4>Rozarpay</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row collapse" id="RazorPay">
            <div class="col-12 col-sm-12 col-lg-12 col-xs-12 col-md-12 mt-2">
                <div class="card" style="box-shadow: 0 0 4px rgba(0,0,0,.21);">
                    <div class="card-body p-1">
                        <div style="font-size:12px">A non-refundable Convenience fee of Rs.269 is added on this booking.</div>
                        <div class="row">
                            <div class="col-12">
                                <h4 class="float-left">Total Fare : <span class="text-danger">₹ {{ $fareAmt  }}</span></h4>
                                <form action="{{ route('redirect') }}" method="GET">
                                    @csrf
                                <script
                                    src="https://checkout.razorpay.com/v1/checkout.js"
                                    data-key="rzp_test_LydWON1S4dDRfw" // Enter the Key ID generated from the Dashboard
                                    data-amount="{{ $fareAmt }}" // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise or INR 500.
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
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="position:sticky;bottom:0;">
        <div class="row">
            <div class="col-12 bg-dark text-center">
                <h6 class="text-white">Total Fare : {{ $fareAmt }}</h6>
            </div>
        </div>
    </div>
        <!-- Vendor js -->
        <script src="{{ asset('web/js/vendor.min.js')}}"></script>

        <script src="{{asset('admin/libs/sweetalert2/sweetalert2.min.js')}}"></script>


        <!-- App js -->
        <script src="{{ asset('web/js/app.min.js')}}"></script>
        <script src="https://js.instamojo.com/v1/checkout.js"></script>


        <script>

                    function countdown() {

                        initCounter();

                        window.onload = function() {
                            initCounter();
                        };


                        function initCounter() {

                            if (localStorage.getItem('mins') === null ) {
                                var seconds = 60;
                                var mins = 7

                            }else{

                                var mins=localStorage.getItem('mins');
                                var seconds = localStorage.getItem('second');
                                var mins=parseInt(mins) + 1

                            }
                        }



                        function tick() {

                            var counter = document.getElementById("timer");

                            var current_minutes = mins - 1
                            seconds--;


                            localStorage.setItem('second',seconds)
                            localStorage.setItem('mins',current_minutes)


                            counter.innerHTML = 'Session Left To' +
                            current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
                            if (seconds > 0) {
                            setTimeout(tick, 1000);

                            } else {
                            var newMin = mins-1;

                            if(newMin === 0 )
                            {
                                // var Url="{{ route('web.index') }}";
                                // var r = alert("Your Session Expire");

                                // location.replace(Url)

                                if (mins > 1) {
                                        // countdown(mins-1);   never reach “00? issue solved:Contributed    by Victor Streithorst
                                        setTimeout(function() {
                                        countdown(newMin);
                                        }, 1000);
                                    }
                            }
                            }
                    }

                        tick();

                    }

                    countdown()


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

</body>
</html>


