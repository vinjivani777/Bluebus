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
                                <li class="breadcrumb-item active">Contact Setting</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Contact Setting</h4>
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
                                    <h4 class="card-title mt-0 mb-0">Contact Setting</h4>
                                </div>
                                <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-auto">
                                        <label class="sr-only" for="inlineFormInputGroup">Phone No</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Phone No">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col-auto">
                                        <label class="sr-only" for="inlineFormInputGroup">Email</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-envelope-open"></i></div>
                                            </div>
                                            <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col-auto">
                                        <label class="sr-only" for="inlineFormInputGroup">Address</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-auto">
                                        <label class="sr-only" for="inlineFormInputGroup">latitude</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Latitude</div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Latitude">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-auto">
                                        <label class="sr-only" for="inlineFormInputGroup">Longitude</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Longitude</div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Longitude">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                                <div class="col-12 ">
                                    <div class="col-auto ">
                                        <input type="submit" class="btn btn-primary " value="Update">
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

@endsection

@section('other-page-js')

@endsection
