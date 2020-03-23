@extends('vendor.layout')


@section('page-title')

@endsection


@section('other-page-css')
    <link href="{{ asset('admin/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

    {{-- sweetalert --}}
    <link href="{{asset('admin/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
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
                                <li class="breadcrumb-item active">Bus Mag.</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Bus List</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('vendor.bus-detail.add') }}" class="btn btn-primary mb-2" ><i class="fas fa-plus mr-1"></i> Add New Bus</a>

                            <table id="basic-datatable" class="table dt-responsive table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="hidden">#</th>
                                        <th>Bus Name</th>
                                        <th>Bus RegiNumber</th>
                                        <th>Bus Type</th>
                                        {{-- <th>Maximum Seats</th> --}}
                                        <th>Board Point</th>
                                        <th>Board Time</th>
                                        <th>Drop Point</th>
                                        <th>Drop Time</th>
                                        <th>Journey Duration</th>
                                        <th>Status</th>
                                        <th style="width: 70px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1;?>
                                    @foreach ($bus_list as $bus)
                                    <tr>
                                        <td>{{ $no++}} </td>
                                        <td>{{$bus->bus_name}}</td>
                                        <td>{{$bus->bus_reg_no}}</td>
                                        <td>{{$bus->Bus_Type->type_name}}</td>
                                        {{-- <td>{{$bus->max_seats}}</td> --}}
                                        <td>{{$bus->starting_point}}</td>
                                        <td>{{date("g:i A",strtotime($bus->start_time))}}</td>
                                        <td>{{$bus->ending_point}}</td>
                                        <td>{{date("g:i A",strtotime($bus->ending_time))}}</td>
                                        <td>{{ date('G:i', strtotime($bus->ending_time) - strtotime($bus->start_time)) }}</td>
                                        <td>
                                            <button class="btn status-change {{$bus->status == 1?"btn-outline-primary":"btn-outline-danger"}} btn-rounded waves-effect waves-light btn-sm" value="{{$bus->status==1?"Active":"Disable"}}" id="{{$bus->id}}">{{$bus->status==1?"Active":"Disable"}}</button>
                                        </td>
                                        <td>
                                            <a  class="mr-1 text-info" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="far fa-eye"></i></a>
                                            <a href="{{ route('vendor.bus-detail.edit',['id'=>$bus->id]) }}" class="mr-1 text-primary"><i class=" far fa-edit"></i></a>
                                            <a class="mr-1 text-danger remove_bus" id="{{$bus->id}}"><i class=" fas fa-trash-alt"></i></a>
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
                    <h4 class="modal-title" id="myLargeModalLabel">Bus Details view</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-primary" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-12 ">
                                            <h4 class="card-title mt-0 mb-0">Bus Details</h4>
                                        </div>
                                        <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Bus Name</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Bus Reg Number</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Maximum Seats</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Board Point</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Drop Point</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Board Time</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Drop Time</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Bus Type</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Status</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>created_by</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Amenities</h5>
                                            <span>bus name</span>
                                        </div>
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

@section('other-page-js')

    <script src="{{asset('admin/libs/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/libs/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Datatables init -->
    <script src="{{ asset('admin/js/pages/datatables.init.js')}}"></script>
    <script src="{{asset('admin/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <script>
        // delete the bus //
        $('.remove_bus').click(function(){
            var c_id= $(this).attr('id');
            swal({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonClass: "btn btn-confirm mt-2",
                cancelButtonClass: "btn btn-cancel ml-2 mt-2",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.value) {
                        $.ajax({
                            url:'{{route('vendor.bus-detail.destroy')}}',
                            data:{
                                id : c_id
                            },
                            type:'get',
                            success:function(response)
                            {
                                if (response=="success") {
                                swal({
                                    title: "Deleted !",
                                    text: "Successfull deleted bus",
                                    type: "success",
                                    timer: 500,
                                    showConfirmButton: false
                                })
                                $("#"+c_id).closest("tr").fadeOut(1000);
                                } else {
                                    new PNotify({
                                        title: 'Warning Notification',
                                        text: 'Contact Support Team',
                                        icon: 'icofont icofont-info-circle',
                                        type: 'Warning'
                                    });
                                }
                            }
                        });
                    } else {
                        swal("Ohhhhh........No!");
                    }
                });
        });

        // Status Change the bus //
        $('.status-change').click(function(){
            var status= $(this).val()=="Active"?0:1;
            var id=$(this).prop('id');
            swal({
                    title: "Are you sure?",
                    text: "Update the status on bus.",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonClass: "btn btn-confirm mt-2",
                    cancelButtonClass: "btn btn-cancel ml-2 mt-2",
                    confirmButtonText: "Yes, Update it!"
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                        type:'POST',
                        url:'{{route('vendor.status.change')}}',
                        data:{'status':status,'id':id,'model':'Bus',"_token": "{{ csrf_token() }}"},
                        success:function(response){
                            if (response=="success" && status==true) {
                                $('#'+id).addClass("btn-outline-primary ");
                                $('#'+id).removeClass("btn-outline-danger  ");
                                $('#'+id).val('Active');
                                $('#'+id).text('Active');
                            } else {
                                $('#'+id).removeClass("btn-outline-primary ");
                                $('#'+id).addClass("btn-outline-danger  ");
                                $('#'+id).val('Disable');
                                $('#'+id).text('Disable');
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
