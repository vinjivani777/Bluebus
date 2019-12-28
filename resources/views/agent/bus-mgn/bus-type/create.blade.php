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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bus Mag.</a></li>
                                <li class="breadcrumb-item active">Bus Add</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Bus Add</h4>
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
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-12 col-md-12 ">
                                <h4 class="card-title mt-0 mb-0">Add Bus Details</h4>
                            </div>
                            <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="busname">Bus Name</label>
                                    <input type="text" class="form-control" name="bus_name" id="bus_name" placeholder="Bus Name">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="busregno">Bus RegiNumber</label>
                                    <input type="text" class="form-control" name="bus_reg_no" id="bus_reg_no" placeholder="Bus Regi No">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4 ">
                                <div class="form-group">
                                    <label for="bustype">Bus Type</label>
                                    <select name="bus_type" id="bus_type" class="form-control">
                                        <option value="">-AC</option>
                                        <option value="">-Non AC</option>
                                        <option value="">-Sleeper</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="maxiseats">Maximum seats</label>
                                    <input type="text" class="form-control" name="maximum_seats" id="maximum_seats" placeholder="Maximum seats">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="board_point">Board Point</label>
                                    <input type="text" class="form-control" name="board_point" id="board_point" placeholder="Board Point">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="droppoint">Drop seats</label>
                                    <input type="text" class="form-control" name="drop_point" id="drop_point" placeholder="Drop Point">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="boardtime">Board Time</label>
                                    <input type="text" class="form-control" name="board_time" id="board_time" placeholder="Board Time">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="droptime">Drop Time</label>
                                    <input type="text" class="form-control" name="drop_time" id="drop_time" placeholder="Drop Time">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="amenities">Amenities</label>
                                    <input type="text" class="form-control" name="amenities" id="amenities" placeholder="Drop Time">
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



@section('other-page-css')

@endsection

@section('other-page-js')

@endsection
