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
                                <li class="breadcrumb-item active">Amenities Details</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Amenities List</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-primary addbtn mb-3"  style="height:35px"><i class="fas fa-plus mr-1"></i> Add New Amenities</button>
                            <div class="addamenitie" style="display:none">
                                <form action="{{ route('amenities.store') }}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                            <div class="form-group">
                                                <label for="amenitiename">Amenitie Name</label>
                                                <input type="text" class="form-control" name="amenitiename" value="{{ old('amenitiename') }}" id="amenitiename" placeholder="AmenitieName" required>
                                                <span class="text-danger">@error('amenitiename') {{  $message }} @enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input type="file" class="form-control" name="image" value="{{ old('image') }}" id="image" required>
                                                <span class="text-danger">@error('image') {{  $message }} @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-lg-12 col-sm-12 pb-3 pl-3">
                                            <input type="submit" class="btn btn-sm btn-primary" value="Submit">
                                            <input type="button" class="btn btn-sm btn-danger ml-3 cancel"  value="Cancel">
                                        </div>
                                    </div>
                                </form>
                                <hr style="border-top: 1px dotted off-black" />
                            </div>

                            <table id="basic-datatable" class="table dt-responsive table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->amenities}}</td>
                                        <td><img src="{{asset($item->image)}}" style="width:70px;height:70px;border-radius:35px" name="image"></td>
                                        <td>
                                            <button class="btn status-change {{$item->status == 1?"btn-outline-primary":"btn-outline-danger"}} btn-rounded waves-effect waves-light btn-sm" value="{{$item->status==1?"Active":"Disable"}}" id="{{$item->id}}">{{$item->status==1?"Active":"Disable"}}</button>
                                        </td>
                                        <td>
                                            <a  class="mr-1 text-info" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="far fa-eye"></i></a>
                                            <a href="{{ route('amenities.edit',['id'=>$item->id]) }}" class="mr-1 text-primary"><i class=" far fa-edit"></i></a>
                                            <a href="#"  class="mr-1 text-danger remove_amenities" id="{{$item->id}}"><i class=" fas fa-trash-alt"></i></a>
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
                    <h4 class="modal-title" id="myLargeModalLabel">Amenities view</h4>
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
                                            <h4 class="card-title mt-0 mb-0">Amenities Details</h4>
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
                                            <h5>Start Amenities</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>PickupPoint Time</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Landmark</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Address</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-6 col-lg-6 ">
                                            <h5>Start Time</h5>
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
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
<script src="{{asset('admin/libs/sweetalert2/sweetalert2.min.js')}}"></script>

<script >
   $(document).ready(function(){
        // $('.addamenitie').hide();
        $('.addbtn').click(function(){
            $('.addamenitie').show();
            $(this).hide();
        });
        $('.cancel').click(function(){
            $('.addamenitie').hide();
            $('.addbtn').show();
        });
   });
    //delete board point
    $('.remove_amenities').click(function(){
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
                            url:'{{route('amenities.destroy')}}',
                        data:{
                            id : c_id
                        },
                        type:'get',
                        success:function(responce)
                        {
                            if (responce=="success") {
                            swal({
                                title: "Deleted !",
                                text: "Successfully deleted amenitie.",
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

    // Status Change the bus board point //
    $('.status-change').click(function(){
        var status= $(this).val()=="Active"?0:1;
        var id=$(this).prop('id');
        swal({
                title: "Are you sure?",
                text: "Update the status on bus board point.",
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
                    data:{'status':status,'id':id,'model':'Amenitie',"_token": "{{ csrf_token() }}"},
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
