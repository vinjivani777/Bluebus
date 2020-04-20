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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">BlueBus</a></li>
                                <li class="breadcrumb-item active">Banner Details</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Banners List</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-danger" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                        </div>
                        <div class="card-body">
                            <a href="{{ route('banner.add') }}" class="btn btn-primary mb-2" ><i class="fas fa-plus mr-1"></i> Add New Banner</a>

                            <table id="basic-datatable" class="table dt table-striped table-centered">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">#</th>
                                        <th>Banners Image</th>
                                        <th>Banners Slug</th>
                                        <th>Banners URL</th>
                                        <th>Status</th>
                                        <th style="width: 70px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @php
                                        $r=1;
                                    @endphp

                                    @foreach ($banner as $item)

                                    <tr>
                                        <td>{{ $r++ }}</td>
                                        <td><img src="{{ asset('/'. $item->banners_image) }}" style="width:150px;height:60px;" name="image"></td>
                                        <td>{{ $item->banners_slug }}</td>
                                        <td>{{ $item->banners_url }}</td>
                                        <td>
                                            <button class="btn status-change  {{$item->status == 1?"btn-outline-primary":"btn-outline-danger"}} btn-rounded waves-effect waves-light btn-sm" value="{{$item->status==1?"Active":"Disable"}}" id="{{$item->id}}">{{$item->status==1?"Active":"Disable"}}</button>
                                        </td>
                                        <td>
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
