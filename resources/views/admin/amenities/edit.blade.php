@extends('admin.layout')


@section('page-title')

@endsection

@section('other-page-css')
    <!-- Plugins css -->
    <link href="{{asset('admin/libs/jquery-nice-select/nice-select.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('admin/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="{{ asset('admin/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />

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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Amenitie</a></li>
                                <li class="breadcrumb-item active">Edit Amenitie</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Amenitie</h4>
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
                            <h4 class="card-title mt-0 mb-0">Edit Amenitie</h4>
                        </div>
                        <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                            <hr>
                        </div>
                    </div>

                    <div class="editamenitie" >
                        <form action="{{ route('amenities.update') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="editid" value="{{$amenities->id}}" hidden id="editid" readonly placeholder="AmenitieName" required>
                                        <label for="amenitiename">Amenitie Name</label>
                                        <input type="text" class="form-control" name="editamenitiename" value="{{$amenities->description}}" id="editamenitiename" placeholder="AmenitieName" required>
                                        <span class="text-danger">@error('amenitiename') {{  $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                    <div class="form-group ">
                                        <div class="col-md-8">
                                            <label for="amenitiename">Amenitie Name</label>
                                            <input type="hidden" name="oldimage" value="{{asset($amenities->image_path)}}" >
                                            <input type="file" class="dropify" name="newimage" data-default-file="{{asset("/".$amenities->image_path)}}"  />
                                            <span class="text-danger">@error('newimage') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div><!-- end col -->
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

                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
    </div>

@endsection


@section('other-page-js')
    <script src="{{asset('admin/libs/jquery-nice-select/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('admin/libs/switchery/switchery.min.js')}}"></script>
    <script src="{{asset('admin/libs/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

    <!-- Init js-->
    <script src="{{asset('admin/js/pages/form-advanced.init.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('admin/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{asset('admin/libs/clockpicker/bootstrap-clockpicker.min.js')}}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('admin/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('admin/libs/dropify/dropify.min.js') }}"></script>

    <!-- Init js-->
    <script src="{{ asset('admin/js/pages/form-fileuploads.init.js') }}"></script>

    <!-- Init js-->
    <script src="{{asset('admin/js/pages/form-pickers.init.js')}}"></script>

@endsection
