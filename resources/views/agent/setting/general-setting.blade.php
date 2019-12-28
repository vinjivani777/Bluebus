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
                                <li class="breadcrumb-item active">General Setting</li>
                            </ol>
                        </div>
                        <h4 class="page-title">General Setting</h4>
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
                                    <h4 class="card-title mt-0 mb-0">General Setting</h4>
                                </div>
                                <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-md-4 col-lg-4 col-4">
                                    <div class="form-group">
                                        <label for="">Website Title</label>
                                        <input type="text" class="form-control" name="website_title" id="website_title" placeholder="Website Title">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-4">
                                    <div class="form-group mb-3">
                                        <label>Ticket Payment Time</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Minutes</span>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Minutes" aria-label="Minutes" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-4">
                                    <div class="form-group mb-3">
                                        <label>Ticket Cancel Before Trip</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Minutes</span>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Minutes" aria-label="Minutes" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-4">
                                    <div class="form-group mb-3">
                                        <label>Base Currency</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"> <i class="fas fa-money-bill-alt"></i> </span>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Base Currency" aria-label="base_currency" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-4">
                                    <div class="form-group mb-3">
                                        <label>Currency Symbol</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-exclamation-circle"></i></span>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Currency Symbol" aria-label="Currency Symbol" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-4">
                                    <div class="form-group mb-3">
                                        <label>Decimal After Point</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Decimal</span>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Decimal" aria-label="Decimal" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-md-2 col-lg-2 col-2">
                                    <div class="form-group mb-3">
                                        <label>Email Verification</label>
                                        <br>
                                        <button type="button" class="btn btn-outline-danger btn-sm btn-rounded waves-effect waves-light">OFF</button>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-md-2 col-lg-2 col-2">
                                    <div class="form-group mb-3">
                                        <label>Email Notification</label>
                                        <br>
                                        <button type="button" class="btn btn-outline-danger btn-sm btn-rounded waves-effect waves-light">OFF</button>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-md-2 col-lg-2 col-2">
                                    <div class="form-group mb-3">
                                        <label>SMS Verification</label>
                                        <br>
                                        <button type="button" class="btn btn-outline-danger btn-sm btn-rounded waves-effect waves-light">OFF</button>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-md-2 col-lg-2 col-2">
                                    <div class="form-group mb-3">
                                        <label>SMS Notification</label>
                                        <br>
                                        <button type="button" class="btn btn-outline-danger btn-sm btn-rounded waves-effect waves-light">OFF</button>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-md-2 col-lg-2 col-2">
                                    <div class="form-group mb-3">
                                        <label>Registation</label>
                                        <br>
                                        <button type="button" class="btn btn-outline-danger btn-sm btn-rounded waves-effect waves-light">OFF</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
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

@endsection

@section('other-page-js')

@endsection
