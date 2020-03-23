@extends('admin.layout')


@section('page-title')

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
                                <li class="breadcrumb-item active">Bus Detais Edit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Bus Detais Edit</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-warning" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-12 ">
                                    <h4 class="card-title mt-0 mb-0">Edit Bus Details</h4>
                                </div>
                                <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                    <hr>
                                </div>
                            </div>

                            <form action="{{route('bus-detail.update',['id'=>$bus->id])}}" method="post">
                                @csrf
                                {{-- <div class="row">
                                    <div class="col-12 col-md-12 ">
                                        <h4 class="card-title mt-0 mb-0">Add Bus Details</h4>
                                    </div>
                                    <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                        <hr>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="busname">Bus Name</label>
                                        <input type="text" class="form-control" name="bus_name" id="bus_name" value="{{ $bus->bus_name }}" placeholder="Bus Name" required autofocus="">
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="busregno">Bus RegiNumber</label>
                                            <input type="text" class="form-control" name="bus_reg_no" style="text-transform:uppercase" id="bus_reg_no" value="{{ $bus->bus_reg_no }}" placeholder="Bus Regi No" required>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 col-sm-4 ">
                                        <div class="form-group">
                                            <label for="bustype">Bus Type</label>
                                            <select name="bus_type" id="bus_type" class="form-control" data-toggle="select2">
                                                @foreach ($bus_type as $type)
                                                <option value="{{$type->id}}" @if(($type->id) == ($bus->bus_type_id))  {{ "selected" }} @endif >{{ $type->type_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4 ">
                                        <div class="form-group">
                                                <label for="route">Route</label>
                                                <select name="route[]" id="route"  class="form-control select2-multiple"  data-toggle="select2"  multiple="multiple" data-placeholder="Choose Mutipal Route" required>
                                                    <?php $select_routes = explode(",", $bus->route_id); ?>
                                                    @foreach ($routes as $route)
                                                    <option value="{{$route->id}}" {{in_array($route->id, $select_routes)?"selected":""}}>{{$route->Source->city_name . ' - ' . $route->Destination->city_name }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                        <div class="form-group">
                                            <label for="maxiseats">Maximum seats</label>
                                            <input type="number" min="1" step="1" class="form-control" name="max_seats" value="{{ $bus->max_seats }}" id="max_seats" placeholder="Maximum seats" required>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                        <div class="form-group">
                                            <label for="board_point">Start Point</label>
                                            <input type="text" class="form-control" name="board_point" id="board_point" value="{{ $bus->starting_point }}" placeholder="Board Point" required>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                        <div class="form-group">
                                            <label for="droppoint">End Point</label>
                                            <input type="text" class="form-control" name="drop_point" id="drop_point" value="{{ $bus->ending_point }}" placeholder="Drop Point" required>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                        <div class="form-group">
                                            <label for="boardtime">Start Time</label>
                                            <input type="text" class="form-control" id="board_time" name="board_time" value="{{ date("g:i A",strtotime($bus->start_time))  }}" placeholder="Pick a time">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                        <div class="form-group">
                                            <label for="droptime">End Time</label>
                                            <input type="text" class="form-control" id="drop_time" name="drop_time" value="{{ date("g:i A",strtotime($bus->ending_time)) }}" placeholder="Drop Time">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                        <div class="form-group">
                                            <label for="amenities">Amenities</label>
                                            <select name="amenities[]" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose Amenities" required>
                                                <?php $select_amenities = explode(",", $bus->amenities_id); ?>
                                                @foreach ($amenities as $type)
                                                <option value="{{$type->id}}" {{in_array($type->id, $select_amenities)?"selected":""}}>{{$type->description}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4 ">
                                        <div class="form-group">
                                            <label for="vendor">Vendor</label>
                                            <select name="vendor" id="vendor" class="form-control" data-toggle="select2"  required>
                                                <option value="">Select Vendor</option>
                                                @foreach ($vendor as $vendor)
                                                <option value="{{$vendor->id}}"  @if(($vendor->id) == ($bus->vendor_id)) {{ "selected" }} @endif>{{$vendor->first_name . ' ' . $vendor->last_name  }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                        <div class="form-group ">
                                            <label>Routing multiple dates</label>
                                            <input type="text" id="multiple-datepicker" value="{{$bus->dates}}" class="form-control flatpickr-input active" name="dates" placeholder="Multiple dates" readonly="readonly">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Update">
                                        <input type="reset" class="btn btn-sm btn-danger " value="Reset">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->
            </div>

        </div>
    <!-- End Content-->

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
