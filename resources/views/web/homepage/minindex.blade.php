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
                @foreach($promoCode as $promo)
                <div class="col-lg-3 col-sm-12 col-md-3 ">
                    <div class="card offer-list" style="border:1px solid #bdbaba;border-radius:0px ">
                        <img class="card-img-top img-fluid" src="{{ asset(''. $promo->promocode_image ) }}" style="border-radius:0px " alt="Card image cap">
                        <div class="card-body ml-1 pl-0 pr-0 mr-1 pb-0 mb-1">
                            <h5 class="card-title ml-0 pl-0 pr-0 mr-0 mt-0 pt-0">{{ $promo->promocode }}</h5>
                            <p style="    font-size: 12px;color: #000;font-weight: 400;margin: 0 0 7px;text-align: justify;">{{ $promo->description  }}</p>
                        <div class="float-left pl-1 pr-1 text-center" style="border:1px dashed #ef6614">
                            <p style="color:#ef6614;font-weight: 600;font-size:12px;margin:0;padding:0">Promocode</p>
                            <p style="color:#000;font-weight: 600;font-size:12px;margin:0;padding:0">{{ $promo->promocode }}</p>
                        </div>
                        <div class="float-right mt-3" style="box-sizing:border-box;font-size:10px;margin:0;padding:0" >
                                <svg class="vldt-icn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1" width="11px" height="11px">
                                    <g id="surface1">
                                        <path style=" " d="M 12 0 C 5.371094 0 0 5.371094 0 12 C 0 18.628906 5.371094 24 12 24 C 18.628906 24 24 18.628906 24 12 C 24 5.371094 18.628906 0 12 0 Z M 12 2 C 17.523438 2 22 6.476563 22 12 C 22 17.523438 17.523438 22 12 22 C 6.476563 22 2 17.523438 2 12 C 2 6.476563 6.476563 2 12 2 Z M 10.9375 3.875 L 10.5 12.0625 L 10.59375 12.9375 L 16.75 18.375 L 17.71875 17.375 L 12.625 11.96875 L 12.1875 3.875 Z " fill="#8d8a8a"></path>
                                    </g>
                                </svg>
                                Validity: {{ date($promo->expiry_date) }}
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row mt-4 m-0 p-0">
            <div class="col-12 float-left p-0 m-0 ">
                <h5>WE PROMISE TO DELIVER</h5>
            </div>
        </div>
        {{-- <div class="container"> --}}
            <div class="row">
                <div class="col-lg-3 col-sm-12 col-md-3  mt-1">
                    <div class="card cust-banifit">
                        <div class="card-body ml-0 pl-0 pr-0 mr-1 pb-0 mb-0">
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
        {{-- </div> --}}
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

