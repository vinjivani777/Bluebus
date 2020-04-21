@extends('web.layout')

@section('page-title')
Blue Bus | Search Bus Tickets
@endsection

@section('other-page-css')

    <link href="{{asset('web/libs/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/libs/jquery-toast/jquery.toast.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('web/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('page-css')
    <style>
        .footerss{
            display:none;
        }
    </style>
@endsection

@section('content')

<form action="{{ route('user.contect') }}" method="POST" >
    @csrf
    <div class="row">
        <div class="col-12 pt-2 pb-2" >
            <div class="container-fluid bus-list-table">
                <div class="row" >
                    <div class="col-8" >
                        <a href="{{ route('web.index') }}" class="text-dark" style="font-size:19px;font-weight:800"><i class="fe-arrow-left"></i></a>
                        <span class="text-dark" style="font-size:19px;font-weight:600">{{ $sourceCity }} </span>
                        To
                        <span class="text-dark" style="font-size:19px;font-weight:600"> {{ $destCity }} </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0 m-0">
                        <hr style="border-bottom:0.2px solid #d0d0d0" class="m-0 p-0">
                    </div>
                </div>

            </div>
            <div class="container-fluid bus-list-table mt-3">
                <div class="row">
                    <div class="col-12" style="overflow:hidden;">
                        <div class="card m-0" >
                            <input type="hidden" name="busid" class="busid" id="busid" value="{{ $busId }}">
                            <input type="hidden" name="totalFare" class="totalFare" id="totalFare" value="{{ $totalFare }}">
                            <input type="hidden" name="seatNo" class="seatNo" id="seatNo" value="{{ $seatNo }}">

                            <ul class="nav nav-tabs nav-bordered nav-danger nav-justified">
                                <li class="nav-item active show">
                                    <a href="#broadoint-b2-{{ $str }}"  data-toggle="tab" aria-expanded="false" class="nav-link active show" style="font-size:16px;font-weight:600">
                                        BOARDING
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#droppoint-b2-{{ $str }}" data-toggle="tab" aria-expanded="true" class="nav-link" style="font-size:16px;font-weight:600">
                                        DROPING
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active show" id="broadoint-b2-{{ $str }}">
                                    <div style="max-height:300px;overflow:auto;">
                                            @php $k=50; @endphp
                                            @foreach ($BoardPoint as $val)
                                                @php  $k++; @endphp

                                                        <div class="row m-1 p-0">
                                                            <div class="col-12 m-0 p-0">
                                                                <div class="radio radio-info  ml-1 mr-1 m-0 pl-1 pr-1 p-0">
                                                                    <input type="radio" class="broadpoint" name="broadpoint" id="{{ $k }}_{{ $val->id }}"  value="{{ $val->id }}">
                                                                    <label for="{{ $k }}_{{ $val->id }}">
                                                                    <div class="float-left" style="font-size:14px;font-weight:400;width:150px;" title="{{ $val->address }}!" data-plugin="tippy" data-tippy-theme="success" data-tippy-arrow="true">{{ $val->board_point }}</div>
                                                                    <div class="float-right" style="margin-left:auto;font-size:16px;font-weight:600">{{ date("g:i A",strtotime($val->pickup_time)) }}  </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row m-0 p-0">
                                                            <div class="col-12 col-md-12 m-0 p-0">
                                                                <hr style="border:0.5px solid #dcdcdc">
                                                            </div>
                                                        </div>
                                            @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane" id="droppoint-b2-{{ $str }}">
                                    <div style="max-height:300px;overflow:auto;">
                                    @php
                                        $k=50;
                                    @endphp

                                    @foreach ($DropPoint as $val)
                                        @php
                                            $k++;
                                        @endphp

                                                <div class="row m-1 p-0">
                                                    <div class="col-12 m-0 p-0">
                                                        <div class="radio radio-info  ml-1 mr-1 m-0 pl-1 pr-1 p-0">
                                                            <input type="radio" class="droppoint" name="droppoint" id="{{ $k }}_{{ $val->id }}"  value="{{ $val->id }}" checked=""    >
                                                            <label for="{{ $k }}_{{ $val->id }}">
                                                            <div class="float-left" style="font-size:14px;font-weight:400;width:150px;" title="{{  $val->address }} !" data-plugin="tippy" data-tippy-theme="success" data-tippy-arrow="true">{{  $val->drop_point }}</div>
                                                            <div class="float-right" style="margin-left:auto;font-size:16px;font-weight:600">{{  date("g:i A",strtotime($val->drop_time)) }}</div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row m-0 p-0">
                                                    <div class="col-12 col-md-12 m-0 p-0">
                                                        <hr style="border:0.5px solid #dcdcdc">
                                                    </div>
                                                </div>
                                    @endforeach
                                    </div>
                                        {{-- <div class="row mt-3 ml-0 mr-0">
                                            <div class="col-12 col-md-12 ml-0 mr-0">
                                                <button class="btn btn-block btn-danger width-lg btn-sm ml-0 mr-0 continue-to-book right-bar-toggle " onclick="return validate(this);" data-href="{{  route($userurl) }}">CONTINUE TO BOOK</button>
                                            </div>
                                        </div> --}}

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark " style="position: sticky;bottom:0;">
        <div class="row">
            <div class="col-12 p-2">
                    <button type="submit" class="btn btn-lg pl-3 pr-3 " style="width:100%;background:#ef6614" >Continue</button>
                </div>
            </div>
        </div>
    </div>

</form>


@endsection

@section('right-bar')



@endsection

@section('other-page-js')

            <!-- Loading buttons js -->
            <script src="{{asset('web/libs/ladda/spin.js')}}"></script>
            <script src="{{asset('web/libs/ladda/ladda.js')}}"></script>

             <!-- Tost-->
            <script src="{{ asset('web/libs/jquery-toast/jquery.toast.min.js') }}"></script>

            <!-- toastr init js-->
            <script src="{{ asset('web/js/pages/toastr.init.js') }}"></script>


            <!-- Buttons init js-->
            <script src="{{asset('web/js/pages/loading-btn.init.js')}}"></script>

            <!-- App js -->
            <script src="{{ asset('web/libs/tippy-js/tippy.all.min.js')}}"></script>


@endsection

@section('after-js')


@endsection
