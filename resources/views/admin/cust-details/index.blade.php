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
                                <li class="breadcrumb-item active">Customer Details</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Customer Details</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
        </div>
    <!-- End Content-->


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-danger" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-12 ">
                            <h4 class="card-title mt-0 mb-0">Customer List</h4>
                            <hr>
                        </div>
                    </div>
                    <table id="basic-datatable" class="table  table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Avatar</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Phone </th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1?>
                            @foreach ($Customer as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td> <img src="{{ asset('/'. $item->avatar)}}" class="rounded-circle avatar-md img-thumbnail" alt="profile-image"> </td>
                                        <td>{{$item->first_name .' '. $item->last_name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->mobile_no}}</td>
                                        <td>
                                            <button class="btn status-change {{$item->status == 1?"btn-outline-primary":"btn-outline-danger"}} btn-rounded waves-effect waves-light btn-sm" value="{{$item->status==1?"Active":"Disable"}}" id="{{$item->id}}">{{$item->status==1?"Active":"Disable"}}</button>
                                        </td>
                                        <td>
                                            <a  class="mr-1 text-info" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="far fa-eye"></i></a>
                                            {{-- <a href="{{ route('item-detail.edit',['id'=>$item->id]) }}" class="mr-1 text-primary"><i class=" far fa-edit"></i></a> --}}
                                            {{-- <a href="#"  class="mr-1 text-danger remove_item" id="{{$item->id}}"><i class=" fas fa-trash-alt"></i></a> --}}
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


@endsection
