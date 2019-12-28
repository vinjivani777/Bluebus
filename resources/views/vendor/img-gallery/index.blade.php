@extends('vendor.layout')


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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bus Type</a></li>
                                <li class="breadcrumb-item active">Bus Gallery Details</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Bus Gallery Details</h4>
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
                    <form action="{{ route('vendor.img_gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 ">
                                <h4 class="card-title mt-0 mb-0">Add Bus Gallery</h4>
                            </div>
                            <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label for="bustype">Bus Name</label>
                                    <select class="form-control" name="bus_name" id="bus_name">
                                        @foreach ($Bus as $item)
                                            <option value="{{ $item->id }}">{{ $item->bus_name}} | {{$item->bus_reg_no }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('bus_name') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label for="bus_img">Bus Image</label>
                                    <input type="file" name="bus_img" id="bus_img" >
                                    <span class="text-danger">@error('bus_img') {{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
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

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-danger" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-12 ">
                            <h4 class="card-title mt-0 mb-0">Bus Gallery List</h4>
                        </div>
                        <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                            <hr>
                        </div>
                    </div>
                    <table id="basic-datatable" class="table dt-responsive table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Bus Name</th>
                                <th>Total Image</th>
                                <th style="width: 70px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Gallery as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->bus->bus_name }}</td>
                                <td><img src="{{ asset($item->image) }}" alt="" width="50px" height="50px" ></td>
                                <td>
                                    <a  class="mr-1 text-info" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="far fa-eye"></i></a>
                                    <a href="{{ route('vendor.img_gallery.edit',['id'=>$item->id]) }}" class="mr-1 text-primary"><i class=" far fa-edit"></i></a>
                                    <a class="mr-1 text-danger remove_bus_image" id="{{ $item->id }}"><i class=" fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
    </div>

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
    $('.remove_bus_image').click(function(){
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
                        url:'{{route('vendor.img_gallery.destory')}}',
                        data:{
                            id : c_id
                        },
                        type:'get',
                        success:function(responce)
                        {
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
</script>
@endsection
