@extends('admin.layout')


@section('page-title')

@endsection

@section('other-page-css')

    <!-- Plugins css -->
    <link href="{{asset('admin/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/dropify/dropify.min.css')}}" rel="stylesheet" type="text/css" />

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Banner Detail</a></li>
                            <li class="breadcrumb-item active">Banner Add</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Banner</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </div>
    <!-- End Content-->

    <div class="row">
        <div class="col-md-8 mx-auto col-sm-12 col-lg-8 col-12  ">
            <div class="card">
                <div class="card-header bg-warning" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                </div>
                <div class="card-body">
                    <form action="{{route('banner.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="page">Page And Space</label>
                                    <select name="page" id="page" class="form-control">
                                        <option value="0">Home</option>
                                    </select>
                                    <span class="text-danger">@error('page') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Banner Title">
                                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}" placeholder="Slug">
                                    <span class="text-danger">@error('slug') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="url">URL</label>
                                    <input type="text" class="form-control" name="url" id="url" value="{{ old('url') }}" placeholder="Link OR url">
                                    <span class="text-danger">@error('url') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="type">Select Type</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="const">Constant Banner</option>
                                        <option value="slider">Slider</option>
                                    </select>
                                    <span class="text-danger">@error('type') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="slider">Select Slider</label>
                                    <select name="slider" id="slider" class="form-control">
                                        <option value="0">Select Slider</option>
                                        <option value="1">Slider 1</option>
                                        <option value="2">Slider 2</option>
                                    </select>
                                    <span class="text-danger">@error('slider') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="slidet_title">Slider Title</label>
                                    <input type="text" class="form-control" name="slidet_title" id="slidet_title" value="{{ old('slidet_title') }}" placeholder="Slider Title">
                                    <span class="text-danger">@error('slidet_title') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                            <input type="file" class="dropify" data-max-file-size="8000kb" data-validation-allowing="jpg, jpeg, png" accept="image/x-png,image/jpeg" name="banner">
                                            <label for="banner" class="col-sm-12" style="text-align: center;"><b>Banner Image </b></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <p class="text-muted  ">Status</p>
                                    <div class="radio radio-info form-check-inline">
                                        <input type="radio" id="inlineRadio2" value="1"  class="mr-1" name="status" checked="">
                                        <label for="inlineRadio1"> Active </label>
                                    </div>
                                    <div class="radio form-check-inline">
                                        <input type="radio" id="inlineRadio3" value="0" name="status">
                                        <label for="inlineRadio2"> Disable </label>
                                    </div>
                                    <span class="text-danger">@error('status') {{ $message }} @enderror</span>
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

@endsection


@section('other-page-js')

    <!-- Plugins js -->
    <script src="{{asset('admin/libs/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('admin/libs/dropify/dropify.min.js')}}"></script>
    <!-- Init js-->
    <script src="{{asset('admin/js/pages/form-fileuploads.init.js')}}"></script>


@endsection
