@extends('web.layout')


@section('page-title')

@endsection

@section('other-page-css')

      <!-- Plugins css -->
      <link href="{{ asset('web/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/css" />
      <link href=" {{ asset('web/libs/animate/animate.min.css') }} " rel="stylesheet" type="text/css" />

      {{-- <script src="{{ asset('web/libs/pages/form-pickers.min.css') }}"></script> --}}


@endsection

@section('page-css')

        <style>

            #ui-id-1{
                height:200px;
                overflow: auto;
            }

            .desc-op-new {
                color: #4a4a4a;
                font-size: 16px;
                font-weight: 300;
                margin-top: 10px;
            }
            .seo a {
                display: block;
                color: #444343;
                cursor: pointer;
                margin-bottom: 15px;
            }
            a:hover{
                text-decoration: none;
                color:#d84f57;
                cursor: pointer;
                -webkit-tap-highlight-color: transparent;
            }
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
            .search_input{
                border-radius:0px;
            }
            .input-icons i {
            position: absolute;
            }

            .input-icons {
                width: 100%;
                /* margin-bottom: 10px; */
            }

            .icon {
                padding: 10px;
                min-width: 50px;
                text-align: center;
            }
            .form-control{
                border-style:solid;
                border-width: 0px 0px 0px 0px;
            }
            .return{
                transform:rotate(180deg);
            }
        </style>

@endsection

@section('content')

        <div class="main-content">
            <div class="max-home" id="max-home">
                @include('web.homepage.maxindex')
            </div>
            <div class="row ml-2 mr-2 mt-3 mini-home" id="mini-home">
                @include('web.homepage.minindex')
            </div>
        </div>

@endsection


@section('other-page-js')

            <!-- Plugins js-->
            <script src="{{ asset('web/libs/flatpickr/flatpickr.min.js') }}"></script>
            <script src="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
            <script src="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script>

            <!-- Init js-->
            <script src="{{ asset('web/js/pages/form-pickers.init.js') }}"></script>


    <!-- Login JS -->
        <script>

            $(document).ready(function(){
                 //mini screen operations
                 $("#minisearch_bus").prop("disabled", true); 
                $('#bus_img').click(function(){
                    var source= $("#minisource_place").val();
                    var dest= $("#minidestination_place").val();
                    $("#minisource_place").val(dest);
                    $("#minidestination_place").val(source);
                });
                $("#minisource_place").on("keyup",function(){ 
                    var source= $("#minisource_place").val().length;
                    var dest= $("#minidestination_place").val().length;
                    console.log(source);
                    console.log(dest);
                    if((source > 0)&&(dest > 0))
                    {
                        console.log(true);
                        $("#minisearch_bus").prop("disabled", false); 
                    }else{
                        console.log(false);
                        $("#minisearch_bus").prop("disabled", true); 
                    }                   
                });

                $("#minidestination_place").on("keyup",function(){ 
                    var source= $("#minisource_place").val().length;
                    var dest= $("#minidestination_place").val().length;
                    console.log(source);
                    console.log(dest);
                    if((source > 0)&&(dest > 0))
                    {
                        console.log(true);
                        $("#minisearch_bus").prop("disabled", false); 
                    }else{
                        console.log(false);
                        $("#minisearch_bus").prop("disabled", true); 
                    }                    
                });

                //max screen events
                $("#search_bus").prop("disabled", true); 

                $("#source_place").on("keyup",function(){ 
                    var source= $("#source_place").val().length;
                    var dest= $("#destination_place").val().length;
                    console.log(source);
                    console.log(dest);
                    if((source > 0)&&(dest > 0))
                    {
                        console.log(true);
                        $("#search_bus").prop("disabled", false); 
                    }else{
                        console.log(false);
                        $("#search_bus").prop("disabled", true); 
                    }                   
                });

                $("#destination_place").on("keyup",function(){ 
                    var source= $("#source_place").val().length;
                    var dest= $("#destination_place").val().length;
                    console.log(source);
                    console.log(dest);
                    if((source > 0)&&(dest > 0))
                    {
                        console.log(true);
                        $("#search_bus").prop("disabled", false); 
                    }else{
                        console.log(false);
                        $("#search_bus").prop("disabled", true); 
                    }                    
                });
            });
            
            $('#optLayout').hide();
            $('#optLayout').css("display","none");

            $('#continue').click(function(){

                var mobileNo=$('#mobileNo').val();
                var valid;
                if(mobileNo != "")
                {

                    $('#mobileNo').css('border','1px solid #ced4da ')

                }else{

                    $('#mobileNo').css('border','1px solid red')

                    return valid = false;
                }

                $.ajax({

                    url:'{{route('mobileno.login')}}',
                    data:{"mobileNo":mobileNo,"_token": "{{ csrf_token() }}" },
                    type:"POST",
                    success:function(responce)
                    {
                        if(responce=="Success")
                        {
                            sessionStorage.setItem("mobileNo", mobileNo);

                            $('#mobileNoLayout').hide();
                            $('#mobileNoLayout').css('display','none');
                            $('#optLayout').hide();
                            $('#optLayout').css("display","");


                        }else{

                            $('#optLayout').hide();
                            $('#optLayout').css("display","none");
                        }
                    }

                })
            });



            $('#otpvarify').click(function(){

                var OTP=$('#OTP').val();
                var valid;
                if(OTP != "")
                {

                    $('#OTP').css('border','1px solid #ced4da ')

                }else{

                    $('#OTP').css('border','1px solid red')

                    return valid = false;
                }
                var mobileNo=sessionStorage.getItem("mobileNo")

                $.ajax({

                    url:'{{route('opt.varify')}}',
                    data:{"OTP":OTP,"mobileNo":mobileNo,"_token": "{{ csrf_token() }}" },
                    type:"POST",
                    success:function(responce)
                    {
                        if(responce=="Success")
                        {
                            sessionStorage.removeItem("mobileNo");
                            window.location.reload();

                        }else{

                            $('#OTP').css('border','1px solid red')

                        }
                    }

                })
            });


        </script>


@endsection


@section('after-js')


        <script type="text/javascript">

            var path = "{{ route('source') }}";
                $(document).ready(function() {
                    $('.source_place').autocomplete({

                        source: function(request, response) {
                            $.ajax({
                            url: path,
                            data: {
                                    term : request.term
                            },
                            dataType: "json",
                            success: function(data){
                            var resp = $.map(data,function(obj){
                                    //console.log(obj.board_point);
                                    return obj.city_name;
                            });

                            response(resp);
                            }
                        });
                    },
                    minLength: 1
                    });
                });


            var path = "{{ route('dest') }}";
                $(document).ready(function() {
                    $('.destination_place').autocomplete({

                        source: function(request, response) {
                            $.ajax({
                            url: path,
                            data: {
                                    term : request.term
                            },
                            dataType: "json",
                            success: function(data){
                            var resp = $.map(data,function(obj){
                                    //console.log(obj.board_point);
                                    return obj.city_name;
                            });

                            response(resp);
                            }
                        });
                    },
                    minLength: 1
                    });
                });

        </script>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


@endsection
