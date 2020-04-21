@extends('web.layout')

@section('page-title')
Blue Bus | Search Bus Tickets
@endsection

@section('other-page-css')

    <link href="{{asset('web/libs/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/libs/jquery-toast/jquery.toast.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="{{ asset('web/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('web/libs/animate/animate.min.css') }} " rel="stylesheet" type="text/css" />
    <link href="{{asset('web/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/libs/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css">


    <!-- App css -->
    <link href="{{ asset('web/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('page-css')
    <style>
        .select-seat-fare-details-active{
            display:none;
        }
        .SeatsLayout{
            display:none;
        }
            ul.ui-menu{
                position: absolute;
                z-index: 101000000;
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
                width: 180px;
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
        #loading {
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
            position: fixed;
            display: block;
            opacity: 1;
            background-color: #fff;
            z-index: 99;
            text-align: center;
            }

            #loading-image {
            position: fixed;
            top: 214px;
            left: 530px;
            z-index: 100;
            }

            .left-side-men {
            width: 240px;
            background: #fff;
            bottom: 0;
            padding: 10px 0;
            position: absolute;
            -webkit-transition: all .2s ease-out;
            transition: all .2s ease-out;
            top: 45px;
            height:650px;
            max-height:700px;

            }
            .filter-sec .fil-search input[type=text] {
            height: 30px;
            width: 92%;
            margin-left: -10px;
            padding-left: 25px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        .return{
            transform:rotate(350deg);
        }
        .bus_not_found{
            display: block;
            font-size: 1.17em;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

        .bus-list-tr:hover{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border: 1px solid #ddd;
        }
        .bus_icn {
            width: 20px;
            height: 19px;
            display: inline-block;
            background: url('{{ asset("web/images/redbus/icon/bus-icon-n2.png") }}') 0 0;
            background-size: 20px 19px;
            vertical-align: middle;
            margin-right: 4px;
        }
        .busName{

            font-size: 15px;
            font-weight: 700;
            color: #353333;
            text-transform: uppercas
        }
        .ellipsis {
                white-space: nowrap;
                overflow: hidden;
                width: 100%;
                text-overflow: ellipsis;
            }
            .busType {
                font-size: 11px;
                font-weight: 500;
                color: #6d6d6d;
                margin-top: 3px;
            }
            .bus_ad {
                width: 100%;
                float: left;
                margin: 10px 0 0 0;
            }
            .d_timing {
                font-size: 11px;
                width: 25%;
                float: left;
                border: 1px solid #f09a36;
                border-radius: 20px;
                text-align: center;
                font-weight: 600;
                padding: 2px 0;
            }
            .uiDestPoints {
                position: relative;
                margin-top: 6px;
                width: 50%;
                float: left;
            }
            .ttl_hrs {
                background: #ffffff;
                font-size: 11px;
                padding: 1px 5px;
                width: 52%;
                margin-left: auto;
                margin-right: auto;
                position: relative;
                top: -4px;
                color: #6d6d6d;
                text-align: center;
            }
            .a_timing {
                font-size: 11px;
                width: 25%;
                float: left;
                border: 1px solid #4cdf53;
                border-radius: 20px;
                text-align: center;
                font-weight: 600;
                padding: 2px 0;
            }
            .uiDestPoints:before {
                content: '';
                display: block;
                border-bottom: 1px dashed #CCCCCC;
                width: 100%;
                height: 1px;
                z-index: 0;
                top: 4px;
                position: absolute;
            }
            .busTprice {
                width: 27.33333333%;
                float: left;
                padding: 0;
            }
            .ti_prc {
                float: right;
                text-align: right;
                width: 100%;
            }
            .rs_nicn {
                width: 14px;
                height: 14px;
                background: url(img/rupees-icn.svg) 0 0;
                background-size: 14px 14px;
                display: inline-block;
            }
            .ttl_b_amt {
                font-size: 22px;
                display: inline-block;
                color: #d13617;
            }
            .s_avil {
                color: #6d6d6d;
                font-size: 11px;
                float: right;
                text-align: right;
            }
            .m_ticket {
                width: 86%;
                background-color: #faeb95;
                padding: 0;
                float: right;
                display: table;
                font-size: 10px;
                color: #af970d;
                font-weight: 600;
                text-align: center;
                margin-top: 5px;
                height:10px;
            }
            .rip {
                margin: 0;
                padding: 2px 0 4px 0;
                position: relative;
            }
            .rip:before {
                left: 2px;
            }
            .rip:before {
                content: "";
                position: absolute;
                width: 10px;
                height: 10px;
                background: #fff;
                top: 1px;
                /* -webkit-transform: translate(-50%, -50%) rotate(45deg); */
                transform: translate(-55%, 39%) rotate(45deg);
                border: 1px solid transparent;
                border-top-color: #faeb95;
                border-right-color: #faeb95;
                border-radius: 100%;
            }
            .rip:after {
                /* -webkit-transform: translate(-50%, -50%) rotate(225deg); */
                transform: translate(-50%, -50%) rotate(225deg);
                right: 5px;
            }
            .rip:after {
                content: "";
                position: absolute;
                width: 10px;
                background: #fff;
                height: 10px;
                top: -2px;
                /* -webkit-transform: translate(-50%, -50%) rotate(45deg); */
                transform: translate(68%, 62%) rotate(223deg);
                border: 1px solid transparent;
                border-top-color: #faeb95;
                border-right-color: #faeb95;
                border-radius: 100%;
            }
            .max-footer{
                display:none;
            }
            .nav-big{
                background-color:#6b8ef1;
            }
            .copyright{
                display:none;
            }
    </style>
@endsection

@section('content')

        <div class="container-fluid">
            @if(($result)=="NoBus")
                    <div id="loading">
                        <img id="loading-image" src="{{ asset('vendor/images/bus-image/1_uQi2P.gif') }}" alt="Loading..." />
                    </div>
                    <!-- Begin page -->
                    <div id="wrapper">

                        <!-- Topbar Start -->
                        <div class="row">
                                <div class="col-12">
                                    <div class="container-fluid">
                                        <section class="section">
                                            <div class="row mt-2">
                                                <div class="col-6">
                                                    <div class="ml-3 " style="font-size:18px;">
                                                        <span class="text-dark">{{ $source }} </span>
                                                        <i class="fe-arrow-right "></i>
                                                        <span class="text-dark"> {{ $dest }} </span>
                                                        <span class="text-dark ml-3">
                                                            <button type="button" class="btn btn-sm btn-light waves-effect waves-light" style="border:1px solid black" data-toggle="modal" data-target=".bs-example-modal-center">Modify</button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-6 ">
                                                    <button class="btn btn-sm btn-light float-right" style="border:1px solid black">Add A Return Ticket</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <hr class="" style="border:0.3px solid #ddd;">
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                        </div>
                    </div>

                        <!-- end Topbar -->

                    <div class="container">
                        <div class="row">
                            <div class="col-6 mx-auto text-center">
                                <img src="{{asset('web/images/redbus/icon/no_bus.png')}}" style="width:416px;height:264px;">
                                <h3 class="bus_not_found text-center">Oops! No buses found.</h3>
                                <div>No routes available</div>
                            </div>
                        </div>
                    </div>


            @else

                <div id="loading">
                    <img id="loading-image" src="{{ asset('vendor/images/bus-image/1_uQi2P.gif') }}" alt="Loading..." />
                </div>

                <div id="wrapper">
                    <div class="max-search">
                        @include('web.search.maxsearch')
                    </div>
                    <div class="mini-search">
                        @include('web.search.minisearch')
                    </div>
                </div>
            @endif
        </div>
                <!-- Begin page -->

                <div id="con-close-modal" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            {{-- <div class="modal-header custom-modal-title">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div> --}}
                            <div class="modal-body p-4">
                                <form action="{{ route('search') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

@endsection

@section('right-bar')


@endsection

@section('other-page-js')


            <script src="{{ asset('web/js/pages/animation.init.js')}}"></script>
            <script src="{{ asset('web/libs/moment/moment.min.js') }}"></script>
            <!-- Plugins js-->
            <script src="{{ asset('web/libs/flatpickr/flatpickr.min.js') }}"></script>
            <script src="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
            <script src="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script>
            <script src=" {{ asset('web/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
            <script src="{{ asset('web/libs/daterangepicker/daterangepicker.js') }}"></script>
            <!-- Init js-->
            <script src="{{ asset('web/js/pages/form-pickers.init.js') }}"></script>
            <script src="{{ asset('web/libs/tippy-js/tippy.all.min.js') }}"></script>

            <!-- Loading buttons js -->
            <script src="{{asset('web/libs/ladda/spin.js')}}"></script>
            <script src="{{asset('web/libs/ladda/ladda.js')}}"></script>

             <!-- Tost-->
            <script src="{{ asset('web/libs/jquery-toast/jquery.toast.min.js') }}"></script>

            <!-- toastr init js-->
            <script src="{{ asset('web/js/pages/toastr.init.js') }}"></script>


            <!-- Buttons init js-->
            <script src="{{asset('web/js/pages/loading-btn.init.js')}}"></script>

            <!-- App js -->
            <script src="{{ asset('web/libs/tippy-js/tippy.all.min.js')}}"></script>

            {{-- Seat Layout --}}
            <script>



                    $(".bus-list-tr").mouseenter(function(){
                            var busTr=$(this).attr('id');
                            var No= busTr.split("_")[1];

                            $('#collapseExample_'+No).fadeIn();
                            // $('.AllAminitis').css('display','block');

                    });

                    $(".bus-list-tr").mouseleave(function(){
                            var busTr=$(this).attr('id');
                            var No= busTr.split("_")[1];

                            $('#collapseExample_'+No).fadeOut();
                            // $('.AllAminitis').css('display','block');

                    });

                    $('.collapsed').click(function(){

                    });

                    var selectedSeats =[];

                    function validate(obj){

                        var  rowNo = sessionStorage.getItem("rowNo")
                        var total_select_seat = $('#total_select_seat_'+rowNo).val();
                        var total_fare_amt = $('#total_fare_amt_'+rowNo).val();
                        var selected_broadpoint = $('#selected_broadpoint_'+rowNo).val();
                        var selected_droppoint = $('#selected_droppoint_'+rowNo).val();
                        var bus_id = $('#bus_id_'+rowNo).val();

                        var validate="";

                        if(total_select_seat == 0 || total_select_seat == "")
                        {
                            return validate = false;
                        }else{
                            validate = true;
                        }

                        if(total_fare_amt == 0 || total_fare_amt=="")
                        {
                           return  validate = false;
                        }else{
                            validate = true;
                        }

                        if(selected_broadpoint == "")
                        {
                           alert("Please Select BroadPoint")
                           return validate = false;

                        }else{
                            validate = true;
                        }

                        if(selected_droppoint == "")
                        {
                            alert("Please Select DropPoint")

                            return validate = false;
                            
                        }else{
                            validate = true;
                        }

                        // window.open("{{  action('Web\UserDetailsController@index', ['selected_droppoint' =>"+ selected_droppoint + ",'selected_broadpoint' => " + selected_broadpoint +" ] ) }}")

                        // var url=($(obj).data('href')+'?Droppoint=' + $('#selected_droppoint_'+ rowNo).val() + '&Broadpoint=' + $('#selected_broadpoint_'+rowNo).val() + '&SeatNo=' + $('#total_select_seat_'+rowNo).val() + '&fareAmt=' + $('#total_fare_amt_'+rowNo).val() + '&busId=' + $('#bus_id_'+rowNo).val());

                        var formData = {
                            'Droppoint'      :   $('#selected_droppoint_'+ rowNo).val(),
                            'Broadpoint'     :   $('#selected_broadpoint_'+rowNo).val(),
                            'SeatNo'         :   $('#total_select_seat_'+rowNo).val(),
                            'fareAmt'        :   $('#total_fare_amt_'+rowNo).val(),
                            'busId'          :   $('#bus_id_'+rowNo).val(),
                            "_token"         :   "{{ csrf_token() }}",
                        };

                                $.ajax({

                                    url:"{{ route('passanger.details') }}",
                                    method:"POST",
                                    data:formData,
                                    success:function(data){

                                        $('.right-bar').html(data);

                                        $('body').addClass('right-bar-enabled');
                                        }
                                    });

                        //    $('#total_select_seat_'+rowNo).val("");
                            // $('#total_fare_amt_'+rowNo).val(0);
                            // $('#selected_broadpoint_'+rowNo).val(0);
                            // $('#selected_droppoint_'+rowNo).val(0);
                            // $('#selected_broadpoint_'+rowNo).val(0);
                            //  $('#selected_droppoint_'+rowNo).val(0);

                            // sessionStorage.removeItem("bus_id");
                            // sessionStorage.removeItem("totalFare");
                            // sessionStorage.removeItem("rowNo");
                            // sessionStorage.clear();

                            // for (var i = selectedSeats.length; i >= 1; i--)
                            //     {
                            //         selectedSeats.pop();
                            //     }

                            //     $('#SeatsLayout_'+rowNo).addClass('SeatsLayout');
                            //     $('#hideView_'+rowNo).hide();
                            //     $('#viewSeats_'+rowNo).show();
                            //     $('.viewSeats').attr('disabled',false)
                            //     $('.seat_img').attr('disabled',false);

                            //     // location.href=url;

                    }

                    $(document).ready(function(){

                        $('body').on('click','.viewSeats',function(){

                            var viewSeats = $(this).attr('id');
                            var No= viewSeats.split("_")[1];
                            var bus_id=$('#bus_id_'+No).val();
                            var totalFare=$('#totalFare_'+No).val();

                            var action="ViewSeats";

                            sessionStorage.setItem("bus_id", bus_id);
                            sessionStorage.setItem("totalFare", totalFare);
                            sessionStorage.setItem("rowNo", No);

                            if(!$('#SeatsLayout_'+No).hasClass('SeatsLayout'))
                            {
                                $('.viewSeats').attr('disabled',false)

                            }else{

                                $('.viewSeats').attr('disabled',true)

                            }
                            $('#'+viewSeats).attr('disabled',false)

                            if((bus_id) == " ")
                            {
                                alert("Something Is Wrong")
                                var valid=false;
                                return valid;
                            }
                            $('#loading').fadeIn();

                            $.ajax({
                                url:"{{ route('viewseate') }}",
                                method:"POST",
                                data:{action:action, bus_id:bus_id,"_token": "{{ csrf_token() }}"},
                                success:function(data){

                                    if($('#table').hasClass('bus-list-table'))
                                    {
                                        $('.bus-list-table').hide();
                                        $('.footerss').hide();
                                        $('.view-seat-layout').show();
                                        $('#SeatsLayout').html(data);
                                    }

                                    $('#loading').fadeOut();
                                    $('#SeatsLayout_'+No).html(data);
                                    $('#SeatsLayout_'+No).removeClass('SeatsLayout');
                                    $('#hideView_'+No).show();
                                    $('#viewSeats_'+No).hide();

                                }
                            });

                        });

                        $('body').on('click','.seat_img',function(){

                            var  bus=sessionStorage.getItem("bus_id")
                            var  totalFare=sessionStorage.getItem("totalFare")
                            var  rowNo=sessionStorage.getItem("rowNo")

                                var Type=$(this).attr('id');
                                var seatType= Type.split("_")[0];
                                var No= Type.split("_")[1];

                                $('#busid').val(bus);

                                if(seatType == "sofa")
                                {
                                    if(!$(this).hasClass('selected'))
                                    {
                                        if(selectedSeats.length <= 5 )
                                        {
                                            $(this).attr('src','/web/images/redbus/icon/2.png');
                                            $(this).addClass('selected')
                                            selectedSeats.push(No);
                                            var arrayLen=selectedSeats.length;
                                            var TotalAmt=TotalFare(arrayLen,totalFare)
                                            allCount(TotalAmt,selectedSeats)
                                            $('.all-seat-details').next('div').show();

                                            $('#total_select_seat_'+rowNo).val(selectedSeats);
                                            $('#total_fare_amt_'+rowNo).val(TotalAmt);
                                            $('#totalFare').val(TotalAmt);
                                            $('#seatNo').val(selectedSeats);

                                            if(selectedSeats.length != 0 && selectedSeats.length >= 1)
                                            {
                                                // $('.all-seat-details').next('div').show();
                                                // $('.all-seat-details').next('div').removeClass('select-seat-fare-details-active');

                                                    $('.fare-card').children('div:first-child').show();
                                                    $('.fare-card').children('div:first-child').removeClass('select-seat-fare-details-active');
                                                    $('.fare-card').children('div:last-child').hide();


                                            }

                                        }else{
                                            alert("Sorry ! But Do Not More Seat Book");
                                        }

                                    }else{

                                        $(this).attr('src','/web/images/redbus/icon/1.png');
                                        $(this).removeClass('selected')
                                        selectedSeats.pop(No);
                                        var arrayLen=selectedSeats.length;
                                        var TotalAmt=TotalFare(arrayLen,totalFare)

                                        $('#total_select_seat_'+rowNo).val(selectedSeats);
                                        $('#total_fare_amt_'+rowNo).val(TotalAmt);
                                        $('#totalFare').val(TotalAmt);
                                        $('#seatNo').val(selectedSeats);

                                        allCount(TotalAmt,selectedSeats)


                                        if(selectedSeats.length == 0 && selectedSeats.length < 1)
                                        {

                                                    $('.fare-card').children('div:first-child').hide();
                                                    $('.fare-card').children('div:first-child').addClass('select-seat-fare-details-active');
                                                    $('.fare-card').children('div:last-child').hide();




                                                // $('.all-seat-details').next('div').hide();
                                                // $('.all-seat-details').next('div').addClass('select-seat-fare-details-active');
                                        }else{

                                            $('.fare-card').children('div:last-child').hide();
                                            $('.fare-card').children('div:last-child').addClass('select-seat-fare-details-active');


                                        }

                                    }
                                }

                                if(seatType == "seat")
                                {
                                    if(!$(this).hasClass('selected'))
                                    {
                                        if(selectedSeats.length <= 5 )
                                        {
                                            $(this).attr('src','/web/images/redbus/icon/6.png');
                                            $(this).addClass('selected')
                                            selectedSeats.push(No);
                                            var arrayLen=selectedSeats.length;
                                            var TotalAmt=TotalFare(arrayLen,totalFare)
                                            allCount(TotalAmt,selectedSeats)

                                            $('#total_select_seat_'+rowNo).val(selectedSeats);
                                            $('#total_fare_amt_'+rowNo).val(TotalAmt);
                                            $('#totalFare').val(TotalAmt);
                                            $('#seatNo').val(selectedSeats);

                                            if(selectedSeats.length != 0 && selectedSeats.length >= 1)
                                            {



                                                    $('.fare-card').children('div:first-child').show();
                                                    $('.fare-card').children('div:first-child').removeClass('select-seat-fare-details-active');
                                                    $('.fare-card').children('div:last-child').hide();
                                                    $('.fare-card').children('div:last-child').addClass('select-seat-fare-details-active');




                                            }

                                        }else{
                                            alert("Sorry ! But Do Not More Seat Book");
                                        }

                                    }else{

                                        $(this).attr('src','/web/images/redbus/icon/4.png');
                                        $(this).removeClass('selected')
                                        selectedSeats.pop(No);
                                        var arrayLen=selectedSeats.length;
                                        var TotalAmt=TotalFare(arrayLen,totalFare)
                                        allCount(TotalAmt,selectedSeats)

                                        $('#total_select_seat_'+rowNo).val(selectedSeats);
                                        $('#total_fare_amt_'+rowNo).val(TotalAmt);
                                        $('#totalFare').val(TotalAmt);
                                        $('#seatNo').val(selectedSeats);

                                        $('.fare-card').children('div:last-child').hide();
                                        $('.fare-card').children('div:last-child').addClass('select-seat-fare-details-active');

                                        if(selectedSeats.length == 0 && selectedSeats.length < 1)
                                        {


                                                    $('.fare-card').children('div:first-child').hide();
                                                    $('.fare-card').children('div:first-child').addClass('select-seat-fare-details-active');
                                                    $('.fare-card').children('div:last-child').hide();
                                                    $('.fare-card').children('div:last-child').addClass('select-seat-fare-details-active');



                                        }
                                    }
                                }

                                // console.log(selectedSeats)
                                function allCount(TotalAmt,selectedSeats)
                                {

                                    $('.Total_fare').text('Rs. '+ TotalAmt);
                                    $('.Base_fare').text('Rs. '+ TotalAmt);
                                    $('.select_seat_no').text(selectedSeats);
                                }

                                function TotalFare(arrayLen,totalFare)
                                {
                                    return totalFare=parseInt(arrayLen) * parseInt(totalFare);

                                }

                        });

                        $('body').on('click','.processToBook' ,function(){

                            $('.seat_img').attr('disabled',true);

                            $('.fare-card').children('div:first-child').hide();
                            $('.fare-card').children('div:first-child').addClass('select-seat-fare-details-active');
                            $('.fare-card').children('div:last-child').show();
                            $('.fare-card').children('div:last-child').removeClass('select-seat-fare-details-active');

                            // var  bus_id=sessionStorage.getItem("bus_id")
                            // var action="SeletcDropAndBroadPoint";


                            // $.ajax({
                            //     url:"{{ route('select.broadpoint.droppoint') }}",
                            //     method:"POST",
                            //     data:{action:action, bus_id:bus_id,"_token": "{{ csrf_token() }}"},
                            //     success:function(data){
                            //         $('.one-seat-fare-details-active').hide()
                            //         $('.all-seat-details').next().html(data);
                            //     }
                            // });
                        });

                        $('body').on('click','.broadpoint' ,function(){

                            var  rowNo = sessionStorage.getItem("rowNo")
                            var BroadPoint=$(this).val();

                            $('#selected_broadpoint_'+rowNo).val(BroadPoint);

                        });

                        $('body').on('click','.droppoint' ,function(){

                            var  rowNo = sessionStorage.getItem("rowNo")
                            var DropPoint=$(this).val();

                            $('#selected_droppoint_'+rowNo).val(DropPoint);

                        });

                        $('body').on('click','.hideView',function(){

                            var hideView = $(this).attr('id');
                            var No= hideView.split("_")[1];

                            $('#total_select_seat_'+No).val("");
                            $('#total_fare_amt_'+No).val(0);
                            $('#selected_broadpoint_'+No).val(0);
                            $('#selected_droppoint_'+No).val(0);
                            $('#selected_broadpoint_'+No).val(0);
                             $('#selected_droppoint_'+No).val(0);

                            sessionStorage.removeItem("bus_id");
                            sessionStorage.removeItem("totalFare");
                            sessionStorage.removeItem("rowNo");
                            sessionStorage.clear();

                            for (var i = selectedSeats.length; i >= 1; i--)
                                {
                                    selectedSeats.pop();
                                }

                                $('#SeatsLayout_'+No).addClass('SeatsLayout');
                                $('#hideView_'+No).hide();
                                $('#viewSeats_'+No).show();
                                $('.viewSeats').attr('disabled',false)
                                $('.seat_img').attr('disabled',false);

                        });

                        $('body').on('click','.all-aminaties',function(){
                            $('.aminaties').show();
                        });

                    });

            </script>

            {{-- loder --}}
            <script>
                $(window).on('load',function() {
                    $('#loading').fadeOut();
                    // $('.slimScrollBar').css({'width':'0px'});
                });
            </script>

            {{-- filter --}}
            <script>
                $('.reset').click(function(){
                    $('.common_selector').each(function(){
                        $(this). prop("checked", false);
                    });
                });

                $(document).ready(function(){


                    function filter_data()
                    {
                        // $('.filter_data').html(' <div id="loading"><img id="loading-image" src="{{ asset("vendor/images/bus-image/1_uQi2P.gif") }}" alt="Loading..." /></div>');
                        var action = 'filter_data';
                        // var minimum_price = $('#hidden_minimum_price').val();
                        // var maximum_price = $('#hidden_maximum_price').val();
                        var busType = get_filter('bus_type_filter');
                        var Aminaties = get_filter('aminaties');
                        var Route = $('#route_id').val();
                        // console.log(Aminaties)
                        // var storage = get_filter('storage');
                        $.ajax({
                            url:"{{ route('filter') }}",
                            method:"POST",
                            data:{action:action, busType:busType, Aminaties:Aminaties,route:Route,"_token": "{{ csrf_token() }}"},
                            success:function(data){
                                console.log(data);

                                $('.filter_data').html(data);
                            }
                        });
                    }

                    function get_filter(class_name)
                    {
                        var filter = [];
                        $('.'+class_name+':checked').each(function(){
                            filter.push($(this).val());
                        });
                        return filter;
                    }

                    $('.common_selector').click(function(){
                        filter_data();
                    });

                });
            </script>

            {{-- BusIcon Animation --}}
            <script>

                $('.return_bus').click(function(){
                    var source =$("#source_place").val();
                    var destination =$("#destination_place").val();
                    $("#destination_place").val(source);
                    $("#source_place").val(destination);
                    $(this).toggleClass('return');
                });

            </script>

            {{-- Aminaties --}}
            <script>
                $('.amenitie').click(function(){
                        $('.amenities').fadeToggle('fast');
                });
            </script>

            {{-- Bus Image --}}
            <script>
                    $('.bus-image').click(function(){
                        $('.amenities').fadeToggle('fast');
                        var id=$(this).attr('id');
                        $.ajax({
                            url:'{{route('bus-image')}}',
                            data:{id : id},
                            type:'get',
                            success:function(response)
                            {
                                $('.data').html(response);
                            }
                        });
                    });
            </script>

            {{-- operator filetr --}}
            <script>
                    $('#insurance_amt').text('₹ '+ 20);
                    var action="Insurance";

                    $('body').on('change','input[type=radio][name=insurance]',function(){

                        var fareAmt=$('.nowfareAmt').val();
                        var ins_amt=$(this).val();
                        $('#insurance_amt').text('₹ '+ins_amt);
                        var action="Insurance";

                        FareCount(ins_amt,action,fareAmt)
                    });

                    function FareCount(ins_amt,action,fareAmt)
                    {
                        if (action == "Insurance") {

                            if(ins_amt == 0)
                            {
                                fareAmt=parseFloat(fareAmt) - parseFloat(20);

                            }else{

                                fareAmt=parseFloat(fareAmt) + parseFloat(20);

                            }
                        }


                        $('#total_fare_amt').text('Total Amount : Rs .'+fareAmt);

                        $('.final_fare_amt').val(fareAmt)
                        $('.nowfareAmt').val(fareAmt)

                    }

                //  $(document).ready(function() {
                    $('body').on('click','input[type=checkbox][name=tAndc]',function(){

                        if($(this).is(':checked') == false)
                        {
                            $('.error-for-tAndc').text('Please Accept Terms and Condition')
                            $(this).val(0)

                        }else{

                            $('.error-for-tAndc').text("")
                            $(this).val(1)

                        }

                    })
                    // process the form
                    $('body').on('click','.process-to-pay',function(){
                        // name
                        var name=[];

                            $('input[name="passanger_name[]"]').each( function() {

                                if($(this).val() == "")
                                {
                                    $(this).css('border','1px dashed red')

                                    return false;

                                }else{

                                    name.push($(this).val());

                                    $(this).css('border','1px dashed #dcdcdc')
                                    return true;


                                }

                            });

                        // age
                        var age=[];

                            $('input[name="passanger_age[]"]').each( function() {
                                $(this).css('border','1px dashed #dcdcdc')

                                if($(this).val() == "")
                                {
                                    $(this).css('border','1px dashed red')
                                    return false;

                                }else{

                                    age .push($(this).val());

                                    $(this).css('border','1px dashed #dcdcdc')
                                    return true;


                                }


                            });

                              // gender
                        var gender=[];

                            $('.gender').each( function() {
                                $(this).css('border','1px dashed #dcdcdc')

                                if($(this).val() == "")
                                {
                                    $(this).css('border','1px dashed red')
                                    return false;

                                }else{

                                    gender .push($(this).val());

                                    $(this).css('border','1px dashed #dcdcdc')
                                    return true;


                                }


                            });


                        // countrycode
                        var country_code=$('.country_code').val();
                        if(country_code == "" )
                        {

                                $('.error-for-country-code').text('Please Select Country Code')
                                return false;
                        }

                        //mobileno
                        var mobileno=$('.mobileno').val();
                        if(mobileno == "" )
                        {

                                $('.error-for-mobileno').text('Please Enter MobileNo')
                                return false;

                        }

                        if(mobileno.length != 10)
                        {
                                $('.error-for-mobileno').text('Only Enter 10 Digit No !')
                                return false;

                        }


                        //email
                        var email=$('.email').val();
                        if(email == "" )
                        {

                                $('.error-for-email').text('Please Enter Email')
                                return false;

                        }

                        //term & con
                        if($('input[type=checkbox][name=tAndc]').is(':checked') == false)
                        {
                                $('.error-for-tAndc').text('Please Accept Terms and Condition')
                                return false;
                        }

                        //    fareamt
                        var TotalfareAmts;
                        TotalfareAmts=$('input[type=hidden][name=final_fare_amt]').val();

                        if(TotalfareAmts == "")
                        {
                            alert("Some thing is Wrong ! ");
                            return false;
                        }

                        var tAndc=$('.tAndc').val();
                        var Route=$('#routeid').val();
                        var busId=$('#nowbusid').val();
                        var seatNo=$('#nowseatNo').val();
                        var ins_amt=$('input[type=radio][name=insurance]:checked').val();
                        var basefare=parseInt($('.final_fare_amt').val()) - parseInt(ins_amt)
                        var boardPoint=$('#boardPoint').val();
                        var dropPoint=$('#dropPoint').val();
                        var fareAmt=$('#nowfareAmt').val();

                        var formData = {
                            'name'              :   name,
                            'age'               :   age,
                            'gender'            :   gender,
                            'country_code'      :   country_code,
                            'mobileno'          :   mobileno,
                            'email'             :   email,
                            'bus_id'            :   busId,
                            'SeatNo'            :   seatNo,
                            'Route'             :   Route,
                            'boardPoint'        :   boardPoint,
                            'dropPoint'         :   dropPoint,
                            'fareAmt'           :   fareAmt,
                            'tAndc'             :   tAndc,
                            "_token"            : "{{ csrf_token() }}",
                        };

                        var l = Ladda.create(document.querySelector('.ladda-button'));
	 	                        // l.start();
                        // process the form
                        $.ajax({
                            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                            url         : "{{route('passanger.details.store')}}", // the url where we want to POST
                            data        : formData, // our data object
                            dataType    : 'json', // what type of data do we expect back from the server
                            encode      : true
                        })
                            // using the done promise callback
                            .done(function(data) {

                                 //spinnee btn stop
                                // l.stop();

                                if(data.success == true)
                                {

                                    var url=('payment/'+'?SeatNo=' + seatNo + '&fareAmt=' + $('.final_fare_amt').val() + '&basefare=' + basefare + '&busId=' + busId + '&insurance=' + ins_amt);
                                    location.href=url;

                                }else{

                                    // $.NotificationApp.send("Oh snap!", "Change a few things up and try submitting again.", "top-right", "#bf441d", "error");

                                }

                                // log data to the console so we can see
                                console.log(data);

                                // here we will handle errors and validation messages
                            });

                        // stop the form from submitting the normal way and refreshing the page
                        event.preventDefault();
                    });

                // });

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
                                // console.log(obj.city_name);
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


<script src="{{ asset('web\searchJquery\jquery-1.12.4.js') }}"></script>
<script src="{{ asset('web\searchJquery\jquery-ui.js')  }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

@endsection
