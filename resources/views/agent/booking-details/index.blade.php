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
                                <li class="breadcrumb-item active">Booking Details</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Booking List</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="basic-datatable" class="table  table-striped">
                                <thead>
                                    <tr>
                                        <th>Booking Id</th>
                                        <th>Bus Name</th>
                                        <th>Pickup Point</th>
                                        <th>Drop Point</th>
                                        <th>Booking Date</th>
                                        <th>Payment Status</th>
                                        <th>Amount</th>
                                        <th>Board Time</th>
                                        <th>Drop Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Booking as $item)
                                    <tr>
                                        <td>{{ $item->booking_id }}</td>
                                        <td>{{ $item->bus->bus_name }}</td>
                                        <td>{{ $item->bus->board_point }}</td>
                                        <td>{{ $item->bus->drop_point }}</td>
                                        <td>{{ $item->booking_date }}</td>
                                        <td>{{ $item->payment_status }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>{{ $item->bus->board_time }}</td>
                                        <td>{{ $item->bus->drop_time }}</td>
                                        <td>
                                            <a  class="mr-1 text-info booking_details" id="{{ $item->booking_id }}" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="far fa-eye"></i></a>
                                        </td>

                                    </tr>

                                    @endforeach
                                  </tbody>
                               
                            </table>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div>
    <!-- End Content-->

    {{-- view model --}}
    <!--  Modal content for the above example -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Booking Details view</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-primary" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive text-center"  >
                                        <table id="" class="table table-bordered toggle-circle table-striped  mb-0" data-page-size="5">
                                            <thead>
                                                <tr>
                                                    <th>Customer Name</th>
                                                    <th>Age</th>
                                                    <th>Gender</th>
                                                    <th>Seat Number</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


@endsection


@section('other-page-css')

<link href="{{ asset('admin/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

{{-- sweetalert --}}
<link href="{{asset('admin/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('other-page-js')

<script src="{{asset('admin/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/libs/datatables/dataTables.bootstrap4.js')}}"></script>
<!-- Datatables init -->
<script src="{{ asset('admin/js/pages/datatables.init.js')}}"></script>
<script src="{{asset('admin/libs/sweetalert2/sweetalert2.min.js')}}"></script>

<script>
    $('.booking_details').click(function(){
        var id= $(this).attr('id');
                $.ajax({
                    url:'{{route('booking-detail.show')}}',
                    data:{
                        id : id
                    },
                    type:'get',
                    success:function(responce)
                    {
                        $('#tbody').html(responce);
                    }
                });

            });
</script>
@endsection
