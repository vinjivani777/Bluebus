@extends('web.layout')


@section('page-title')

@endsection

@section('other-page-css')

    <style>
        .banner {
                width: 100%;
                height: 380px;
                overflow: hidden;
                position: relative;
                background: url({{asset('web/images/redbus/help-banner.png')}});
            }
    </style>
    
@endsection

@section('page-css')


@endsection

@section('content')

<div class="main-content">
    <div class="cancelltion">
       <div class="container-fluid ">
            <div class="row">
                <div class="col-12">
                    <div class="banner" id="banner"></div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xl-8 mx-auto">
                    <div id="accordion" class="mb-3">
                        <div class="card mb-1">
                            <div class="card-header" id="headingOne">
                                <h5 class="m-0">
                                    <a class="text-dark" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                        <i class="mdi mdi-help-circle mr-1 text-danger"></i>
                                        I need help with offers and promotions?
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1">
                            <div class="card-header" id="headingTwo">
                                <h5 class="m-0">
                                    <a class="text-dark" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                                        <i class="mdi mdi-help-circle mr-1 text-danger"></i>
                                        I need help with blueBus wallet?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1">
                            <div class="card-header" id="headingThree">
                                <h5 class="m-0">
                                    <a class="text-dark" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
                                        <i class="mdi mdi-help-circle mr-1 text-danger"></i>
                                        I need help with blueBus referral program?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-1">
                            <div class="card-header" id="headingFour">
                                <h5 class="m-0">
                                    <a class="text-dark" data-toggle="collapse" href="#collapseFour" aria-expanded="false">
                                        <i class="mdi mdi-help-circle mr-1 text-danger"></i>
                                        Need help to make a new bus ticket booking?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="collapseFour" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1">
                            <div class="card-header" id="headingFour">
                                <h5 class="m-0">
                                    <a class="text-dark" data-toggle="collapse" href="#collapseSeven" aria-expanded="false">
                                        <i class="mdi mdi-help-circle mr-1 text-danger"></i>
                                        I faced some technical issue with blueBus app/website?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="collapseSeven" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1">
                            <div class="card-header" id="headingFour">
                                <h5 class="m-0">
                                    <a class="text-dark" data-toggle="collapse" href="#collapseFive" aria-expanded="false">
                                        <i class="mdi mdi-help-circle mr-1 text-danger"></i>
                                        I faced some technical issue with blueBus app/website?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="collapseFive" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1">
                            <div class="card-header" id="headingFour">
                                <h5 class="m-0">
                                    <a class="text-dark" data-toggle="collapse" href="#collapseEight" aria-expanded="false">
                                        <i class="mdi mdi-help-circle mr-1 text-danger"></i>
                                        I do not want to receive promotional Email/SMS?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="collapseEight" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1">
                            <div class="card-header" id="headingFour">
                                <h5 class="m-0">
                                    <a class="text-dark" data-toggle="collapse" href="#collapseSix" aria-expanded="false">
                                        <i class="mdi mdi-help-circle mr-1 text-danger"></i>
                                        I do not want to receive promotional Email/SMS?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="collapseSix" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div> <!-- end #accordions-->
                </div> <!-- end col -->
            </div>
       </div>
    </div>
</div>

@endsection


@section('other-page-js')



@endsection


@section('after-js')


 

@endsection




        
   

