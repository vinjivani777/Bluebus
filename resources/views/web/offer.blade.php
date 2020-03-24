@extends('web.layout')


@section('page-title')

@endsection

@section('other-page-css')


@endsection

@section('page-css')


@endsection

@section('content')

<div class="main-content ">
    <div class="minoffer" id="minoffers">
        @include('web.offers.mobileoffer')

    </div>
    <div class="maxoffer">
        @include('web.offers.maxoffer')

    </div>
</div>

@endsection


@section('other-page-js')



@endsection


@section('after-js')




@endsection


