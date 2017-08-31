<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
    <!--animation-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="css/template2.css"/>

    <script rel="stylesheet" type="text/css" src=""></script>
    {{--Social Media button--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!-- Styles -->
    <script src="{{asset('userpage')}}"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>


{{--<nav class="navbar navbar-fixed-top mytop">--}}
{{--<div class="navbar-header navbar-default" >--}}
{{--<button type="button" class="navbar-toggle  marg-top-0 collapsed" aria-expanded="false"--}}
{{--data-toggle="collapse" data-target="#myNavbar" aria-controls="navbarResponsive"--}}
{{--aria-label="Toggle navigation">--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--</button>--}}




{{--<div class="navbar-brand flex-1 topLogo" >--}}
{{--<img src="img/yellow-sea-logo-white-no-text.png" alt="logo" class="main_logo">--}}
{{--<p class="sub_logo">Yellow Sea Logistics Co.,Ltd</p>--}}
{{--</div>--}}




{{--<div class=" collapse navbar-collapse navbar-right " id="myNavbar" style="background-color:  #ffcc00;" >--}}
{{--<ul class="nav navbar-nav">--}}
{{--<li id="myList" class="hidden-xs ">--}}
{{--<a href="#"></a>--}}
{{--</li>--}}
{{--<li class="nav-item" >--}}
{{--<a class="navbar-link active" href="#">Home</a>--}}
{{--</li>--}}
{{--<li class="nav-item">--}}
{{--<a class="navbar-link" href="#">ABOUT US</a>--}}
{{--</li>--}}

{{--<li class="nav-item">--}}
{{--<a class="navbar-link" href="#">PRODUCT & SERVICE</a>--}}
{{--</li>--}}
{{--<li class="nav-item">--}}
{{--<a class="navbar-link" href="#">NEWS</a>--}}
{{--</li>--}}
{{--<li class="nav-item">--}}
{{--<a class="navbar-link" href="#">QUOTE REQUEST</a>--}}
{{--</li>--}}
{{--<li class="nav-item">--}}
{{--<a class="navbar-link" href="#">CONTACT US</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}

{{--</div>--}}



{{--<div class="collapse navbar-collapse navbar-right  mydiv_list" id="myNavbar" style="background-color: #ffcc00; width:47%;padding:0;margin: 0;" >--}}
{{--<ul class="nav navbar-nav  ul_list">--}}
{{--<li id="myList" class="nav-item mynav ">--}}
{{--<a href="#"></a>--}}
{{--</li>--}}
{{--<li class="nav-item mynav" >--}}
{{--<a class="navbar-link active" href="#">Home</a>--}}
{{--</li>--}}
{{--<li class="nav-item  mynav">--}}
{{--<a class="navbar-link" href="#about">ABOUT US</a>--}}
{{--</li>--}}

{{--<li class="nav-item  mynav">--}}
{{--<a class="navbar-link" href="#product&service">PRODUCT & SERVICE</a>--}}
{{--</li>--}}
{{--<li class="nav-item  mynav">--}}
{{--<a class="navbar-link" href="#news">NEWS</a>--}}
{{--</li>--}}
{{--<li class="nav-item  mynav">--}}
{{--<a class="navbar-link" href="#quote_Request">QUOTE REQUEST</a>--}}
{{--</li>--}}
{{--<li class="nav-item  mynav">--}}
{{--<a class="navbar-link" href="#contact" style="margin-right:0px;">CONTACT US</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}

{{--</nav>--}}
@yield('body')

<div class="footer">

    <div class="Socailimg">
        <!--<img src="img/follow.png" class="follow">-->
        <p class="follow">FOLLOW US</p>
        <hr class="line_media">
        <img src="img/facebook.png  " class="facebook  ">
        <img src="img/twitter.png" class="twitter">
        <img src="img/instragram.png " class="instragram">
        <img src="img/google.png" class="google">
        <img src="img/youtube.jpg" class="youtube">


    </div>

    <div class="end">
        <ul class="end_ul">
            <li>Contact Us</li>
            <li>Quote Request</li>
            <li>News</li>
            <li>Product & Service</li>
            <li>About</li>
            <li>Home</li>

        </ul>
    </div>
    <div class="last_copy">
        <hr class="middle_line">

        <p class="copyright">©2017 Yellow Sea Logistics. All rights reserved. Designed by<span style="color:white;">
                Flexitech.</span></p>
    </div>

</div>


</body>
</html>
