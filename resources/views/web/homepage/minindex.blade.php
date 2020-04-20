<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 col-12 col-xs-12">
            <form action="{{ route('search') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card p-2" style="position:relative;border:1px solid #3995ca;background:#f1f7fa">
                    {{-- <label for="">From</label>  --}}
                    <textarea class="form-control pb-0 search_input source_place" style="border-style:solid;border-width: 0px 0px 0px 0px;background:#f1f7fa" name="source_place" autocomplete="off" id="minisource_place" cols="1" rows="1" placeholder="From"></textarea>
                    <div class="row">
                        <div class="col-10 col-sm-10 col-md-10 col-lg-11">
                            <hr class=" mx-auto" style="border: 0.5px solid #3995ca;">
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-1  mt-0 ">
                            <img src="{{ asset('web/images/redbus/icon/van.png') }}" class="bus_img mx-auto" style="z-index:5;position:absolute" id="bus_img" width="30px" height="30px">
                        </div>
                    </div>
                    {{-- <label for="" class="mt-0 pt-0">To</label> --}}
                    <textarea class="form-control pb-0 search_input destination_place" style="border-style:solid;border-width: 0px 0px 0px 0px;background:#f1f7fa" name="destination_place" autocomplete="off" id="minidestination_place" cols="1" rows="1" placeholder="To"></textarea>
                </div>

                <div class="card p-2 " style="border: 0.5px solid #3995ca;background:#f1f7fa">
                    <label for="">Journey Date</label>
                    {{-- <input type="text" class="form-control mb-2 search_input basic-datepicker text-center" name="onward"  id="journey_date" placeholder="Onward Date"> --}}
                    <input type="text" class="form-control mb-2 search_input basic-datepicker" style="border-style:solid;border-width: 0px 0px 0px 0px;background:#f1f7fa" name="journey_date" id="minijourney_date" placeholder="Journey Date">
                </div>

                <div class="col-8 col-md-12 col-lg-12 col-sm-10 col-xs-10 mx-auto ">
                    <button class="btn btn-sm" style="width:100%;background:#ef6614" id="minisearch_bus">Search Bus</button>
                </div>
            </form>
            <div class="row mt-3">
                <div class="col-12">
                    <h5 class="">OFFERS FOR YOU</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-lg-4 col-md-6">
                    <div class="card card-body p-2">
                        <div class="row mt-0 mb-0">
                            <div class="col-3 col-sm-3 ">
                                <img src="{{ asset('web\images\redbus\offer\100x100.png') }}" style="width:50px;height:50px" alt="" class="mx-auto">
                            </div>
                            <div class="col-9 col-lg-7">
                                <h6 class="text-danger">Save up to Rs 250 on bus ticket</h5>
                                    <span>Validity : 1 Mar to 31 Apr</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-lg-4 col-md-6">
                        <div class="card card-body p-2">
                            <div class="row mt-0 mb-0">
                                <div class="col-3 col-sm-3 ">
                                    <img src="{{ asset('web\images\redbus\offer\100x100.png') }}" style="width:50px;height:50px" alt="" class="mx-auto">
                                </div>
                                <div class="col-9 col-lg-7">
                                    <h6 class="text-danger">Save up to Rs 250 on bus ticket</h5>
                                    <span>Validity : 1 Mar to 31 Apr</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-lg-4 col-md-6">
                        <div class="card card-body p-2">
                            <div class="row mt-0 mb-0">
                                <div class="col-3 col-sm-3 ">
                                    <img src="{{ asset('web\images\redbus\offer\100x100.png') }}" style="width:50px;height:50px" alt="" class="mx-auto">
                                </div>
                                <div class="col-9 col-lg-7">
                                    <h6 class="text-danger">Save up to Rs 250 on bus ticket</h5>
                                    <span>Validity : 1 Mar to 31 Apr</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="col-12 float-left">
            <h4>WE PROMISE TO DELIVER</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="container">
                    <div class="row  mx-auto">
                        <div class="col-lg-12 col-sm-12 col-md-3 ">
                            <div class="card cust-banifit card-body">
                                <div class=" ml-0 pl-0 pr-0 mr-1 pb-0 mb-0">
                                    <div class="row">
                                        <div class=" col-sm-3 col-xs-3 text-center">
                                                <img src="http://127.0.0.1:8000/web/images/redbus/custsupport/maximum_choices.png" alt="" style="width:50px;height:50px" alt="" class="mx-auto">
                                        </div>
                                        <div class="col-sm-9  col-xs-9 text-center">
                                            <h5 style="font-weight: 400;">MAXIMUM CHOICE</h5>
                                            <p style="font-size:12px;" class="text-center">Book from the selection of buses, including AC, Non-AC, Deluxe and more.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-3 ">
                            <div class="card cust-banifit">
                                <div class="card-body ml-1 pl-0 pr-0 mr-1 pb-0 mb-1">
                                    <div class="row">
                                        <div class=" col-sm-3 col-xs-3 text-center">
                                            <img src="http://127.0.0.1:8000/web/images/redbus/custsupport/customer_care.png" alt="" height="50">
                                        </div>
                                        <div class="col-sm-9  col-xs-9 text-center">
                                            <h5 style="font-weight: 400;">SUPERIOR CUSTOMER SERVICE</h5>
                                            <p style="font-size:12px;" class="text-center">We put our experience and relationships to good use and are available to solve your travel issues.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-3 ">
                            <div class="card cust-banifit">
                                <div class="card-body ml-1 pl-0 pr-0 mr-1 pb-0 mb-1">
                                    <div class="row">
                                        <div class=" col-sm-3 col-xs-3 text-center">
                                            <img src="http://127.0.0.1:8000/web/images/redbus/custsupport/lowest_Fare.png" alt="" height="50">
                                        </div>
                                        <div class="col-sm-9  col-xs-9 text-center">
                                            <h5 style="font-weight: 400;">LOWEST PRICES</h5>
                                            <p style="font-size:12px;" class="text-center">We always give you the lowest price with the best partner offers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-3 ">
                            <div class="card cust-banifit">
                                <div class="card-body ml-0 pl-0 pr-0 mr-1 pb-0 mb-0">
                                    <div class="row">
                                        <div class=" col-sm-3 col-xs-3 text-center">
                                            <img src="http://127.0.0.1:8000/web/images/redbus/custsupport/benefits.png" alt="" height="50">
                                        </div>
                                        <div class="col-sm-9  col-xs-9 text-center">
                                            <h5 style="font-weight: 400;">UNMATCHED BENEFITS</h5>
                                            <p style="font-size:12px;" class="text-center">We take care of your travel beyond ticketing by providing you with innovative and unique benefits.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="border-top:1px solid #c3cbd1;border-bottom:1px solid #c3cbd1">
        <div class="container" >
            <div class="row mt-2 mb-0">
                <div class="col-md-7 col-lg-6 col-sm-12 col-xs-12">
                    <h4>Sign up for Exclusive Email-only Newsletter</h4>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mb-0">
                    <div class="form-group mb-3">
                        <label>Newsletter</label>
                        <div class="input-group m-b-20">
                            <input class="form-control" id="single-input" type="text" value="" placeholder="Email">
                            <div class="input-group-append">
                                <button type="button" id="check-minutes" class="btn waves-effect waves-light btn-info" style="background-color:rgb(33, 150, 243)">Newsletter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

