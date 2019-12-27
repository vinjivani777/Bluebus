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

                            <form action="{{route('bus-detail.update',["id"=>$bus_detail->id])}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                        <div class="form-group">
                                            <label for="busname">Bus Name</label>
                                            <input type="text" class="form-control" name="bus_name" id="bus_name" value="{{$bus_detail->bus_name}}" placeholder="Bus Name" required>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                        <div class="form-group">
                                            <label for="busregno">Bus RegiNumber</label>
                                            <input type="text" class="form-control" name="bus_reg_no" id="bus_reg_no" value="{{$bus_detail->bus_reg_no}}" placeholder="Bus Regi No" required>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4 ">
                                        <div class="form-group">
                                            <label for="bustype">Bus Type</label>
                                            <select name="bus_type" id="bus_type" class="form-control" required>
                                            @foreach ($bus_type as $type)
                                                <option value="{{$type->id}}" {{$type->id == $bus_detail->bus_type_id?"selected":""}}>{{$type->bus_type}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                        <div class="form-group">
                                            <label for="max_seats">Maximum seats</label>
                                            <input type="text" class="form-control" min="1" step="1" name="max_seats" id="max_seats" value="{{$bus_detail->max_seats}}" placeholder="Maximum seats" required>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                        <div class="form-group">
                                            <label for="board_point">Board Point</label>
                                            <input type="text" class="form-control" name="board_point" id="board_point" value="{{$bus_detail->board_point}}" placeholder="Board Point" required>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                        <div class="form-group">
                                            <label for="droppoint">Drop seats</label>
                                            <input type="text" class="form-control" name="drop_point" id="drop_point" value="{{$bus_detail->drop_point}}" placeholder="Drop Point" required>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                        <div class="form-group">
                                            <label for="boardtime">Board Time</label>
                                            <input type="text" class="form-control" name="board_time" id="board_time_edit" value="{{$bus_detail->board_time}}" placeholder="Board Time" required>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                        <div class="form-group">
                                            <label for="droptime">Drop Time</label>
                                            <input type="text" class="form-control" name="drop_time" id="drop_time_edit" value="{{$bus_detail->drop_time}}" placeholder="Drop Time" required>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                        <div class="form-group">
                                            <label for="amenities">Amenities</label>
                                            <select name="amenities[]" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose Amenities" required>
                                                <?php $select_amenities = explode(",", $bus_detail->amenities_id); ?>
                                                @foreach ($amenities as $type)
                                                <option value="{{$type->id}}" {{in_array($type->id, $select_amenities)?"selected":""}}>{{$type->amenities}}</option>
                                                @endforeach
                                            </select>
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
