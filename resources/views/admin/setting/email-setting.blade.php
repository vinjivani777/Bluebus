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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Setting</a></li>
                                <li class="breadcrumb-item active">Email Setting</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Email Setting</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-12 ">
                                    <h4 class="card-title mt-0 mb-0">Email Template</h4>
                                </div>
                                <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Email Sent From</label>
                                        <input type="text" class="form-control" name="from" id="from" placeholder="do-not-reply@________.com">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="snow-editor" style="height: 300px;">
                                                    <h3><span class="ql-size-large">Hello World!</span></h3>
                                                    <p><br></p>
                                                    <h3>This is an simple editable area.</h3>
                                                    <p><br></p>
                                                    <ul>
                                                        <li>
                                                            Select a text to reveal the toolbar.
                                                        </li>
                                                        <li>
                                                            Edit rich document on-the-fly, so elastic!
                                                        </li>
                                                    </ul>
                                                    <p><br></p>
                                                    <p>
                                                        End of simple area
                                                    </p>

                                                </div> <!-- end Snow-editor-->
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div><!-- end col -->
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                        <input type="reset" class="btn btn-danger" value="Cancel">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->
            </div>


        </div>
    <!-- End Content-->

@endsection


@section('other-page-css')

    <!-- Plugins css -->
    <link href="{{ asset('admin/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('other-page-js')
    <!-- Plugins js -->
    <script src="{{ asset('admin/libs/katex/katex.min.js') }}"></script>
    <script src="{{ asset('admin/libs/quill/quill.min.js') }}"></script>

    <!-- Init js-->
    <script src="{{ asset('admin/js/pages/form-quilljs.init.js') }}"></script>

@endsection
