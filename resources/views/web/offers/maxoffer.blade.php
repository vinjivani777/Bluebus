    <div class="container ">
        <div class="row mt-5">
            <div class="col-12">
                <div class="display-block   text-center" style="font-size:30px">Amazing Travel Offers and Deals</div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="container mx-auto">
                    <div class="row  mx-auto">
                        @foreach($promoCode as $promo)
                        <div class="col-lg-3 col-sm-6 colxs-12 col-md-4 ">
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
        </div>
    </div>
