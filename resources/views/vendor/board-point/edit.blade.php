@extends('vendor.layout')


@section('page-title')

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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Board Point</a></li>
                                <li class="breadcrumb-item active">Edit Board Point</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Board Point</h4>
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
                            <h4 class="card-title mt-0 mb-0">Edit Board Point</h4>
                        </div>
                        <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                            <hr>
                        </div>
                    </div>

                    <form action="{{route('vendor.board-point.update',$board_point->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="bus_name">Bus Name</label>
                                    <select name="bus_name" class="form-control" id="bus_name" data-toggle="select2" required>
                                        @foreach ($bus_list as $bus)
                                        <option value="{{$bus->id}}" {{$bus->id == $board_point->bus_id?"selected":""}}>{{$bus->bus_name}} | {{strtoupper($bus->bus_reg_no)}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('bus_name') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="board_point">Route</label>
                                    <input type="hidden" id="selected_route_id" value="{{$board_point->route_id}}">
                                    <select  class="form-control" name="route_id" id="route_id" data-toggle="select2" required>
                                        {{-- @foreach ($route_list as $route)
                                        <option value="{{$route->id}}" {{$route->id == $board_point->route_id?"selected":""}}>{{$route->source_name}} | {{($route->destination_name)}}</option>
                                        @endforeach --}}
                                    </select>
                                    <span class="text-danger">@error('route_id') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="board_point_position">BoardPoint Position</label>
                                    <input type="text" readonly class="form-control" id="board_point_position" placeholder="Select Position" required>
                                    <input type="text" hidden name="board_point_position"  class="form-control" value="" id="next_position"  required>
                                    <input type="text" hidden readonly name="old_board_point_position"  class="form-control" value="{{$board_point->board_point_position}}" id="old_board_point_position"  >
                                    <input type="text" hidden  name="next_time" class="form-control" value="{{$board_point->next_time}}" id="next_time"  >
                                    <span class="text-danger">@error('board_point_position') {{ $message }} @enderror</span>
                                    <span class="text-danger">@error('next_time') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="board_point">New Boarding Point</label>
                                    <input type="text" class="form-control" name="board_point" id="board_point" value="{{$board_point->board_point}}" placeholder="New Broding Point" required>
                                    <span class="text-danger">@error('board_point') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="start_time">Start Time</label>
                                    <input type="text" class="form-control" name="board_time" id="board_time_edit" value="{{$board_point->pickup_time}}" placeholder="Start Time" required>
                                    <span class="text-danger">@error('board_time') {{ "Boarding-Time should be greater than Selected Time" }}  @enderror</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="landmark">Land Mark</label>
                                    <input type="text" class="form-control" name="landmark" id="landmark" value="{{$board_point->landmark}}" placeholder="Land Mark" required>
                                    <span class="text-danger">@error('landmark') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" id="address" value="{{$board_point->address}}" placeholder="Address" required>
                                    <span class="text-danger">@error('address') {{ $message }} @enderror</span>
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
        // $(function () {
        //     var bus_id = '{{$board_point->bus_id}}';
        //     var route_id = '{{$board_point->board_point}}';
        //     routeFunction(bus_id,route_id); //this calls it on load
        // });
        $(document).ready(function() {
            var selected_bus_id=$("#bus_name").val();
            var selected_route_id=$("#selected_route_id").val();
            var route_id = $("#selected_route_id").val();
            var bus_id = $("#bus_name").val();
            var position = $("#old_board_point_position").val();
            // alert(selected_bus_id)
            $.ajax({
                    url:'{{route('vendor.bus-route-detailforboardpoint.get')}}',
                    type:'get',
                    data:{
                        bus_id:selected_bus_id
                    },
                    success:function(response)
                    {
                        if(response.length != ""){
                            $('#route_id').append(`<option value="0" disabled selected>Select Route</option>`);
                            for (var i = 0; i < response.length; i++) {
                            var route_id = document.getElementById("route_id");
                            var option = document.createElement("option");
                            option.text = response[i].source_name+" - "+response[i].destination_name;
                            option.value = response[i].id;
                            if((selected_route_id)==(response[i].id))
                            {
                                option.setAttribute('selected',true);
                            }
                            route_id.add(option);
                            }
                        }
                    }
            });

            if(route_id != "" && route_id != 0){
                $.ajax({
                    url:'{{route('vendor.boardpoint-oldturn-detail.get')}}',
                    data:{
                        route_id : route_id,
                        bus_id : bus_id,
                        position :position
                    },
                    type:'get',
                    success:function(response)
                    {
                        // alert(response.length);
                        $('#board_point_position').empty();
                        if(response.length != ""){
                            $("#board_point_position").val("After "+response.pickup_time+" - "+response.board_point);
                            $("#next_time").val(response.pickup_time);
                            $("#next_position").val(response.board_point_position);
                        }
                        else{
                            $("#board_point_position").val("First Board Point");
                            $("#next_position").val("0");
                        }
                    }
                });
            }



            $("#bus_name").on('change',function(){
                    var bus_id= $('#bus_name').val();
                    $('#route_id').empty();
                    $('#cancel_booking_date').val('');
                    $('#landmark').val('');
                    $('#address').val('');
                    $('#boarding_point').val('');
                    $('#board_point_position').val('');
                    $('#next_position').val('');
                    $('#old_board_point_position').val('');
                    $('#next_time').val('');
                    $('#board_point').val('');
                    $('#board_time_edit').val('');
                    $('#next_time').val('');
                    $('#next_time').val('');
                    $.ajax({
                        url:'{{route('vendor.busroutestocancel.get')}}',
                        type:'get',
                        data:{
                            bus_id:bus_id
                        },
                        success:function(response)
                        {
                            if(response.length != ""){
                                $('#route_id').append(`<option value="0" disabled selected>Select Route</option>`);
                                for (var i = 0; i < response.length; i++) {
                                var route_id = document.getElementById("route_id");
                                var option = document.createElement("option");
                                option.text = response[i].source_name+" - "+response[i].destination_name;
                                option.value = response[i].id;
                                route_id.add(option);
                                }
                            }
                        }
                    });
            });
        });

        $("#route_id").on('change',function(){
            route_id = this.value;
            bus_id = $("#bus_name").val();
            // $('#route_id').empty();
            $('#landmark').val('');
            $('#address').val('');
            $('#boarding_point').val('');
            $('#board_point_position').val('');
            $('#next_position').val('');
            $('#old_board_point_position').val('');
            $('#next_time').val('');
            $('#board_point').val('');
            if(route_id != "" && route_id != 0){
                $.ajax({
                    url:'{{route('vendor.boardpoint-turn-detail.get')}}',
                    data:{
                        route_id : route_id,
                        bus_id : bus_id
                    },
                    type:'get',
                    success:function(response)
                    {
                        // alert(response.length);
                        $('#board_point_position').empty();
                        if(response.length != ""){
                            $("#board_point_position").val("After "+response.pickup_time+" - "+response.board_point);
                            $("#next_time").val(response.pickup_time);
                            $("#next_position").val(response.board_point_position);
                        }
                        else{
                            $("#board_point_position").val("First Board Point");
                            $("#next_position").val("0");
                        }
                    }
                });
            }
        });
    </script>
@endsection
