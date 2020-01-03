@extends('admin.layout')


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
                                <li class="breadcrumb-item active">Other Admin Mag.</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Other Admin List</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('otheradmin-detail.add') }}" class="btn btn-primary mb-2" ><i class="fas fa-plus mr-1"></i> Add New Other Admin</a>
                                <table id="basic-datatable" class="table table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 20px;">#</th>
                                            <th>User Name</th>
                                            <th>Image</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th style="width: 70px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($otheradmin as $otheradmin)
                                            <tr>
                                                <td>{{$otheradmin->id}}</td>
                                                <td><img src="{{$otheradmin->profile_picture}}" name="profile_image" style="height:50px;width:50px;border-radius:50px "></td>
                                                <td>{{$otheradmin->username}}</td>
                                                <td>{{$otheradmin->email}}</td>
                                                <td>{{$otheradmin->mobile_no}}</td>
                                                <td>{{$otheradmin->user_type}}</td>
                                                <td>
                                                    <button class="btn status-change {{$otheradmin->status == 1?"btn-outline-primary":"btn-outline-danger"}} btn-rounded waves-effect waves-light btn-sm" value="{{$otheradmin->status==1?"Active":"Disable"}}" id="{{$otheradmin->id}}">{{$otheradmin->status==1?"Active":"Disable"}}</button>
                                                </td>
                                                <td>
                                                    <a class="mr-1 text-info" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="far fa-eye"></i></a>
                                                    <a href="{{ route('otheradmin-detail.edit',['id'=>$otheradmin->id ]) }}" class="mr-1 text-primary"><i class=" far fa-edit"></i></a>
                                                    <a name="{{$otheradmin->profile_picture}}" class="mr-1 text-danger remove_otheradmin" id="{{$otheradmin->id}}"  ><i  class=" fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!-- end card-body-->
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
                    <h4 class="modal-title" id="myLargeModalLabel">Other Admin Details view</h4>
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
                                            <h4 class="card-title mt-0 mb-0">Other Admin Details</h4>
                                        </div>
                                        <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>User Name</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Email</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Phone Number</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Admin Type</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Status</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Image</h5>
                                            <img src="#" width="100px" height="100px">
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

<script src="{{asset('admin/libs/sweetalert2/sweetalert2.min.js')}}"></script>

<script src="{{ asset('admin/libs/datatables/jquery.dataTable')}}s.js"></script>
<script src="{{ asset('admin/libs/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset('admin/libs/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('admin/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin/libs/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{ asset('admin/libs/datatables/dataTables.select.min.js')}}"></script>

<!-- Datatables init -->
<script src="{{ asset('admin/js/pages/datatables.init.js')}}"></script>


<script  type="text/javascript">
    $('.remove_otheradmin').click(function(){
        var c_id= $(this).attr('id');
        var profileimage= $(this).attr('name');
        // alert($(this).attr('name'));
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
                        url:'{{route('otheradmin-detail.destroy')}}',
                        data:{
                            id : c_id,
                            profilepicture : profileimage
                        },
                        type:'get',
                        success:function(responce)
                        {
                            // alert(responce);
                            if (responce=="success") {
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

    // Status Change the otheradmin //
    $('.status-change').click(function(){
        var status= $(this).val()=="Active"?0:1;
        var id=$(this).prop('id');
        swal({
                title: "Are you sure?",
                text: "Update the status on otheradmin.",
                type: "warning",
                showCancelButton: !0,
                confirmButtonClass: "btn btn-confirm mt-2",
                cancelButtonClass: "btn btn-cancel ml-2 mt-2",
                confirmButtonText: "Yes, Update it!"
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                    type:'POST',
                    url:'{{route('status.change')}}',
                    data:{'status':status,'id':id,'model':'Admin',"_token": "{{ csrf_token() }}"},
                    success:function(responce){
                        if (responce=="success" && status==true) {
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
