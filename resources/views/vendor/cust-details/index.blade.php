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
                <div class="card-header bg-warning" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
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
                                <th style="width: 20px;">#</th>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Customer as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->customer_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->mobile }}</td>
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
