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
                                <li class="breadcrumb-item active">Rating Details</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Rating List</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="basic-datatable" class="table dt table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">#</th>
                                        <th>Bus Name</th>
                                        <th>Average</th>
                                        <th style="width: 70px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Rating as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->bus->bus_name }}</td>
                                        <td>{{ $item->average }}</td>
                                        <td>
                                            <a  class="mr-1 text-info" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="far fa-eye"></i></a>
                                            <a href="{{ route('promo-detail.edit',['id'=>1]) }}" class="mr-1 text-primary"><i class=" far fa-edit"></i></a>
                                            <a class="mr-1 text-danger remove_promo" id="1" ><i class=" fas fa-trash-alt"></i></a>
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
                    <h4 class="modal-title" id="myLargeModalLabel">PromoCode view</h4>
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
                                            <h4 class="card-title mt-0 mb-0">PromoCode Details</h4>
                                        </div>
                                        <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                            <h5>Code Name</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                            <h5>Amount</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                            <h5>Status</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                            <h5>Expire Date</h5>
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


@section('other-page-css')

{{-- sweetalert --}}
<link href="{{asset('admin/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{ asset('admin/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

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

@endsection
