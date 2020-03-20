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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Route Detail</a></li>
                                <li class="breadcrumb-item active">Route Add</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add Route Details</h4>
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
                            <h4 class="card-title mt-0 mb-0">Add Route Details</h4>
                        </div>
                        <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                            <hr>
                        </div>
                    </div>

                    <form action="{{route('vendor.route-detail.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="from_place">From Place</label>
                                    <select name="from_place" class="form-control" id="from_place" data-toggle="select2" required>
                                        <option value="">Select City</option>
                                        @foreach ($cities as $city)
                                        <option value="{{$city->id}}">{{$city->city_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="to_place">To Place</label>
                                    <select name="to_place" class="form-control" id="to_place" data-toggle="select2" required>
                                        <option value="">Select City</option>
                                        @foreach ($cities as $city)
                                        <option value="{{$city->id}}">{{$city->city_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                            {{-- <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" value="100" class="form-control" name="fare" id="fare" step="1" min="1" placeholder="Price" required>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="from_place">From Place</label>
                                    <input type="text" class="form-control" name="board_point" id="board_point" placeholder="From Place" required>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="to_place">To Place</label>
                                    <input type="text" class="form-control" name="drop_point" id="drop_point" placeholder="To Place" required>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="start_time">Board Time</label>
                                    <input type="text" class="form-control" name="board_time" id="board_time" placeholder="Start Time" required>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="arrival_time">Drop Time</label>
                                    <input type="text" class="form-control" name="drop_time" id="drop_time" placeholder="Arrival Time" required>
                                </div>
                            </div>
                        </div> --}}
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
            var old_from_place = $("#from_place").val();
            var old_to_place = $("#to_place").val();

            $("#from_place").on('change',function(){
                var from_place = $(this).val();
                var to_place = $("#to_place").val();
                if((from_place)==(to_place))
                {
                    alert('From & To Places Cannot Be Same');
                    $('#from_place').val(old_from_place).change();
                }
            });
            $("#to_place").on('change',function(){
                var to_place = $(this).val();
                var from_place = $("#from_place").val();
                if((to_place)==(from_place))
                {
                    alert('From & To Places Cannot Be Same');
                    $('#to_place').val(old_to_place).change();
                }
            });

            $("#submit").on('change',function(){
                var from_place = $("#from_place").val();
                var to_place = $("#to_place").val();
                if((to_place)==(from_place))
                {
                    alert('From & To Places Cannot Be Same');
                    $('#from_place').val(old_from_place).change();
                    $('#to_place').val(old_to_place).change();
                }
            });
        });
    </script>
@endsection
