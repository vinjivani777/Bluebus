@extends('web.layout')

@section('page-title')
Blue Bus | Search Bus Tickets
@endsection
@section('other-page-css')
    <style>
        body{
            background-image: url("/web/images/backgroundcontactus.png");
            background-repeat: no-repeat;
            background-size: contain;
        }
    </style>
@endsection

@section('content')
<div class="row mb-5">
    <div class="col-6 col-md-6 col-xl-6 col-sm-12">
        <div>
            <img src="{{asset('web/images/mailbox.png')}}" class="bg-white" style="width: 30%;margin-left: 33%;margin-top: 23%;">
        </div>
        <div >
            <label style="margin-left: 40%;margin-top: 2%;">Murait Infotech</label>
            <label style="margin-left: 28%;margin-top:0%;">305,Amora Arcade,Uttran,Surat.</label>
            <label style="margin-bottom: 20%;margin-left: 27%;margin-top:0%;">Email: muraitinfotech@gmail.com</label>
        </div>
    </div>
    <div class="col-6 col-md-6 col-xl-6 col-sm-12" >
        <div id="content" style="width: 60%;margin-top:12%;background-color:white">
            <div class="row" style="box-shadow: 5px 10px 8px 2px #8a92a9;">
                <div class="col-12 col-md-12 col-xl-12 col-sm-12 border border-dark rounded p-2" >
                    <div class="row">
                        <h2 class="mx-auto" >Send Us Message!</h2>
                    </div>
                    <hr style="height:2px;background:black;">
                    <form method="POST" action="{{route('contactus.request')}}" style="font:small-caption">
                        @csrf
                        <div class="row">
                            <div class="col-6 col-md-6 col-xl-6 col-sm-6">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="firstname" required>
                                <span>@error('firstname'){{ $message }}@enderror</span>
                            </div>
                            <div class="col-6 col-md-6 col-xl-6 col-sm-6">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lastname" required>
                                <span>@error('lastname'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-xl-12 col-sm-12">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email" required>
                                <span>@error('email'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-xl-12 col-sm-12">
                                <label>Message</label>
                                <textarea class="form-control" name="message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-xl-12 col-sm-12">
                                <input type="submit" class="btn btn-primary form-control mt-2">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('other-js')
@endsection

