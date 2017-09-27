<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config("ayarlar.baslik") }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('front/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('front/css/modern-business.css')}}" rel="stylesheet">
    <link href="{{asset('css/timeline.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('front/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Bootstrap -->





    <link href="{{asset('css/date_picker.css')}}" rel="stylesheet">
    <style type="text/css">
        #deceased{
            background-color:#FFF3F5;
            padding-top:10px;
            margin-bottom:10px;
        }
        .remove_field{
            float:right;
            cursor:pointer;
            position : absolute;
        }
        .remove_field:hover{
            text-decoration:none;
        }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <!-- jQuery -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <![endif]-->


    <link rel="stylesheet" href="{{asset('css/flatpickr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/confetti.css')}}">
    <script src="{{asset('js/flatpickr.js')}}"></script>
    <script type='text/javascript'>
        $( document ).ready(function() {
            $(".selector").flatpickr({
                dateFormat : 'Y-m-d',
                altInput   : true,
                altFormat  : 'd.m.Y'
                //minDate    : new Date()
            });

            $(".timector").flatpickr({
                enableTime: true,
                noCalendar: true,

                enableSeconds: false, // disabled by default

                time_24hr: true, // AM/PM time picker is used by default

                // default format
                dateFormat: "H:i",

                // initial values for time. don't use these to preload a date
                defaultHour: 24,
                defaultMinute: 0

                // Preload time with defaultDate instead:
                // defaultDate: "3:30"
                //minDate    : new Date()
            });
        });
    </script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script language="JavaScript">

        $(function(){
            $('#akis').keypress(function(e){
                if(e.which == 13) {
                    //dosomething
                    $('#akis_btn').click();
                }
            })
        })

    </script>

</head>
<body data-status="{{Session::get('durum')}}">
@include('front.partials.menu')
<div class="container">
<hr>
    <div class="row">
        <!-- Search Form -->
        @if(Auth::check())
        <div class="col-md-12">
            <div>
                <a href="/HastaEkle" class="btn btn-danger"><i class="fa fa-plus"></i>Yeni Kayıt</a>
                <a href="/Hastalar" class="btn btn-primary"><i class="fa fa-home"></i>  Sevkler</a>
                <a href="/Sonlananlar" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Sonlanmış Sevk</a>
                <a href="/Askom" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Askom</a>
            </div>
        </div>
            @endif
    </div>
<hr>
@yield('content')
</div>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('front/js/bootstrap.js')}}"></script>
<!-- Toastr -->
<link href="{{asset('css/toastr.css')}}" rel="stylesheet">
<script src="{{asset('js/toastr.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>


</body>

</html>
