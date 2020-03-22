@extends('vendor.layout')


@section('page-title')
Admin|Add Bus
@endsection

@section('other-page-css')
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bus Mag.</a></li>
                                <li class="breadcrumb-item active">Bus Add</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Bus Add</h4>
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
                    <form action="{{route('vendor.bus-detail.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 ">
                                <h4 class="card-title mt-0 mb-0">Add Bus Details</h4>
                            </div>
                            <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="busname">Bus Name</label>
                                    <input type="text" class="form-control" name="bus_name" id="bus_name" placeholder="Bus Name" required autofocus="">
                                    <span>@error("bus_name"){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="busregno">Bus Regi. Number</label>
                                    <input type="text" class="form-control" name="bus_reg_no" style="text-transform:uppercase" id="bus_reg_no" placeholder="Bus Regi No" required>
                                    <span>@error("bus_reg_no"){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4 ">
                                <div class="form-group">
                                    <label for="bustype">Bus Type</label>
                                    <select name="bus_type" id="bus_type" class="form-control" data-toggle="select2">
                                        <option selected disabled>Select BusType</option>
                                        @foreach ($bus_type as $type)
                                        <option value="{{$type->id}}">{{$type->type_name}}</option>
                                        @endforeach
                                    </select>
                                    <span>@error("bus_type"){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4 ">
                                <div class="form-group">
                                    <label for="route">Route</label>
                                    <select name="route[]" id="route"  class="form-control select2-multiple"  data-toggle="select2"  multiple="multiple" data-placeholder="Choose Mutiple Route" required>
                                        <option value="" >Select Route</option>
                                        @foreach ($route as $route)
                                        <option value="{{$route->id}}">{{$route->Source->city_name . ' - ' . $route->Destination->city_name }}</option>
                                        @endforeach
                                    </select>
                                    <span>@error("route"){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-3 col-md-3 col-lg-3 col-sm-2">
                                <div class="form-group">
                                    <label for="maxiseats">Maximum seats</label>
                                    <input type="number" min="1" step="1" class="form-control" name="max_seats" id="max_seats" placeholder="Maximum seats" required>
                                    <span>@error("max_seats"){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-3 col-md-3 col-lg-3 col-sm-2">
                                <div class="form-group">
                                    <label>Fare Amount</label>
                                    <input type="number" name="total_fare" class="form-control" placeholder="Enter Fare Price">
                                    <span>@error("total_fare"){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="board_point">Start Point</label>
                                    <input type="text" class="form-control" name="board_point" id="board_point" placeholder="Starting Point" required>
                                    <span>@error("board_point"){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="droppoint">End Point</label>
                                    <input type="text" class="form-control" name="drop_point" id="drop_point" placeholder="Ending Point" required>
                                    <span>@error("drop_point"){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="boardtime">Start Time</label>
                                    <input type="text" class="form-control" id="board_time" name="board_time" placeholder="Pick a time">
                                    <span>@error("board_time"){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="droptime">End Time</label>
                                    <input type="text" class="form-control" id="drop_time" name="drop_time" placeholder="Drop Time">
                                    <span>@error("drop_time"){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="amenities">Amenities</label>
                                    <select name="amenities[]" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose Amenities">
                                        @foreach ($amenities as $type)
                                        <option value="{{$type->id}}">{{$type->description}}</option>
                                        @endforeach
                                    </select>
                                    <span>@error("amenities"){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group ">
                                    <label>Routing multiple dates</label>
                                    <input type="text" id="multiple-datepicker" class="form-control flatpickr-input active" name="dates" placeholder="Multiple dates" readonly="readonly">
                                    <span>@error("dates"){{$message}}@enderror</span>
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
@endsection
