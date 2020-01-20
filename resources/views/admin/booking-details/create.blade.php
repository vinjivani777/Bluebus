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
                    <form action="{{route('booking-detail.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="bus_name">Bus Name</label>
                                    <select name="bus_name" class="form-control bus_name" id="bus_name" data-toggle="select2" required>
                                        @foreach ($bus_list as $bus)
                                        <option value="{{$bus->id}}">{{$bus->bus_name}} | {{strtoupper($bus->bus_reg_no)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="route">Route</label>
                                    <select  class="form-control route_id" name="" id="route_id" data-toggle="select2" required>

                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="starting_point">New Pick-Up Point</label>
                                    <select  class="form-control" name="starting_point" id="starting_point" data-toggle="select2" required>

                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="drop_point">New Droping Point</label>
                                    <select  class="form-control" name="stoping_point" id="stoping_point" data-toggle="select2" required>

                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="landmark">Land Mark</label>
                                    <input type="text" class="form-control" name="landmark" id="landmark" placeholder="Land Mark" required>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Address" required>
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
        $("#bus_name").on('change',function(){
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
                        // alert('success');
                        // $('#route_id').empty();
                        if(responce.length != ""){
                            for (var i = 0; i < responce.length; i++) {
                            var route_id = document.getElementById("route_id");
                            var option = document.createElement("option");
                            option.text = responce[i].board_point+" - "+responce[i].drop_point;
                            option.value = responce[i].id;
                            $(this).name = responce[i].bus_id;
                            route_id.add(option);
                            }
                        }
                    }
                });
            }
        });
        $("#route_id").on('change',function(){
            route_id = this.value;
            bus_id = 1;//$("#bus_name").value;
            alert(bus_id);
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
                        // $('#route_id').empty();
                        if(responce.length != ""){
                            for (var i = 0; i < responce.length; i++) {
                            var route_id = document.getElementById("starting_point");
                            var option = document.createElement("option");
                            option.text = responce[i].board_point;
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
            bus_id = 1;//$("#bus_name :selected").value;
            alert(bus_id);
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
                        // $('#route_id').empty();
                        if(responce.length != ""){
                            for (var i = 0; i < responce.length; i++) {
                            var route_id = document.getElementById("stoping_point");
                            var option = document.createElement("option");
                            option.text = responce[i].drop_point;
                            option.value = responce[i].id;
                            route_id.add(option);
                            }
                        }
                    }
                });
            }
        });
    </script>
@endsection
