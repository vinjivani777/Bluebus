@extends('admin.layout')


@section('page-title')
booking
@endsection

@section('other-page-css')
    <!-- Plugins css -->
    <link href="{{asset('admin/libs/jquery-nice-select/nice-select.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('admin/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bluebus</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Booking</a></li>
                                <li class="breadcrumb-item active">Add Booking</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add @yield('page-title')</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

        </div>
    <!-- End Content-->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-warning" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-12 ">
                            <h4 class="card-title mt-0 mb-0">Add Booking</h4>
                        </div>
                        <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                            <hr>
                        </div>
                    </div>
                    <form action="{{route('booking-detail.store')}}" method="post" id="myform">
                        @csrf
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="bus_name">Bus Name</label>
                                    <select name="bus_name" class="form-control bus_name" id="bus_name" data-toggle="select2" >

                                        @foreach ($bus_list as $bus)
                                        <option value="{{$bus->id}}">{{$bus->bus_name}} | {{strtoupper($bus->bus_reg_no)}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('bus_name') {{ "Please select Bus Name" }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="route">Route</label>
                                    <select  class="form-control route_id" name="route_name" id="route_id" data-toggle="select2" >

                                    </select>
                                    <span class="text-danger">@error('route_name') {{ "Please select Route" }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="starting_point">New Pick-Up Point</label>
                                    <select  class="form-control starting_point" name="starting_point" id="starting_point" data-toggle="select2" >

                                    </select>
                                    <span class="text-danger">@error('starting_point') {{ "The Starting Point Field is required" }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="drop_point">New Droping Point</label>
                                    <select  class="form-control stoping_point" name="stoping_point" id="stoping_point" data-toggle="select2" >

                                    </select>
                                    <span class="text-danger">@error('stoping_point') {{ "The Stoping Point Field is required" }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-3 col-md-3 col-lg-3 col-sm-2">
                                <div class="form-group">
                                    <label for="landmark">Land Mark</label>
                                    <input type="text" class="form-control" readonly name="starting_point_landmark" id="starting_point_landmark" placeholder="Pick-Up Land Mark" >
                                </div>
                            </div>
                            <div class="col-3 col-md-3 col-lg-3 col-sm-2">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" readonly name="starting_point_address" id="starting_point_address" placeholder="Pick-Up Address" >
                                </div>
                            </div>
                            <div class="col-3 col-md-3 col-lg-3 col-sm-2">
                                <div class="form-group">
                                    <label for="landmark">Land Mark</label>
                                    <input type="text" class="form-control" readonly name="stoping_point_landmark" id="stoping_point_landmark" placeholder="Drop Land Mark" >
                                </div>
                            </div>
                            <div class="col-3 col-md-3 col-lg-3 col-sm-2">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" readonly name="stoping_point_address" id="stoping_point_address" placeholder="Drop Address" >
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-2">
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="text" class="form-control" name="amount" id="amount" placeholder="Booking Amount" >
                                    <span class="text-danger">@error('amount') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-2">
                                <div class="form-group">
                                    <label for="seatno">Seat No</label>
                                    <input type="text" class="form-control" name="seatno" id="seatno" placeholder="Seat No" >
                                    <span class="text-danger">@error('seatno') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-2">
                                <div class="form-group">
                                    <label for="paymentstatus">Payment Method</label>
                                    <input type="text" class="form-control" name="paymentstatus" id="paymentstatus" placeholder="COD" value="COD" readonly >
                                    <span class="text-danger">@error('paymentstatus') {{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                <input type="submit" class="btn btn-sm btn-primary" value="Submit">
                                <input type="reset" class="btn btn-sm btn-danger " value="Reset">
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
    </div>

@endsection

@section('other-page-js')
    <script src="{{asset('admin/libs/jquery-nice-select/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('admin/libs/switchery/switchery.min.js')}}"></script>
    <script src="{{asset('admin/libs/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

    <!-- Init js-->
    <script src="{{asset('admin/js/pages/form-advanced.init.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('admin/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{asset('admin/libs/clockpicker/bootstrap-clockpicker.min.js')}}"></script>

    <!-- Init js-->
    <script src="{{asset('admin/js/pages/form-pickers.init.js')}}"></script>

    <script>
        $(document).ready(function(){
            document.getElementById("myform").reset();
            $('.bus_name').append(`<option value="0" disabled selected >Select Bus</option>`);
        });

        $(".bus_name").on('change',function(){
            $('#stoping_point').empty();
            $('#starting_point').empty();
            $('#route_id').empty();
            $('#starting_point_address').val("");
            $('#starting_point_landmark').val("");
            $('#stoping_point_address').val("");
            $('#stoping_point_landmark').val("");
            bus_id = this.value;
            if(bus_id != "" && bus_id != 0){
                $.ajax({
                    url:'{{route('booking-busroutes.get')}}',
                    data:{
                        bus_id : bus_id
                    },
                    type:'get',
                    success:function(responce)
                    {
                        if(responce.length != ""){
                            $('.route_id').append(`<option value="0" disabled selected>Select Route</option>`);
                            for (var i = 0; i < responce.length; i++) {
                            var route_id = document.getElementById("route_id");
                            var option = document.createElement("option");
                            option.text = responce[i].board_point+" - "+responce[i].drop_point;
                            option.value = responce[i].id;
                            route_id.add(option);
                            }
                        }
                    }
                });
            }
        });

        $(".route_id").on('change',function(){
            $('#starting_point_landmark').val("");
            $('#stoping_point_address').val("");
            $('#starting_point_address').val("");
            $('#stoping_point_landmark').val("");
            route_id = this.value;
            bus_id = $("#bus_name option:selected").val();
            if(route_id != "" && route_id != 0){
                $.ajax({
                    url:'{{route('booking-bookingboardpoint.get')}}',
                    data:{
                        route_id : route_id,
                        bus_id : bus_id
                    },
                    type:'get',
                    success:function(responce)
                    {
                        // alert(bus_id);
                        $("#starting_point").empty();
                        $('#starting_point').append(`<option value="0" disabled selected>Select</option>`);
                        if(responce.length != ""){
                            for (var i = 0; i < responce.length; i++) {
                            var route_id = document.getElementById("starting_point");
                            var option = document.createElement("option");
                            option.text = responce[i].pickup_point;
                            option.value = responce[i].id;
                            route_id.add(option);
                            }
                        }
                    }
                });
            }
        });

        $(".route_id").on('change',function(){
            route_id = this.value;
            bus_id = $("#bus_name :selected").val();
            if(route_id != "" && route_id != 0){
                $.ajax({
                    url:'{{route('booking-bookingdroppoint.get')}}',
                    data:{
                        route_id : route_id,
                        bus_id : bus_id
                    },
                    type:'get',
                    success:function(responce)
                    {
                        // alert(responce['id']);
                        $('#stoping_point').empty();
                        $('#stoping_point').append(`<option value="0" disabled selected>Select</option>`);

                        if(responce.length != ""){
                            for (var i = 0; i < responce.length; i++) {
                            var route_id = document.getElementById("stoping_point");
                            var option = document.createElement("option");
                            option.text = responce[i].stoping_point;
                            option.value = responce[i].id;
                            route_id.add(option);
                            }
                        }
                    }
                });
            }
        });

        $(".starting_point").on('change',function(){
            $('#starting_point_landmark').val("");
            $('#starting_point_address').val("");
            starting_point_id = this.value;
            if(route_id != "" && route_id != 0){
                $.ajax({
                    url:'{{route('booking-bookingboardpointdetails.get')}}',
                    data:{
                        starting_point_id : starting_point_id
                    },
                    type:'get',
                    success:function(responce)
                    {
                        $('#starting_point_address').empty();
                        $('#starting_point_landmark').empty();
                        if(responce.length != ""){
                            $("#starting_point_address").val(responce.address);
                            $("#starting_point_landmark").val(responce.landmark);
                        }
                    }
                });
            }
        });

        $(".stoping_point").on('change',function(){
            $('#stoping_point_address').val("");
            $('#stoping_point_landmark').val("");
            stoping_point_id = this.value;
            if(route_id != "" && route_id != 0){
                $.ajax({
                    url:'{{route('booking-bookingdroppointdetails.get')}}',
                    data:{
                        stoping_point_id : stoping_point_id
                    },
                    type:'get',
                    success:function(responce)
                    {
                        $('#stoping_point_address').empty();
                        $('#stoping_point_landmark').empty();
                        if(responce.length != ""){
                            $("#stoping_point_address").val(responce.address);
                            $("#stoping_point_landmark").val(responce.landmark);
                        }
                    }
                });
            }
        });
    </script>
@endsection
