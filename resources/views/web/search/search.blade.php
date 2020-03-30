@extends('web.layout')

@section('page-title')
Blue Bus | Search Bus Tickets
@endsection

@section('other-page-css')

    {{-- <link rel="shortcut icon" href="{{asset('web/images/favicon.ico')}}"> --}}

    <!-- Plugins css -->
    <link href="{{ asset('web/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('web/libs/animate/animate.min.css') }} " rel="stylesheet" type="text/css" />
    <link href="{{asset('web/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/libs/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css">

    <link href="{{ asset('admin/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('web/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('page-css')
    <style>
        #loading {
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
            position: fixed;
            display: block;
            opacity: 0.7;
            background-color: #fff;
            z-index: 99;
            text-align: center;
            }

            #loading-image {
            position: fixed;
            top: 214px;
            left: 530px;
            z-index: 100;
            }

            .left-side-men {
            width: 240px;
            background: #fff;
            bottom: 0;
            padding: 20px 0;
            position: absolute;
            -webkit-transition: all .2s ease-out;
            transition: all .2s ease-out;
            top: 70px;

            }
            .filter-sec .fil-search input[type=text] {
            height: 30px;
            width: 92%;
            margin-left: -10px;
            padding-left: 25px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        .return{
            transform:rotate(180deg);
        }
    </style>
@endsection

@section('content')

        @if(($result)=="NoBus")
                {{-- <div id="loading">
                    <img id="loading-image" src="{{ asset('vendor/images/bus-image/1_uQi2P.gif') }}" alt="Loading..." />
                </div> --}}
                <!-- Begin page -->
                <div id="wrapper">

                    <!-- Topbar Start -->
                   <div class="row">
                        <div class="col-12">
                            <div class="container-fluid">
                                <section class="section">
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <div class="ml-3 " style="font-size:18px;">
                                                <span class="text-dark">{{ $source }} </span>
                                                <i class="fe-arrow-right "></i>
                                                <span class="text-dark"> {{ $dest }} </span>
                                                <span class="text-dark ml-3">
                                                    <button type="button" class="btn btn-sm btn-light waves-effect waves-light" style="border:1px solid black" data-toggle="modal" data-target=".bs-example-modal-center">Modify</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <button class="btn btn-sm btn-light float-right" style="border:1px solid black">Add A Return Ticket</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <hr class="" style="border:0.3px solid #ddd;">
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                   </div>
                </div>

                    <!-- end Topbar -->

                <center><img src="{{asset('web/nobusfound.png')}}" width="100%" height="100%"></center>


            @else

                <div id="loading">
                    <img id="loading-image" src="{{ asset('vendor/images/bus-image/1_uQi2P.gif') }}" alt="Loading..." />
                </div>
                <!-- Begin page -->
                <div id="wrapper">

                    <!-- Topbar Start -->
                <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <div class="container-fluid">
                                <section class="section">
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <div class="ml-3 " style="font-size:18px;">
                                                <span class="text-dark">{{ $source }} </span>
                                                <i class="fe-arrow-right "></i>
                                                <span class="text-dark"> {{ $dest }} </span>
                                                <span class="text-dark ml-3">
                                                    <button type="button" class="btn btn-sm btn-light waves-effect waves-light" style="border:1px solid black" data-toggle="modal" data-target=".bs-example-modal-center">Modify</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <button class="btn btn-sm btn-light float-right" style="border:1px solid black">Add A Return Ticket</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <hr class="" style="border:0.5px solid #ddd;">
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                </div>

                    <!-- end Topbar -->

                    <!-- ========== Left Sidebar Start ========== -->
                    <div class="left-side-men" >

                        <div class="slimscroll-menu">

                            <div id="sidebar-menu">

                                <ul class="metismenu" id="side-menu">

                                    <li class="menu-title" style="font-size:13px;font-weight:500">Filters <span class="float-right text-danger">RESET</span></li>

                                    <li>
                                        <hr>
                                    </li>

                                    <li class="menu-title" style="font-size:13px;font-weight:600;color:#3e3e52">DEPARTURE TIME</li>

                                    {{-- DEPARTURE  TIME --}}
                                    <li>
                                        <div class="checkbox checkbox-danger checkbox-squre mb-2 ml-3 ">
                                            <input id="checkbox-1" type="checkbox">
                                            <label for="checkbox-1" class="text-xs">
                                                <i class="mdi mdi-weather-partlycloudy"></i>
                                                Before 6 am
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-danger mb-2 ml-3">
                                            <input id="checkbox2" type="checkbox">
                                            <label for="checkbox2" class="text-xs">
                                                <i class=" mdi mdi-weather-sunny"></i>
                                                6 am to 12 pm
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-danger mb-2 ml-3">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3" class="text-xs">
                                                <i class="mdi mdi-weather-sunset-down"></i>
                                                12 pm  to 6 pm
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-danger mb-2 ml-3">
                                            <input id="checkbox4" type="checkbox">
                                            <label for="checkbox4" class="text-xs">
                                                <i class="mdi mdi-weather-sunset-up"></i>
                                                6 am after
                                            </label>
                                        </div>
                                    </li>

                                    {{--  BUS TYPE  --}}

                                    <li class="menu-title" style="font-size:13px;font-weight:600;color:#3e3e52">BUS TYPE</li>

                                    <li>
                                        <div class="checkbox checkbox-danger checkbox-squre mb-2 ml-3 ">
                                            <input id="checkbox-5" type="checkbox">
                                            <label for="checkbox-5" class="text-xs">
                                                SEATER
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-danger mb-2 ml-3">
                                            <input id="checkbox6" type="checkbox">
                                            <label for="checkbox6" class="text-xs">
                                                SLEEPER
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-danger mb-2 ml-3">
                                            <input id="checkbox7" type="checkbox">
                                            <label for="checkbox7" class="text-xs">
                                                AC
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-danger mb-2 ml-3">
                                            <input id="checkbox8" type="checkbox">
                                            <label for="checkbox8" class="text-xs">
                                                NONAC
                                            </label>
                                        </div>
                                    </li>


                                    <li class="menu-title" style="font-size:13px;font-weight:600;color:#3e3e52">ARRIVAL TIME</li>

                                    {{-- ARRIVAL   TIME --}}
                                    <li>
                                        <div class="checkbox checkbox-danger checkbox-squre mb-2 ml-3 ">
                                            <input id="checkbox-9" type="checkbox">
                                            <label for="checkbox-9" class="text-xs">
                                                <i class="mdi mdi-weather-partlycloudy"></i>
                                                Before 6 am
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-danger mb-2 ml-3">
                                            <input id="checkbox-10" type="checkbox">
                                            <label for="checkbox-10" class="text-xs">
                                                <i class=" mdi mdi-weather-sunny"></i>
                                                6 am to 12 pm
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-danger mb-2 ml-3">
                                            <input id="checkbox-11" type="checkbox">
                                            <label for="checkbox-11" class="text-xs">
                                                <i class="mdi mdi-weather-sunset-down"></i>
                                                12 pm  to 6 pm
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-danger mb-2 ml-3">
                                            <input id="checkbox-12" type="checkbox">
                                            <label for="checkbox-12" class="text-xs">
                                                <i class="mdi mdi-weather-sunset-up"></i>
                                                6 am after
                                            </label>
                                        </div>
                                    </li>

                                    {{--  BOARDING POINT  --}}
                                    <li class="menu-title" style="font-size:13px;font-weight:600;color:#3e3e52">BOARDING POINT</li>

                                    <li>
                                        <div class="fil-search ml-3">
                                            <input class="pl-2" type="text" placeholder="BOARDING POINT">
                                        </div>
                                    </li>

                                    {{--  DROP POINT  --}}
                                    <li class="menu-title" style="font-size:13px;font-weight:600;color:#3e3e52">DROP POINT</li>

                                    <li>
                                        <div class="fil-search ml-3">
                                            <input class="pl-2" type="text" placeholder="DROP POINT">
                                        </div>
                                    </li>

                                    {{--  OPERATOR  --}}
                                    <li class="menu-title" style="font-size:13px;font-weight:600;color:#3e3e52">OPERATOR</li>

                                    <li>
                                        <div class="fil-search ml-3">
                                            <input class="pl-2" type="text" placeholder="OPERATOR">
                                        </div>
                                    </li>

                                    {{--  AMENITIES  --}}
                                    <li class="menu-title mt-2" style="font-size:13px;font-weight:600;color:#3e3e52">AMENITIES</li>
                                        <?php $r=12; ?>
                                    @foreach ($aminaties as $item)
                                        <li>
                                            <div class="checkbox checkbox-danger mb-2 ml-3">
                                                <input id="checkbox-{{  $r++ }}" type="checkbox">
                                                <label for="checkbox-{{  $r++ }}" class="text-xs">
                                                    <img src="{{ asset('/'.$item->image_path) }}" style="width:15px;height:15px;" class="ml-2"> &nbsp; {{ $item->description }}
                                                </label>
                                            </div>
                                        </li>
                                    @endforeach


                                </ul>

                            </div>

                        </div>
                        <!-- Sidebar -left -->

                    </div>
                    <!-- Left Sidebar End -->

                    <!-- ============================================================== -->
                    <!-- Start Page Content here -->
                    <!-- ============================================================== -->

                    <div class="content-page mt-0">
                        <div class="content">

                            <!-- Start Content-->
                            <div class="container-fluid">

                                <!-- start page title -->
                                <div class="row">
                                    <div class="col-12">
                                        <table  class=" table table-borderless ">
                                            <thead class="">
                                                <tr>
                                                    <th>{{ count($total_bus) }} Buses <span style="font-weight: 400;">Found</span>  <span class="float-right">Sort By:</span></th>

                                                    <th><span style="font-weight: 400;">Departure</span></th>
                                                    <th><span style="font-weight: 400;">Duration</span></th>
                                                    <th><span style="font-weight: 400;">Arrival</span></th>
                                                    <th><span style="font-weight: 400;">Ratings</span></th>
                                                    <th><span style="font-weight: 400;">Fare</span></th>
                                                    <th><span style="font-weight: 400;">Seats Available
                                                    </span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($total_bus as $item)
                                                <tr style="border:1px solid #ddd" class="mb-2">
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span style="font-size:16px;font-weight: 700;">{{ $item->bus_name }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                            <span style="font-size:12px;font-weight: 300;">{{$item->Bus_Type->type_name}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                @foreach($path[$item->id] as $icon)
                                                                <img  style="font-size:1px;margin-left:2px;height:20px;font-weight:100;" src="{{ $icon['image_path'] }}"/>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span style="font-size:19px;font-weight:400">{{ date("g:i A",strtotime($item->start_time)) }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-4">
                                                                <span style="font-size:12px;font-weight: 300;">{{ $item->starting_point }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span style="font-size:18px;font-weight:400">{{ date('G:i',strtotime($item->ending_time) -  strtotime($item->start_time)) }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span style="font-size:18px;font-weight:400">{{date("g:i A",strtotime($item->ending_time)) }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-4">
                                                                <span style="font-size:12px;font-weight: 300;">{{ $item->ending_point }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span class="badge badge-danger p-1" style="font-size:px;font-weight:300"><i class="fe-star mr-1"></i>4.2</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                            </div>
                                                        </div><div class="row mt-2">
                                                            <div class="col-12">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span style="font-size:18px;font-weight:400">INR {{ $item->total_fare }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">

                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="pb-0">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span style="font-size:18px;font-weight:400">30 Seats</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <span style="font-size:12px;font-weight: 300;">31 Seats available</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12 pr-0">
                                                                <span style="font-size:12px;font-weight: 300;" class="float-right mb-0 mr-0"><button class="mb-0 mr-0 btn btn-sm btn-danger">VIEW BUSES</button></span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr class="amenities mb-2" style="background-color:#f8f9fa;display:none" >
                                                    <td colspan="7" class="amenities_content">
                                                        <div class="row">
                                                            <div class="col-12 mt-1 mb-1 ml-3 data">
                                                            @foreach ($aminaties as $amt)
                                                                    <span style="font-size:14px;font-weight: 100;">  @if(($amt->id) == ($item->amenities_id)) {{ $amt->description }} @endif</span>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                {{-- <tr style="background-color:#f8f9fa;">
                                                    <td colspan="7">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <canvas data-type="lower" width="489" height="211" class=""></canvas>
                                                            </div>
                                                            <div class="col-6">
                                                                fgfd
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr> --}}
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- content -->


                    </div>

                    <!-- ============================================================== -->
                    <!-- End Page content -->
                    <!-- ============================================================== -->


                </div>
                <!-- END wrapper -->
                @endif
                {{--  model  --}}

            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h4 class="modal-title text-white" id="myCenterModalLabel">Search Bus</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-5">
                                        <input type="text" class="form-control m-0" name="source_place" id="source_place" placeholder="Broad Point">
                                </div>

                                <div class="col-2 text-center">
                                    <img src="{{ asset('web/images/redbus/icon/van.png') }}" class="return_bus"   width="40px" height="40px">
                                </div>
                                <div class="col-5 ">
                                        <input type="text" class="form-control" name="destination_place" id="destination_place" placeholder="Drop Point">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <input type="date" class="form-control" name="" id="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-sm btn-danger waves-effect waves-light">Search Bus</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

@endsection

@section('other-page-js')

            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>
            <script src="{{ asset('web/js/vendor.min.js')}}"></script>

            <script src="{{ asset('web/js/pages/animation.init.js')}}"></script>
            <script src="{{ asset('web/libs/moment/moment.min.js') }}"></script>
            <!-- Plugins js-->
            <script src="{{ asset('web/libs/flatpickr/flatpickr.min.js') }}"></script>
            <script src="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
            <script src="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script>
            <script src=" {{ asset('web/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
            <script src="{{ asset('web/libs/daterangepicker/daterangepicker.js') }}"></script>
            <!-- Init js-->
            <script src="{{ asset('web/js/pages/form-pickers.init.js') }}"></script>

            <script src="{{asset('admin/libs/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('admin/libs/datatables/dataTables.bootstrap4.js')}}"></script>
            <!-- Datatables init -->
            <script src="{{ asset('admin/js/pages/datatables.init.js')}}"></script>



            <!-- App js -->
            <script src="{{ asset('web/js/app.min.js')}}"></script>
            <script>
                $(window).on('load',function() {
                $('#loading').fadeOut();
                $('.slimScrollBar').css({'width':'0px'});
            });
            </script>

            <script>

                $('.return_bus').click(function(){
                    var source =$("#source_place").val();
                    var destination =$("#destination_place").val();
                    $("#destination_place").val(source);
                    $("#source_place").val(destination);
                });

            </script>
        {{--  //amenities  --}}
        <script>
            $('.amenitie').click(function(){
                    $('.amenities').fadeToggle('fast');
            });
        </script>

        <script>
                $('.bus-image').click(function(){
                    $('.amenities').fadeToggle('fast');
                    var id=$(this).attr('id');
                    $.ajax({
                        url:'{{route('bus-image')}}',
                        data:{id : id},
                        type:'get',
                        success:function(response)
                        {
                            $('.data').html(response);
                        }
                    });
                });
        </script>
@endsection

@section('after-js')


    <script type="text/javascript">

        var path = "{{ route('source') }}";
            $(document).ready(function() {
                $('.source_place').autocomplete({

                    source: function(request, response) {
                        $.ajax({
                        url: path,
                        data: {
                                term : request.term
                        },
                        dataType: "json",
                        success: function(data){
                        var resp = $.map(data,function(obj){
                                // console.log(obj.city_name);
                                return obj.city_name;
                        });

                        response(resp);
                        }
                    });
                },
                minLength: 1
                });
            });


        var path = "{{ route('dest') }}";
            $(document).ready(function() {
                $('.destination_place').autocomplete({

                    source: function(request, response) {
                        $.ajax({
                        url: path,
                        data: {
                                term : request.term
                        },
                        dataType: "json",
                        success: function(data){
                        var resp = $.map(data,function(obj){
                                //console.log(obj.board_point);
                                return obj.city_name;
                        });

                        response(resp);
                        }
                    });
                },
                minLength: 1
                });
            });

    </script>


<script>

$('.source_place').on('focusin',
   function(){
    $(this).siblings('label.db').addClass('move-up');
   }).on('focusout', function(){
    $(this).siblings('label.db').removeClass('move-up');
  });

  $('.destination_place').on('focusin',
   function(){
    $(this).siblings('label.db').addClass('move-up');
   }).on('focusout', function(){
    $(this).siblings('label.db').removeClass('move-up');
  });


// $('label.db').removeClass('move-up');
</script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


@endsection
