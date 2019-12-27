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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bus Gallary</a></li>
                                <li class="breadcrumb-item active">Edit Bus Gallary </li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit BusGallary </h4>
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
                    <form action="{{ route('img_gallery.update',['id'=>$img->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 ">
                                <h4 class="card-title mt-0 mb-0">Edit Bus Gallery</h4>
                            </div>
                            <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <label for="bustype">Bus Name</label>
                                    <select class="form-control" name="bus_name" id="bus_name">
                                       @foreach ($Bus as $item)
                                            <option value="{{  $item->id }}" @if(($item->id)==$img->bus_id) selected @endif>{{  $item->bus_name }} | {{   $item->bus_reg_no}}</option>
                                       @endforeach
                                    </select>
                                    <span class="text-danger">@error('bus_name') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="bus_img">Bus Image</label>
                                    <input type="file" name="bus_img" id="bus_img" >
                                    <input type="hidden" name="old_img"  value="{{ $img->image }}">
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <img src="{{ asset($img->image) }}" name="oldimg" style="width:150px;height:100px" alt="" >
                            </div>
                            <span class="text-danger">@error('oldimg') {{ $message }} @enderror</span>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                <input type="submit" class="btn btn-sm btn-primary" value="Update">
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
