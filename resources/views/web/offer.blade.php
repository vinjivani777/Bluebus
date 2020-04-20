@extends('web.layout')


@section('page-title')

@endsection

@section('other-page-css')


@endsection

@section('page-css')

<style>
       .footer-row{
                background-color:#1b2330;
                overflow: hidden;
            }
            .footer-links a {
                display: block;
                color: #d7d7d7;
                cursor: pointer;
                margin-bottom: 5px;
                font-weight: 600;
            }
</style>
@endsection

@section('content')

<div class="main-content ">
    {{-- <div class="minoffer" id="minoffers">
        @include('web.offers.mobileoffer')

    </div> --}}

        @include('web.offers.maxoffer')


</div>

@endsection


@section('other-page-js')



@endsection


@section('after-js')




@endsection


