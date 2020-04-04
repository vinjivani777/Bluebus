@extends('admin.layout')


@section('page-title')

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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Cancellation Details</a></li>
                                <li class="breadcrumb-item active">Cancellation Add</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Cancellation Add</h4>
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
                    <form action="{{ route('cancellation-detail.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 ">
                                <h4 class="card-title mt-0 mb-0">Add Cancellation Details</h4>
                            </div>
                            <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="busname">Bus Name</label>
                                    <select name="bus_name" id="bus_name" data-toggle="select2" class="form-control">
                                        <option readonly>Select Bus</option>
                                        @foreach ($Bus as $item)
                                            <option value="{{ $item->id }}">{{ $item->bus_name.'|'.$item->bus_reg_no     }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="busname">Route Name</label>
                                    <select name="route_name" id="route_name" data-toggle="select2" class="form-control route_name">
                                        <option readonly>Select Route</option>
                                        {{-- @foreach ($Route as $item)
                                            <option value="{{ $item->id }}">{{ $item->source_name.'-'.$item->destination_name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-3">
                                {{-- <div class="form-group"> --}}
                                    <label for="cancellation_date">DateToCancel</label>
                                    <input type="date" class="form-control flatpickr-input active" required value="" name="cancellation_date" id="cancel_booking_date" placeholder="Select Date " required="" readonly="readonly">
                                    <span class="text-danger"></span>
                                {{-- </div> --}}
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-3">
                                <div class="form-group">
                                    <label for="cancel_time">Board Time</label>
                                    <input type="text" readonly class="form-control" name="cancellation_time" value="{{ old('cancel_time') }}" id="cancel_time" placeholder="Board Time">
                                </div>
                            </div>
                             {{--<div class="col-3 col-md-3 col-lg-3 col-sm-2">
                                <label for="droppoint">Price Type</label><br>
                                <div class="ml-2 mt-2 radio radio-info form-check-inline">
                                    <input type="radio" id="percentage" value="percentage" name="type" checked>
                                    <label for="inlineRadio1"> Percentage </label>
                                </div>
                                <div class="ml-2 mt-2 radio form-check-inline">
                                    <input type="radio" id="flat" value="flat" name="type" >
                                    <label for="inlineRadio2"> Flat </label>
                                </div>
                            </div>
                            <div class="col-3 col-md-3 col-lg-3 col-sm-2">
                                <div class="form-group">
                                    <label for="percentage" class="percentagetext">Percentage</label>
                                    <label for="percentage" class="flattext">Flat</label>
                                    <input type="text" class="form-control percentagetext" readonly name="percentagetext" value="{{ old('percentage') }}" id="percentagetext" placeholder="Percentage">
                                    <input type="text" class="form-control flattext" readonly name="flattext" id="flattext" value="{{ old('flat') }}" placeholder="Flat">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="cancel_time">Booking Amount</label>
                                    <input type="text" class="form-control" id="booking_amount" placeholder="Booking Amount" readonly>
                                </div>
                            </div> --}}
                            <div class="col-4 col-md-4 col-lg-4 col-sm-3">
                                <div class="form-group">
                                    <label for="cancel_time">Refund Amount</label>
                                    <input type="number" readonly class="form-control" name="refund_amount" value="{{ old('refund_amount') }}" id="refund_amount" placeholder="Refund Amount">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
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
        // $(   ".flattext").hide();
        // $("#percentage").click(function() {
        //     $(".flattext").hide();
        //     $(".flattext").val('');
        //     $(".percentagetext").show();
        // });
        // $("#flat").click(function() {
        //     $(".flattext").show();
        //     $(".percentagetext").hide();
        //     $(".percentagetext").val('');
        // });

      $("#route_name").on('change',function(){
        var bus_id= $('#bus_name').val();
        var route_id= $('#route_name').val();
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
                    // $("#cancel_booking_date").flatpickr({
                    //     enable: ["2020-03-30"]
                    // } );
                    // if(response !== ""){ $("#percentagetext").removeAttr("readonly"); }
                    // if(response !== ""){ $("#flattext").removeAttr("readonly"); }
                }
            });
            $.ajax({
                url:'{{route('vendor.busdates.get')}}',
                type:'get',
                data:{
                    bus_id:bus_id,
                },
                success:function(response)
                {
                    var ind=response.split(',');
                    var dates="";
                    $.each(ind, function(index,value){
                                dates=dates+'"'+value+'",' ;
                    });
                    // alert(dates);
                    // $("#cancel_booking_date").flatpickr({
                    //     enable: [dates]
                    // } );
                    // if(response !== ""){ $("#percentagetext").removeAttr("readonly"); }
                    // if(response !== ""){ $("#flattext").removeAttr("readonly"); }
                }
            });
    });

    $("#bus_name").on('change',function(){
            var bus_id= $('#bus_name').val();
            $('#route_name').empty();
            $.ajax({
                url:'{{route('busroutestocancel.get')}}',
                type:'get',
                data:{
                    bus_id:bus_id
                },
                success:function(response)
                {
                    if(response.length != ""){
                        $('.route_name').append(`<option value="0" disabled selected>Select Route</option>`);
                        for (var i = 0; i < response.length; i++) {
                        var route_id = document.getElementById("route_name");
                        var option = document.createElement("option");
                        option.text = response[i].source_name+" - "+response[i].destination_name;
                        option.value = response[i].id;
                        route_id.add(option);
                        }
                    }
                }
            });
        });

        // $(".percentagetext").on('keyup',function(){
        //     if(($(this).val())<=100)
        //     {
        //         $booking_amount=$("#booking_amount").val();
        //         $refund_amount=$("#refund_amount").val();
        //         $deduct_amount= ($booking_amount)*($(this).val())/100;
        //         $refund_amount=$booking_amount-$deduct_amount;
        //         $("#refund_amount").val($refund_amount);
        //         // alert($refund_amount);
        //     }else{
        //         alert('Refund Cannot Be More Than Booking Amount' );
        //     }
        // });
        // $(".flattext").on('keyup',function(){
        //     if(($(this).val()) <= ($("#booking_amount").val()))
        //     {
        //         $booking_amount=$("#booking_amount").val();
        //         $refund_amount=$("#refund_amount").val();
        //         $deduct_amount=$(this).val();
        //         $refund_amount=$booking_amount-$deduct_amount;
        //         $("#refund_amount").val($refund_amount);
        //     }else{
        //         alert('Refund Cannot Be Greater Than Booking Amount'($("#booking_amount").val()) );
        //     }
        // });
    });


</script>
@endsection
