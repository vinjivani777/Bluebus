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
                                <li class="breadcrumb-item active">Seat Layout</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add Seat Layout</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-primary" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-12 ">
                                    <h4 class="card-title mt-0 mb-0">Add Seat Layout</h4>
                                </div>
                                <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                  <div class="form-group">
                                    <label for="">Select Bus</label>
                                    <select name="bus_name" id="bus_name" class="form-control">
                                        <option value="1">abc</option>
                                        <option value="1">abc</option>
                                        <option value="1">abc</option>
                                        <option value="1">abc</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                    <div class="form-group">
                                        <label for="">Select Seat Type</label>
                                        <select name="seat_type" id="seat_type" class="form-control">
                                            <option value="1">Seater / Semi sleeper</option>
                                            <option value="2">Sleeper</option>
                                            <option value="3">Seater && Sleeper</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                   <div class="form-group">
                                       <label for="">Total Seat</label>
                                        <input type="number" name="total_seat" id="total_seat" class="form-control" placeholder="Total Seat">
                                   </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                    <div class="form-group">
                                        <label>Select Layout Type</label>
                                        <select class="form-control select2 ng-pristine ng-invalid ng-invalid-required parsley-success" style="width: 100%;" ng-model="layout" ng-change="classLeft(layout)" required="" data-parsley-id="10"><option value="? undefined:undefined ?"></option>
                                          <option value="layout-1"> 1 X 1 </option>
                                          <option value="layout-2"> 1 X 2 </option>
                                          <option value="layout-3"> 2 X 1 </option>
                                          <option value="layout-4" selected=""> 2 X 2 </option>
                                        </select>
                                      </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                    <div class="form-group">
                                        <label for="">No of last row seats</label>
                                         <input type="number" name="last_row_seat" id="last_row_seat" class="form-control" placeholder="Last Row No Of Seat">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-3 ">
                                    <button class="btn btn-sm btn-info ">View Layout</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-group">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-primary" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-12 ">
                                    <h4 class="card-title mt-0 mb-0">Quick See Layout</h4>
                                </div>
                                <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div>
    <!-- End Content-->

@endsection


@section('other-page-css')


@endsection

@section('other-page-js')

@endsection
