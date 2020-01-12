<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Blue Bus Travels  | Booking Volvo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured web theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('web/images/favicon.ico')}}">


        <!-- extra css  -->
        @yield('other-page-css')

        <!-- Plugins css -->
        <link href="{{ asset('web/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href=" {{ asset('web/libs/animate/animate.min.css') }} " rel="stylesheet" type="text/css" />

        <link href="{{ asset('admin/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('web/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

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

        </style>

    </head>

    <body>
        <div id="loading">
            <img id="loading-image" src="{{ asset('vendor/images/bus-image/1_uQi2P.gif') }}" alt="Loading..." />
          </div>
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
                                        <span class="text-dark">Surat </span>
                                        <i class="fe-arrow-right "></i>
                                        <span class="text-dark"> Rajkot </span>
                                        <span class="text-dark ml-3"><button class="btn btn-sm btn-light" style="border:1px solid black">Modify</button></span>
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

                              <li>
                                  <a href="">
                                        <i class="fe-user"></i>Aminitis
                                  </a>
                              </li>

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
                                            <th>1 Buses <span style="font-weight: 400;">Found</span>  <span class="float-right">Sort By:</span></th>

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
                                        <tr style="border:1px solid #ddd">
                                            <td>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <span style="font-size:16px;font-weight: 700;">Orange tours and travels</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-12">
                                                        <span style="font-size:12px;font-weight: 300;">NON A/C Sleeper (2+1)</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-12">
                                                        <span class="amenitie" style="font-size:17px;font-weight: 300;"><i class="fe-tv"></i></span>
                                                        <span class="amenitie"  style="font-size:17px;font-weight: 300;"><i class="fe-droplet ml-1"></i></span>
                                                        <span class="bus-image" id="1"  style="font-size:17px;font-weight: 300;"><i class="fe-image ml-1"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <span style="font-size:19px;font-weight:700">06:35</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-12">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-4">
                                                        <span style="font-size:12px;font-weight: 300;">Hirabaug Varachha</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <span style="font-size:18px;font-weight:400">03h 40m</span>
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
                                                        <span style="font-size:18px;font-weight:400">10:15</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-12">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-4">
                                                        <span style="font-size:12px;font-weight: 300;">Rajkot Bypass</span>
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
                                                        <span style="font-size:18px;font-weight:400">INR 500</span>
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
                                        <tr class="amenities" style="background-color:#f8f9fa;display:none">
                                            <td colspan="7">
                                                <div class="row">
                                                    <div class="col-12 mt-4 mb-3 ml-3 data">
                                                        <span style="font-size:17px;font-weight: 300;"><i class="fe-tv"></i> Personal TV</span>
                                                        <span style="font-size:17px;font-weight: 300;" class=" ml-5 mt-2"><i class="fe-droplet "></i> Water Bottal</span>
                                                        <span style="font-size:17px;font-weight: 300;" class=" ml-5 mt-2"><i class="fe-droplet "></i> Water Bottal</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <script src="{{ asset('web/js/vendor.min.js')}}"></script>

        <script src="{{ asset('web/js/pages/animation.init.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('web/libs/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script>

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
                    success:function(responce)
                    {
                        $('.data').html(responce);
                    }
                });
            });
       </script>

    </body>

</html>
