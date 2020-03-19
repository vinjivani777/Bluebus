@extends('admin.layout')


@section('page-title')

@endsection

@section('other-page-css')
<link href="{{asset('admin/libs/jquery-nice-select/nice-select.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css">

<!-- Plugins css -->
    <link href="{{asset('admin/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css" />

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Menus Detail</a></li>
                            <li class="breadcrumb-item active">Menus Edit</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Menus</h4>
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
                    <form action="{{route('menus.update',['id'=>$editMenu->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="hidden" name="page_id" value="{{ $editMenu->page_id }}">

                                    <label for="menus">Menus</label>
                                    <select name="menus" id="menus" class="form-control">
                                        <option value="0">Leave as Parent</option>
                                        @foreach ($menus as $menu)
                                            <option value="{{ $menu->id }} @if(($menu->id) == ($editMenu->id)) {{ "selected" }} @endif ">{{ $menu->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('menus') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $editMenu->name }}" placeholder="Menu Name">
                                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" name="slug" id="slug" value="{{ $editMenu->link }}" placeholder="Link OR Slug">
                                    <span class="text-danger">@error('slug') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="link"  @if(($editMenu->type) == "link") {{ "selected" }} @endif >Link</option>
                                        <option value="elink" @if(($editMenu->type) == "elink") {{ "selected" }} @endif>External Link</option>
                                        <option value="page" @if(($editMenu->type) == "page") {{ "selected" }} @endif>Page</option>
                                    </select>
                                    <span class="text-danger">@error('type') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <p class="text-muted  ">Status</p>
                                    <div class="radio radio-info form-check-inline">
                                        <input type="radio" id="inlineRadio2" value="1"  class="mr-1" name="status" @if(($editMenu->status) == "1") {{ "checked" }} @endif>
                                        <label for="inlineRadio1"> Active </label>
                                    </div>
                                    <div class="radio form-check-inline">
                                        <input type="radio" id="inlineRadio3" value="0" name="status" @if(($editMenu->status) == "0") {{ "checked" }} @endif>
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
    <!-- Init js-->
    <script src="{{asset('admin/js/pages/form-pickers.init.js')}}"></script>

    <!-- Plugins js -->
    <script src="{{asset('admin/libs/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('admin/libs/dropify/dropify.min.js')}}"></script>
    <!-- Init js-->
    <script src="{{asset('admin/js/pages/form-fileuploads.init.js')}}"></script>


@endsection
