

@extends('web.layout')


@section('page-title')

@endsection

@section('other-page-css')

    <style>
        .form-control{
            border-width:0px 1px 1px 0px;
            }   
    </style>

@endsection

@section('page-css')


@endsection

@section('content')

        
    <div class="main-content">
        <section class="cancelltion" >
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <div style="font-weight:100;letter-spacing: 2px;font-size:35px;">PRINT TICKET</div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-12 text-center">
                        <div style="font-weight:100;letter-spacing: 2px;font-size:20px;font-family: Montserrat;">Verify your details, and <span class="text-danger">Print</span> your tickets</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mx-auto mb-3 mt-3">
                        <form action="">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-5">
                                        <label for="">TICKET NUMBER</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><img src="{{ asset('web\images\redbus\icon\tickets.png')}}"></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>                                        </div>
                                    <div class="col-5">
                                        <label for="">EMAIL</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('web\images\redbus\icon\e-mail.png')}}"></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-2" style="margin-top:28px">
                                        <input type="submit" class="btn " style="background-color:#d84f57" value="SUBMIT">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

            <div class="mini-print" >
                <div class="row">
                    <div class="col-12">
                        <div class="display-block bg-dark text-white text-center">PRINT TICKET</div>
                    </div>
                </div>
                @if (!Auth::guard('user')->check())
                <div class="row mt-1">
                    <div class="col-12 text-center">
                        <div class="alert alert-info" role="alert">
                            <i class="mdi mdi-alert-circle-outline mr-2 text-left"></i> Sign Up/Sign In to see your trips to cancel <a href="#" class="alert-">Login</a><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>                    
                        </div>            
                    </div>
                </div>
                @endif
                <div class="row  mt-3 m-1" >
                    <div class="col-12"> 
                        <form>
                            <div class="card p-2">
                                <div class="row">
                                    <div class="col-12 col-xs-12 col-lg-4 col-md-6 mx-auto">
                                        <div class="form-group">
                                            {{-- <label>TICKET NUMBER</label> --}}
                                            <input type="text" name="canceltion" class="form-control" placeholder="Ticket No" required>
                                        </div>
                                    </div>
                               
                                    <div class="col-12 col-xs-12 col-lg-4 col-md-6 mx-auto">
                                        <div class="form-group">
                                            {{-- <label>EMAIL</label> --}}
                                            <input type="email" name="canceltion" class="form-control" placeholder="Canceltion" required>
                                        </div>   
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-xs-12 col-lg-4 col-md-6 mx-auto text-center">
                                        <input type="submit" name="submit" class="btn btn-danger btn-sm" style="width:100%" >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
    </div>


@endsection


@section('other-page-js')



@endsection


@section('after-js')


    

@endsection

        
        
        
                
        
       

