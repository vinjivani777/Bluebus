@extends('vendor.layout')


@section('page-title')

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
                                <li class="breadcrumb-item active">PromoCode Edit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Promo Code</h4>
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
                    <form action="{{route('vendor.promo-detail.update',['id'=>$edit->id])}}" id="form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 ">
                                <h4 class="card-title mt-0 mb-0">Edit Promo Code</h4>
                            </div>
                            <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                           <div class="col-6 col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" required class="form-control" value="{{$edit->promocode}}" name="code" id="code" placeholder="Code">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="amount">Max Discount</label>
                                    <input type="number" required class="form-control" value="{{$edit->maxdiscount}}" name="maxdiscount" id="maxdiscount" placeholder="Max Discount">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="amount">Minimum Order Value</label>
                                    <input type="number" required class="form-control" value="{{$edit->minordervalue}}" name="minordervalue" id="minordervalue" placeholder="Min Order Value">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="expiry_date">Expiry Date</label>
                                    <input type="date" required class="form-control" value="{{$edit->expiry_date}}" name="expiry_date" id="expiry_date" placeholder="Expiry Date">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group ">
                                    <label for="type">Type</label><br>
                                    <div class="ml-1 radio radio-info form-check-inline mt-2">
                                        <input type="radio" id="flat" class="type" value="Flat" name="type"  >
                                        <label for="inlineRadio1"> Flat</label>
                                    </div>
                                    <div class="radio form-check-inline">
                                        <input type="radio" id="percentage" class="type" value="Percentage" name="type"   >
                                        <label for="inlineRadio2"> Percentage </label>
                                        <input type="text" class="form-control" id="percentageamount" name="percentageamount" style="display:none;margin-left:50px" placeholder="10%-60%"  value="{{$edit->percentage}}">
                                        <input type="text"  class="form-control" id="flatamount" name="flatamount" style="margin-left:50px" placeholder="Flat Amount" value="{{$edit->percentage}}">
                                    </div>
                                </div>
                            </div>
                        </div>
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



@section('other-page-css')

@endsection

@section('other-page-js')
<script type="text/javascript">
    $(document).ready(function(){
        // $("#flat").prop("checked",true);
        $("#flatamount").keyup(function(){
            one = two = 0;
            var one=$(this).val();
            var two=$("#maxdiscount").val();
            if( Number(one) <= Number(two)){
                $("#flatspan").hide();
                $("#submit").show();
            }
            else{
                $("#flatspan").show();
                $("#submit").hide();
            }
        })

        $("#percentageamount").keyup(function(){
            if(Number($(this).val()) <= 60){
                $("#percentagespan").hide();
                $("#submit").show();
            }
            else{
                $("#percentagespan").show();
                $("#submit").hide();
            }
        })

        $("#flat").click(function(){
            // alert("?hii");
            $("#flatamount").show(1000);
            $("#percentageamount").hide(1000);
            $("#flatamount").attr("required", true);
            $("#percentageamount").attr("required", false);

        })
        $("#percentage").click(function(){
            // alert("hii");
            $("#flatamount").hide(1000);
            $("#percentageamount").show(1000);
            $("#percentageamount").attr("required", true);
            $("#flatamount").attr("required", false);
        })
    });
</script>
@endsection
