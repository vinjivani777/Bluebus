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
                                                <input type="hidden" name="route_id" class="route_id" id="route_id" value="{{ $route }}">
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
                <div class="left-side-men mt-5" >

                    <div class="slimscroll-menu">

                        <div id="sidebar-menu">

                            <ul class="metismenu" id="side-menu">

                                <li class="menu-title" style="font-size:13px;font-weight:500">Filters <button type="button" class=" btn btn-danger btn-sm float-right text-light reset">RESET</button></li>
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

                                @php $r=5; @endphp
                                @foreach($BusTypes as $BusType)
                                    @php $r++ @endphp
                                    <li>
                                        <div class="checkbox checkbox-danger checkbox-squre mb-2 ml-3 ">
                                            <input id="checkbox-{{ $r }}" type="checkbox" class="common_selector bus_type_filter" value="{{ $BusType->id }}">
                                            <label for="checkbox-{{ $r }}" class="text-xs ">
                                                {{ strtoupper($BusType->type_name) }}
                                            </label>
                                        </div>
                                    </li>
                                @endforeach

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
                                        <input class="pl-2 oprators" id="oprators" data-toggle="modal" data-target=".myModal" name="oprators" type="text" placeholder="OPERATOR">
                                    </div>
                                </li>

                                {{--  AMENITIES  --}}
                                <li class="menu-title mt-2" style="font-size:13px;font-weight:600;color:#3e3e52">AMENITIES</li>
                                    @php $r=13; @endphp
                                    @foreach ($aminaties as $item)
                                        @php $r++ @endphp
                                            <li>
                                                <div class="checkbox checkbox-danger mb-2 ml-3">
                                                    <input id="checkbox-{{  $r }}" type="checkbox" class="common_selector aminaties" value="{{ $item->id }}">
                                                    <label for="checkbox-{{  $r }}" class="text-xs">
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
                                <div class="col-12 filter_data" id="filter-data">
                                    <table  class=" table datatable" style="border-collapse:separate; border-spacing: 0 1em;">
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
                                        <tbody >
                                                @php $r=0; @endphp
                                            @foreach ($total_bus as $item)

                                                @php $r++ @endphp

                                            <tr  class="bg-white bus-list-tr" id="row_{{ $r }}">
                                                <td >
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <input type="hidden" name="bus_id" class="bus_id" id="bus_id_{{ $r }}" value="{{ $item->id }}">
                                                            <input type="hidden" name="total_select_seat" class="total_select_seat" id="total_select_seat_{{ $r }}" >
                                                            <input type="hidden" name="total_fare_amt" class="total_fare_amt" id="total_fare_amt_{{ $r }}" >
                                                            <input type="hidden" name="selected_broadpoint" class="selected_broadpoint" id="selected_broadpoint_{{ $r }}" >
                                                            <input type="hidden" name="selected_droppoint" class="selected_droppoint" id="selected_droppoint_{{ $r }}" >

                                                            <span style="font-size:16px;font-weight: 700;" class="busName_{{ $r }}" id="busName_{{ $r }}">{{ $item->bus_name }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12">
                                                            <span style="font-size:12px;font-weight: 300;" class="busType_{{ $r }}" id="busType_{{ $r }}">{{$item->Bus_Type->type_name}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-12">
                                                            @foreach($path[$item->id] as $icon)
                                                                <img  style="font-size:1px;margin-left:10px;height:18px;font-weight:100;" class="amanitis_{{ $r }}"   src="{{ $icon['image_path'] }}"  title="{{ $icon->description  }} !" data-plugin="tippy" data-tippy-theme="success" data-tippy-arrow="true"/>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span style="font-size:19px;font-weight:400" class="startTime_{{ $r }}" id="startTime_{{ $r }}">{{ date("g:i A",strtotime($item->start_time)) }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-4">
                                                            <span style="font-size:12px;font-weight: 300;" class="startingPoint_{{ $r }}" id="startingPoint_{{ $r }}">{{ $item->starting_point }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span style="font-size:18px;font-weight:400" class="duration_{{ $r }}" id="duration_{{ $r }}">{{ date('G:i',strtotime($item->ending_time) -  strtotime($item->start_time)) }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-12">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span style="font-size:18px;font-weight:400" class="endingTime_{{ $r }}" id="endingTime_{{ $r }}">{{date("g:i A",strtotime($item->ending_time)) }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-4">
                                                            <span style="font-size:12px;font-weight: 300;" class="endingPoint_{{ $r }}" id="endingPoint_{{ $r }}">{{ $item->ending_point }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="mb-0 pb-0 ">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span class="badge badge-danger p-1" style="font-size:px;font-weight:300"  class="reating_{{ $r }}" id="reating_{{ $r }}"><i class="fe-star mr-1"></i>4.2</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12">
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top: 4.2rem;">
                                                        <div class="col-12 ">
                                                            <a class="text-danger collapsed " id="collapsedAllAminitis_{{ $r }}" data-toggle="collapse" href="#collapseExample{{ $r }}" aria-expanded="true" aria-controls="collapseExample" style="font-size:16px;font-style:oblique;">All Aminaties</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="pb-0">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span style="font-size:18px;font-weight:400"  class="totalFare_{{ $r }}" id="totalFar_{{ $r }}">INR {{ $item->total_fare }}</span>
                                                            <input type="hidden" name="totalFare" class="totalFare_{{ $r }}" id="totalFare_{{ $r }}" value="{{ $item->total_fare }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12">
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top: 4rem;">
                                                        <div class="col-12 ">
                                                        <a href="#" class="text-danger" style="font-size:16px;font-style:oblique">Bus Images </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="pb-0" colspan="7">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span style="font-size:18px;font-weight:400" class="totalSeats_{{ $r }}" id="totalSeats_{{ $r }}">30 Seats</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12">
                                                            <span style="font-size:12px;font-weight: 300;" class="avlSeats_{{ $r }}" id="avlSeats_{{ $r }}">31 Seats available</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4" colspan="7">
                                                        <div class="col-12 pr-0">
                                                            <span style="font-size:12px;font-weight: 300;" class="float-right mb-0 mr-0">
                                                                <button class="mb-0 mr-0 btn btn-sm btn-danger viewSeats"  style="border:0px;border-radius:0px;max-width:110px;" id="viewSeats_{{ $r }}" data-style="contract">
                                                                    <span class="ladda-label">VIEW SEATS</span>
                                                                    <span class="ladda-spinner"></span>
                                                                </button>
                                                                <button class="mb-0 mr-0 btn btn-sm btn-success hideView"  style="display:none;border:0px;border-radius:0px;max-width:110px;width:110px" id="hideView_{{ $r }}" data-style="contract" style="display:none;">
                                                                    <span class="ladda-label">HIDE</span>
                                                                    <span class="ladda-spinner"></span>
                                                            </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="collapse amenities mb-2" id="collapseExample{{ $r }}" style="background-color:#f8f9fa;z-index:1000;width:100%;position:absolute" >
                                                <td colspan="7" class="amenities_content">
                                                    <div class="row">
                                                        <div class="col-12 mt-1 mb-1 ml-3 data">
                                                            @php echo $aminiti[]=$item->amenities_id; @endphp
                                                            @foreach ($aminaties as $amt)
                                                                @if(($amt->id) == ($item->amenities_id))
                                                                    <img  style="font-size:1px;margin-left:10px;height:20px;font-weight:300;" class="amanitis_{{ $r }}"   src="{{ $amt->image_path }}"  />
                                                                    <span style="font-size:16px;font-weight: 400;" >   {{ $amt->description }} </span>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr id="SeatsLayout_{{ $r }}" class="SeatsLayout" style="background-color:#f8f9fa;">

                                            </tr>
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

        {{--  model  --}}



</div>
