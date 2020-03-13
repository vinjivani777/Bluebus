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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Promo Detail</a></li>
                            <li class="breadcrumb-item active">PromoCode Add</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Promo Code</h4>
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
                    <form action="{{route('promo-detail.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="promo_code">Promo Code</label>
                                    <input type="text" class="form-control" style="text-transform:uppercase" name="promo_code" id="promo_code" placeholder="PROMOCODE" required>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="description">Promo Code Detail</label>
                                    <input type="text" class="form-control" name="description" id="description" placeholder="Promo Code Detail" required>
                                </div>
                            </div>

                            <div class="col-3 col-md-3 col-lg-3 col-sm-3">
                                <div class="form-group">
                                    <label for="usage_count">No Of Usage(Total)</label>
                                    <input type="number" class="form-control" name="usage_count" id="usage_count" placeholder="No of Total Usage" min="1" step="1">
                                </div>
                            </div>
                            <div class="col-3 col-md-3 col-lg-3 col-sm-3">
                                <div class="form-group">
                                    <label for="indivisual_count">No Of Usage(Indivisual)</label>
                                    <input type="number" class="form-control" name="indivisual_count" id="indivisual_count" placeholder="No of Indivisual Usage" min="1" step="1">
                                </div>
                            </div>
                             <div class="col-6 col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="min_ticket_amount">Minimum Ticket Amount</label>
                                    <input type="number" class="form-control" name="min_ticket_amount" id="min_ticket_amount" placeholder="Minimum Ticket Amount" min="1" step="1">
                                </div>
                            </div>

                            <div class="col-6 col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group ">
                                    <label for="type">Type</label><br>
                                    <div class="ml-1 radio radio-info form-check-inline mt-1">
                                        <input type="radio" class="type" id="flat" name="promo_type"  value="Flat" checked="true">
                                        <label for="flat"> Flat</label>
                                    </div>
                                    <div class="radio form-check-inline">
                                        <input type="radio" class="type" id="percentage" name="promo_type" value="Percentage">
                                        <label for="percentage"> Percentage </label>
                                        <input type="number" class="form-control" id="percentage_pr" name="percentage_pr" step="1"  max="99" value="0" style="display:none;margin-left:50px" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="max_discount_amount">Max Discount</label>
                                    <input type="number" class="form-control" name="max_discount_amount" id="max_discount_amount" placeholder="Max Discount Amount" min="1" step="1">
                                </div>
                            </div>

                            <div class="col-6 col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="start_date">Start Date</label>
                                    <input type="text" class="form-control" name="start_date" id="start_date" placeholder="Start Date" required>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="expiry_date">Expiry Date</label>
                                    <input type="text" class="form-control" name="expiry_date" id="expiry_date" placeholder="Expiry Date" required>
                                </div>
                            </div>

                            <div class="col-6 col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="max_discount_amount">Promo Code Image</label>
                                    <input type="file" class="dropify" name="promo_code_image" data-default-file="promo_code_image" />
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="expiry_date">Terms & Conditions</label>
                                    <textarea class="form-control" name="t_and_c" rows="7" placeholder="Terms & Conditionsn"></textarea>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row" hidden>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="buses">Include Buses</label>
                                    <select name="include_bus_id[]" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose Bus">
                                        @foreach ($buses as $type)
                                            <option value="{{$type->id}}">{{$type->bus_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="buses">Exclude Buses</label>
                                    <select name="exclude_bus_id[]" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose Bus">
                                        @foreach ($buses as $type)
                                            <option value="{{$type->id}}">{{$type->bus_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-12">
                                <span id="flatspan" class="text-danger" style="display:none">The Flat Discount Cann't be Greater than Max Discount</span>
                                <span id="percentagespan" class="text-danger" style="display:none">The Percentages Discount Cann't be Greater than 60%</span>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                <div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                   </div>
                                <input type="submit" class="btn btn-sm btn-primary" id="submit" value="Submit">
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

    <script type="text/javascript">
            $('input[type=radio][name=promo_type]').change(function() {
                if (this.value == 'Flat') {
                    $("#percentage_pr").css("display", "none");
                }else{
                    $("#percentage_pr").css("display", "block");
                }
            });
    </script>
@endsection
