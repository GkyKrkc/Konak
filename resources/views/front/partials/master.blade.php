<!DOCTYPE html>
<html lang="en" ng-app itemscope="" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Bootstrap CSS-->
    <link href="{{asset('assets\vendors\bootstrap\css\bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="{{asset('assets\vendors\font-awesome\css\font-awesome.min.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!-- IE 9-->
    <!-- Vendors-->
    <link rel="stylesheet" href="{{asset('assets\vendors\flexslider\flexslider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\vendors\swipebox\css\swipebox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\vendors\slick\slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\vendors\slick\slick-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\vendors\animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\vendors\bootstrap-datepicker\css\bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\vendors\pageloading\css\component.min.css')}}">
    <!-- Font-icon-->
    <link rel="stylesheet" href="{{asset('assets\fonts\font-icon\style.css')}}">
    <!-- Style-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\css\layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets\css\elements.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets\css\extra.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets\css\widget.css')}}">
    <link id="colorpattern" rel="stylesheet" type="text/css" href="{{asset('assets\css\color\colordefault.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets\css\responsive.css')}}">
    <!-- Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <!-- Script Loading Page-->
    <script src="{{asset('assets\vendors\html5shiv.js')}}"></script>
    <script src="{{asset('assets\vendors\respond.min.js')}}"></script>
    <script src="{{asset('assets\vendors\pageloading\js\snap.svg-min.js')}}"></script>
    <script src="{{asset('assets\vendors\pageloading\sidebartransition\js\modernizr.custom.js')}}"></script>
</head>
<body>

<!-- jQuery-->
<script src="{{asset('assets\vendors\jquery-1.10.2.min.js')}}"></script>
<!-- Angular-->
<script src="{{asset('assets\js\angular.min.js')}}"></script>

<!-- Bootstrap JavaScript-->
<script src="{{asset('assets\vendors\bootstrap\js\bootstrap.min.js')}}"></script>
<!-- Vendors-->
<script src="{{asset('assets\vendors\flexslider\jquery.flexslider-min.js')}}"></script>
<script src="{{asset('assets\vendors\swipebox\js\jquery.swipebox.min.js')}}"></script>
<script src="{{asset('assets\vendors\slick\slick.min.js')}}"></script>
<script src="{{asset('assets\vendors\isotope\isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets\vendors\jquery-countTo\jquery.countTo.min.js')}}"></script>
<script src="{{asset('assets\vendors\jquery-appear\jquery.appear.min.js')}}"></script>
<script src="{{asset('assets\vendors\parallax\parallax.min.js')}}"></script>
<script src="{{asset('assets\vendors\gmaps\gmaps.min.js')}}"></script>
<script src="{{asset('assets\vendors\audiojs\audio.min.js')}}"></script>
<script src="{{asset('assets\vendors\vide\jquery.vide.min.js')}}"></script>
<script src="{{asset('assets\vendors\pageloading\js\svgLoader.min.js')}}"></script>
<script src="{{asset('assets\vendors\pageloading\js\classie.min.js')}}"></script>
<script src="{{asset('assets\vendors\pageloading\sidebartransition\js\sidebarEffects.min.js')}}"></script>
<script src="{{asset('assets\vendors\nicescroll\jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('assets\vendors\wowjs\wow.min.js')}}"></script>
<script src="{{asset('assets\vendors\skrollr.min.js')}}"></script>
<script src="{{asset('assets\vendors\bootstrap-datepicker\js\bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets\vendors\jquery-cookie\js.cookie.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
<!-- Own script-->
<script src="{{asset('assets\js\layout.js')}}"></script>
<script src="{{asset('assets\js\elements.js')}}"></script>
<script src="{{asset('assets\js\widget.js')}}"></script>


@yield('content')
@include('front.footer')
</body>
</html>