<div class="row">
    <div class="col-12 pt-2 pb-2" >
        <div class="container bus-list-table">
            <div class="row" >
                <div class="col-8" >
                    <a href="#" class="text-dark" style="font-size:19px;font-weight:800"><i class="fe-arrow-left"></i></a>
                    <span class="text-dark" style="font-size:19px;font-weight:600"> {{ $source }} </span>
                    To
                    <span class="text-dark" style="font-size:19px;font-weight:600"> {{ $dest }} </span>
                </div>
                <div class="col-2 p-1" >
                    <a href="" class="float-right text-dark ">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </div>
                <div class="col-1 p-1   " >
                    <a href="" class="float-right text-dark">
                        <i class="fas fa-filter"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-0 m-0">
                    <hr style="border-bottom:0.2px solid #d0d0d0" class="m-0 p-0">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 mx-auto text-center">
                    <i class="fe-chevron-left"  class="text-dark" style="font-size:19px;font-weight:800"></i>
                        <span class="text-dark text-center mt-0 pt-0" style="font-size:14px;font-weight:500">28-07-2000</span>
                    <i class="fe-chevron-right"  class="text-dark" style="font-size:19px;font-weight:800"></i>
                </div>
            </div>
        </div>
        <div class="container bus-list-table">
            <div class="row">
                <div class="col-12" style="overflow:hidden;">
                    <div class="table-responsive bus-list-table" id="table">
                        <table class="table mb-0 " >
                            <thead class="thead-light text-center">
                            <tr>
                                <th>DEPARTURE</th>
                                <th>DURATION</th>
                                <th>PRICE</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @php $r=0; @endphp
                                @foreach ($total_bus as $item)

                                    @php $r++ @endphp
                                    <tr class="viewSeats" id="viewSeats_{{ $r }}">
                                        <td class="busInfo" colspan="2" style="border-right:1px solid #eaebed;padding: 0 10px 0 0;float-left">
                                            <input type="hidden" name="bus_id" class="bus_id" id="bus_id_{{ $r }}" value="{{ $item->id }}">
                                            <input type="hidden" name="total_select_seat" class="total_select_seat" id="total_select_seat_{{ $r }}" >
                                            <input type="hidden" name="total_fare_amt" class="total_fare_amt" id="total_fare_amt_{{ $r }}" >
                                            <input type="hidden" name="selected_broadpoint" class="selected_broadpoint" id="selected_broadpoint_{{ $r }}" >
                                            <input type="hidden" name="selected_droppoint" class="selected_droppoint" id="selected_droppoint_{{ $r }}" >


                                            <div class="busName ellipsis ">
                                                <i class="bus_icn"></i>
                                                <span style="font-size:16px;font-weight: 700;" class="busName_{{ $r }}" id="busName_{{ $r }}">{{ $item->bus_name }}</span>
                                            </div>
                                            <div class="busType ellipsis ng-binding busType_{{ $r }}" id="busType_{{ $r }}">{{$item->Bus_Type->type_name}}</div>
                                            <div class="bus_ad">
                                                <div class="d_timing ng-binding startTime_{{ $r }}"  id="startTime_{{ $r }}">{{ date("g:i A",strtotime($item->start_time)) }}</div>
                                                <div class="uiDestPoints"><p class="ttl_hrs ng-binding duration_{{ $r }}" id="duration_{{ $r }}">{{ date('g:i',strtotime($item->ending_time) -  strtotime($item->start_time)) }}</p></div>
                                                <div class="a_timing ng-binding endingPoint_{{ $r }}" id="endingPoint_{{ $r }}">{{ date("g:i A",strtotime($item->start_time)) }}</div>
                                            </div>
                                        </td>
                                        <td class="" colspan="2">
                                            <span class="ti_prc">
                                                <i class="rs_nicn"></i>
                                                <span class="ttl_b_amt ng-binding totalFar_{{ $r }}"  id="totalFar_{{ $r }}">₹ {{ $item->total_fare }}</span>
                                                <input type="hidden" name="totalFare" class="totalFare_{{ $r }}" id="totalFare_{{ $r }}" value="{{ $item->total_fare }}">
                                            </span>
                                            <span class="s_avil ng-binding">36 Seat(s) Left</span>
                                            <div ng-if="list.mTicketEnabled!=''&amp;&amp;list.mTicketEnabled!=null&amp;&amp;list.mTicketEnabled!='false'" class="ng-scope">
                                                <div class="m_ticket">
                                                    <div class="rip">M-Ticket</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 " id="SeatsLayout">

                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid bg-dark view-seat-layout" style="display:none;position: sticky;bottom:0;">
    <form action="{{ route('select.broadpoint.droppoint') }}" method="POST" >
        @csrf
        <div class="row">
            <div class="col-12 p-2">
                <div class="float-left text-white  " style="font-size: 14px;font-weight:600">
                    <input type="hidden" name="seatNo" id="seatNo" class="seatNo">
                    <input type="hidden" name="totalFare" id="totalFare" class="totalFare">
                    <input type="hidden" name="busid" id="busid" class="busid">

                    <div class="select_seat_no" style="font-size: 11px;">

                    </div>
                    <div class="Total_fare" style="font-size: 14px;font-weight:600">
                        Rs . 0
                    </div>
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-lg pl-3 pr-3 " style="width:100%;background:#ef6614" >Continue</button>
                </div>
            </div>
        </div>
    </form>
</div>
