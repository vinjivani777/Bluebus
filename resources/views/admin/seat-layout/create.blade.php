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

    <style>
        .seat_text{
            border:0px;
        }
    </style>
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
                                <li class="breadcrumb-item active">Seat Layout</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add Seat Layout</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form action="{{ route('seat-layout.store') }}" method="POST" enctype="multipart/form-data">
            <div class="row">
                    @csrf
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header bg-primary" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-12 ">
                                        <h4 class="card-title mt-0 mb-0">Add Seat Layout</h4>
                                    </div>
                                    <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                    <div class="form-group">
                                        <label for="bus_name">Bus Name</label>
                                        <select name="bus_name" class="form-control bus_name" id="bus_name" data-toggle="select2" required>
                                            @foreach ($bus_list as $bus)
                                            <option value="{{$bus->id}}">{{$bus->bus_name}} | {{strtoupper($bus->bus_reg_no)}}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">@error('bus_name') {{ $message }} @enderror</span>
                                    </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                        <div class="form-group">
                                            <label for="">Select Seat Type</label>
                                            <select name="seat_type" id="seat_type" class="form-control seat_type">
                                                <option value="" selected>Select Type</option>
                                                <option value="1">Seater</option>
                                                <option value="2">Sleeper</option>
                                                <option value="3">Seater && Sleeper</option>
                                            </select>
                                            <span class="text-danger">@error('seat_type') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                        <div class="form-group">
                                            <label for="">Select Bath</label>
                                            <select name="bus_bath" id="bus_bath" class="form-control bus_bath">
                                                <option value="" selected>Select Bath</option>
                                                <option value="1">Single Bath</option>
                                                <option value="2">Dubble Dakker Bath</option>
                                            </select>
                                            <span class="text-danger">@error('bus_bath') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                        <div class="form-group">
                                            <label>Select Layout Type</label>
                                            <select class="form-control layout" name="layout" id="layout">
                                                <option value="" selected>Select Layout</option>
                                                <option value="1 X 1"> 1 X 1 </option>
                                                <option value="1 X 2" > 1 X 2 </option>
                                                <option value="2 X 2"> 2 X 2 </option>
                                            </select>
                                            <span class="text-danger">@error('layout') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                    <div class="form-group">
                                        <label for="">Total Seat</label>
                                        <input type="number" name="total_seat" id="total_seat" class=" total_seat form-control" placeholder="Total Seat">
                                        <input type="hidden" name="final_total_seat" id="final_total_seat">
                                        <span class="text-danger">@error('total_seat') {{ $message }} @enderror</span>
                                    </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                        <div class="form-group">
                                            <label for="">No of last row seats</label>
                                            <input type="number" name="last_row_seat" id="last_row_seat" class="last_row_seat form-control" placeholder="Last Row No Of Seat">
                                            <span class="text-danger">@error('last_row_seat') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                        <button type="button" class="btn btn-sm btn-info " id="view">View Layout</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <input type="submit" disabled class="btn btn-sm btn-primary submit" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header bg-primary" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-12 ">
                                        <h4 class="card-title mt-0 mb-0">Quick See Layout</h4>  <h4 class="text-primary no_of_seat"></h4>
                                    </div>
                                    <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                        <hr>
                                    </div>
                                </div>
                                <div class="quick_layout"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
            </div>
            </form>

            <!-- end row -->
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

    <script>
        $('#view').click(function(){

            var seat_type=$('.seat_type').val();
            var layout=$('.layout').val();
            var total_seat=$('.total_seat').val();
            var bus_name=$('.bus_name').val();
            var bus_bath=$('.bus_bath').val();
            var last_row_seat=$('.last_row_seat').val();
            var valid=true;
            if(seat_type == "")
            {
                $('.seat_type').addClass('border-danger');
                valid =false;

            }else{

                $('.seat_type').removeClass('border-danger');
                valid =true;
            }
            if(bus_name == "")
            {
                $('.bus_name').addClass('border-danger');
                valid =false;
            }else{

                $('.bus_name').removeClass('border-danger');
                valid =true;
            }

            if(total_seat == "")
            {
                $('.total_seat').addClass('border-danger');
                valid =false;
            }else{
                $('.total_seat').removeClass('border-danger');
                valid =true;
            }
            if(layout=="")
            {
                $('.layout').addClass('border-danger');
                valid =false;
            }else{

                $('.layout').removeClass('border-danger');
                valid =true;
            }
            if(bus_bath=="")
            {
                $('.bus_bath').addClass('border-danger');
                valid =false;
            } else{
                $('.bus_bath').removeClass('border-danger');
                valid =true;
            }
            if(seat_type != "" && bus_name != "" && total_seat != "" && layout != ""  && bus_bath != "" )
            {
                if(total_seat % 2 == 0)
                {
                    var seats=total_seat;
                    if(layout == "1 X 2")
                    {
                        final_seats= parseInt(seats / 3);

                    }
                    else if(layout == "2 X 2")
                    {

                        final_seats=parseInt(seats / 4);
                    }
                    else
                    {

                        final_seats=parseInt(seats / 2);

                    }

                    $.ajax({
                        type:'POST',
                        url:'{{route('seat-layout.view')}}',
                        data:{'seat_type':seat_type,'bus_name':bus_name,'last_row_seat':last_row_seat,'total_seat':final_seats,'layout': layout,"_token": "{{ csrf_token() }}"},
                        success:function(response){


                            $('.quick_layout').html(response.html);
                            $('.no_of_seat').text('Totel No Of Seats '+(response.total_seats));
                            $('#final_total_seat').val(response.total_seats);
                            $('.submit').removeAttr('disabled');

                         }
                    });

                }else{
                    var seats=total_seat;
                    total_seats =seats - 1;
                    if(layout == "1 X 2")
                    {
                        final_seats=parseInt(seats / 3);

                    }
                    else if(layout == "2 X 2")
                    {

                        final_seats=parseInt(seats / 4)
                    }
                    else
                    {

                        final_seats=parseInt(seats / 2);

                    }

                    $.ajax({
                        type:'POST',
                        url:'{{route('seat-layout.view')}}',
                        data:{'seat_type':seat_type,'bus_name':bus_name,'last_row_seat':last_row_seat,'total_seat':final_seats,'layout': layout,"_token": "{{ csrf_token() }}"},
                        success:function(response){

                            $('.quick_layout').html(response.html);
                            $('.no_of_seat').text('Totel No Of Seats '+response.total_seats)
                            $('#final_total_seat').val(response.total_seats);
                            $('.submit').removeAttr('disabled');

                        }
                    });

                }


            }
        });
    </script>
@endsection
