@extends('admin.layout')


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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Drop Point</a></li>
                                <li class="breadcrumb-item active">Edit Drop Point</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Drop Point</h4>
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
                            <h4 class="card-title mt-0 mb-0">Edit Drop Point</h4>
                        </div>
                        <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                            <hr>
                        </div>
                    </div>

                    <form action="{{route('drop-point.update',$drop_point->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="bus_name">Bus Name</label>
                                    <select name="bus_name" class="form-control" id="bus_name" data-toggle="select2" required>
                                        @foreach ($bus_list as $bus)
                                        <option value="{{$bus->id}}" {{$bus->id == $drop_point->bus_id?"selected":""}}>{{$bus->bus_name}} | {{strtoupper($bus->bus_reg_no)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="drop_point">Route</label>
                                    <input type="hidden" id="selected_route_id" value="{{$drop_point->route_id}}">
                                    <select  class="form-control" name="route_id" id="route_id" data-toggle="select2" required>
                                        @foreach ($route_list as $route)
                                        <option value="{{$route->id}}" {{$route->id == $drop_point->route_id?"selected":""}}>{{$route->source_name}} | {{($route->destination_name)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="drop_point">New Droping Point</label>
                                    <input type="text" class="form-control" name="stoping_point" id="stoping_point" value="{{$drop_point->drop_point}}" placeholder="New Broding Point" required>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="start_time">End Time</label>
                                    <input type="text" class="form-control" name="drop_time" id="drop_time_edit" value="{{$drop_point->drop_time}}" placeholder="End Time" required>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="landmark">Land Mark</label>
                                    <input type="text" class="form-control" name="landmark" id="landmark" value="{{$drop_point->landmark}}" placeholder="Land Mark" required>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" id="address" value="{{$drop_point->address}}" placeholder="Address" required>
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
        $(document).ready(function() {
            var selected_bus_id=$("#bus_name").val();
            var selected_route_id=$("#selected_route_id").val();
            // alert(selected_bus_id)
            $.ajax({
                    url:'{{route('bus-route-detailfordroppoint.get')}}',
                    type:'get',
                    data:{
                        bus_id:selected_bus_id
                    },
                    success:function(response)
                    {
                        $("#route_id").empty();
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

            $("#route_id").on('change',function(){
                var bus_id= $('#bus_name').val();
                var route_id= $('#route_id').val();
                $('#booking_amount').empty();
                    $.ajax({
                        url:'{{route('bustotalfare.get')}}',
                        type:'get',
                        data:{
                            bus_id:bus_id,
                            route_id:route_id,
                        },
                        success:function(response)
                        {
                            $('#refund_amount').val(response.total_fare);
                            $("#cancel_time").val(response.start_time);
                            // if(response !== ""){ $("#percentagetext").removeAttr("readonly"); }
                            // if(response !== ""){ $("#flattext").removeAttr("readonly"); }
                        }
                    });
            });

            $("#bus_name").on('change',function(){
                    var bus_id= $('#bus_name').val();
                    $('#route_id').empty();
                    $('#stoping_point').val('');
                    $('#drop_time_edit').val('');
                    $('#landmark').val('');
                    $('#address').val('');
                    $.ajax({
                        url:'{{route('busroutestocancel.get')}}',
                        type:'get',
                        data:{
                            bus_id:bus_id
                        },
                        success:function(response)
                        {
                            if(response.length != ""){
                                $('.route_id').append(`<option value="0" disabled selected>Select Route</option>`);
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

        // function routeFunction(bus_id,route_id)
        // {
        //     $.ajax({
        //         url:'{{route('bus-route-detail.get')}}',
        //         data:{
        //             bus_id : bus_id
        //         },
        //         type:'get',
        //         success:function(response)
        //         {
        //             $('#route_id').empty();
        //             if(response.length != ""){
        //                 for (var i = 0; i < response.length; i++) {
        //                 var opation_route_id = document.getElementById("route_id");
        //                 var option = document.createElement("option");
        //                 option.text = response[i].source_name+" - "+response[i].destination_name;
        //                 option.value = response[i].id;
        //                 opation_route_id.add(option);
        //                     if(route_id == response[i].id){
        //                         $('#route_id').prop('selectedIndex',i);
        //                     }
        //                 }
        //             }
        //         }
        //     });
        // }

        // $("#bus_name").on('change',function(){
        //     bus_id = this.value;
        //     if(bus_id != "" && bus_id != 0){
        //         $.ajax({
        //             url:'{{route('bus-route-detail.get')}}',
        //             data:{
        //                 bus_id : bus_id
        //             },
        //             type:'get',
        //             success:function(response)
        //             {
        //                 $('#route_id').empty();
        //                 if(response.length != ""){
        //                     for (var i = 0; i < response.length; i++) {
        //                     var route_id = document.getElementById("route_id");
        //                     var option = document.createElement("option");
        //                     option.text = response[i].board_point+" - "+response[i].drop_point;
        //                     option.value = response[i].id;
        //                     route_id.add(option);
        //                     }
        //                 }
        //             }
        //         });
        //     }
        // });
    </script>
@endsection
