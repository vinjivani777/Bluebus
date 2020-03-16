@extends('vendor.layout')

@section('page-title')

@endsection

@section('content')

    <div class="content">

        <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Bluebus</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                {{-- Bus, Trip, Ticket Statistics --}}
                <div class="row">
                    <div class="col-12">
                        <h4 class="page-title mb-3 mt-2 ">
                            <i class="fe-users ml-1 mr-2"></i>
                            Bus, Trip, Ticket Statistics
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                        <i class="fe-truck font-22 avatar-title text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $total_bus }}</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Total Bus</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-4">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                        <i class="fe-chevrons-up font-22 avatar-title text-success"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $total_bus }}</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Total Route</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-4">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                        <i class="fe-clipboard font-22 avatar-title text-info"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$total_bookings}}</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Total Book Ticket</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    {{-- <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                        <i class="fe-eye font-22 avatar-title text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">78,412</span></h3>
                                        <p class="text-muted mb-1 text-truncate">New Inquiry</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col--> --}}
                </div>

                {{-- agent statistics --}}
                {{-- <div class="row">
                    <div class="col-12">
                        <h4 class="page-title mb-3 mt-2 ">
                            <i class="fas fa-users-cog ml-1 mr-2"></i>
                            Agents Statistics
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                        <i class="fe-users font-22 avatar-title text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">58,947</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Total Agent</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                        <i class="  fe-truck font-22 avatar-title text-success"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">127</span></h3>
                                        <p class="text-muted mb-1 text-truncate"> Total Bus</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                        <i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">50</span></h3>
                                        <p class="text-muted mb-1 text-truncate"> Total Route</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                        <i class="fe-user-x font-22 avatar-title text-danger"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">78,412</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Ban Agent</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->
                </div> --}}

                {{-- user statistics
                <div class="row">
                    <div class="col-12">
                        <h4 class="page-title mb-3 mt-2 ">
                            <i class="fe-users ml-1 mr-2"></i>
                            Users Statistics
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                        <i class="fe-user font-22 avatar-title text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">58,947</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Total User</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                        <i class="fe-send font-22 avatar-title text-success"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">127</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Email Varified</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                        <i class="fe-phone font-22 avatar-title text-info"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">50</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Phone Varified</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                        <i class="fe-user-x font-22 avatar-title text-danger"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">78,412</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Ban User</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->
                </div> --}}
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false" aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                                    <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                </div>
                                <h4 class="header-title mb-0">My Buses</h4>

                                <div id="cardCollpase5" class="collapse pt-3 show">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>RegNo</th>
                                                    <th>BusName</th>
                                                    <th>Route</th>
                                                    <th>Type</th>
                                                    {{-- <th>Fare</th> --}}
                                                    {{-- <th>Amount</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($buses as $bus)
                                                    <tr>
                                                        <td>{{$bus->bus_reg_no}}</td>
                                                        <td>{{$bus->bus_name}}</td>
                                                        <td>{{$bus->starting_point.'-'.$bus->ending_point}}</td>
                                                        <td>{{$bus->Bus_Type->type_name}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div> <!-- end table responsive-->
                                </div> <!-- collapsed end -->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div>

                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false" aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                                    <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                </div>
                                <h4 class="header-title mb-0">Today's Bookings</h4>

                                <div id="cardCollpase5" class="collapse pt-3 show">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>TicketNo</th>
                                                    <th>BusName</th>
                                                    <th>SeatNo</th>
                                                    <th>Fare</th>
                                                    {{-- <th>Amount</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($bookings as $booking)
                                                    <tr>
                                                        <td>{{$booking->ticket_no}}</td>
                                                        <td>{{$booking->bus->bus_name.'|'.$booking->bus->bus_reg_no}}</td>
                                                        <td>{{$booking->seat_no}}</td>
                                                        <td>{{$booking->total_fare}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div> <!-- end table responsive-->
                                </div> <!-- collapsed end -->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false" aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                                    <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                </div>
                                <h4 class="header-title mb-0">Today's Bookings</h4>

                                <div id="cardCollpase5" class="collapse pt-3 show">
                                    <div class="table-responsive">
                                        <table class="table demo-foo-addrow table-hover table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>PromoCode</th>
                                                    {{-- <th>Image</th> --}}
                                                    {{-- <th>Usage(Total)</th> --}}
                                                    <th>Min.TicketAmt</th>
                                                    <th>PromoType</th>
                                                    <th>Amount</th>
                                                    <th>ExpiryDate</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no=1;?>
                                                @foreach ($promos as $promo)
                                                    <tr>
                                                        <td>{{$no++}}</td>
                                                        <td>{{$promo->promocode}}</td>
                                                        {{-- <td> <img src="{{ asset('/'. $promo->promocode_image)}}" class="rounded-circle avatar-md img-thumbnail" alt="Promocode_image"> </td> --}}
                                                        <td>{{$promo->min_order_amount}}</td>
                                                        <td>{{$promo->discount_type}}</td>
                                                        @if(($promo->discount_type) == "Flat")
                                                            <td>{{'₹'.$promo->max_amount}}</td>
                                                        @else
                                                            <td>{{$promo->amount.'%(upto₹'.$promo->max_amount.')'}}</td>
                                                        @endif
                                                        <td>{{date('d-m-Y', strtotime($promo->expiry_date))}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr class="active">
                                                    <td colspan="9">
                                                        <div class="text-right">
                                                            <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div> <!-- end table responsive-->
                                </div> <!-- collapsed end -->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div>
                </div>
            </div>
        <!-- container -->

    </div> <!-- content -->

@endsection


@section('other-page-css')
<link href="{{asset('admin/libs/bootstrap-table/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />
 <!-- Footable css -->
 <link href="{{asset('assets/libs/footable/footable.core.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('other-page-js')
<!-- Bootstrap Tables js -->
<script src="{{asset('admin/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>

<script src="{{asset('assets/libs/footable/footable.all.min.js')}}"></script>
<script src="{{asset('assets/js/pages/foo-tables.init.js')}}"></script>

<!-- Init js -->
<script src="{{asset('admin/js/pages/bootstrap-tables.init.js')}}"></script>
@endsection
