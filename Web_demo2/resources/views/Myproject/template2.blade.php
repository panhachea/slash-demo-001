<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!-- Styles -->
    <script src="js/homepage.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/templateLink.css">
    <link type="text/css" rel="stylesheet" href="css/N_Q_C.css">
    {{--icon link--}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--    {{--Social Media button--}}-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--    link -->
</head>
<body>

<nav class="navbar navbar-fixed-top">
    <div class="navbar-header navbar-default">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="logo news_logo">
            <img src="img/yellow-sea-logo-white-no-text.png" alt="logo" class="img-responsive imgs news_logo" style="">
            <p class="sub_text_logo news_text_logo">Yellow Sea Logistics Co.,Ltd</p>
        </div>
    </div>



    <div class=" collapse navbar-collapse navbar-right " id="myNavbar" style="background-color:  #ffcc00;" >
        <ul class="nav navbar-nav myul" id="menu">
            <li id="myList" class="hidden-xs ">
                <a href="#"></a>
            </li>
            <li class="nav-item myli" >
                <a class="navbar-link {{Html::clever_link('linkhome')}}" href="/linkhome">Home</a>
            </li>
            <li class="nav-item myli">
                <a class="navbar-link" href="/linkhome#aboutus" id="about">ABOUT US</a>
            </li>

            <li class="nav-item myli">
                <a class="navbar-link" href="/linkhome#product_service" id="product">PRODUCT & SERVICE</a>
            </li>
            <li class="nav-item myli">
                <a class="navbar-link {{Html::clever_link('news')}}"  href="{{url('/news')}}">NEWS</a>
            </li>
            <li class="nav-item myli">
                <a class="navbar-link {{Html::clever_link('quote_request')}}"  href="{{url('/quote_request')}}">QUOTE REQUEST</a>
            </li>
            <li class="nav-item myli">
                <a class="navbar-link {{Html::clever_link('contact_us')}}" href="{{url('/contact_us')}}">CONTACT US</a>
            </li>
        </ul>
    </div>

</nav>
<script>
    $(document).ready(function() {
        $("#about,#product").on('focus', function (event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body, #aboutus,#product_service').animate({
                    scrollTop: $(hash).offset().top
                }, 1000, function () {
                    window.location.hash = hash;
                });
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#menu li a").click(function(){
            console.log($('#menu li a'));
            $("a").each(function(){
                $('a').removeClass('active');
            });
            $(this).addClass('active');
        });
    });
</script>
{{--<!--end navigation-->--}}

{{--<!--<!--slide-->--}}
@yield('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md visible-sm visible-xs text-center bgfollow" style="background:lavender;">
        <div class="footer_text">
            <p>FOLLOW US</p>
            <hr  class="follow_line" >
        </div>
        <div class="Social_Item">
            <!-- Add font awesome icons -->
            <a href="https://www.facebook.com/" class="fa fa-facebook-square  " style="font-size: 40px;margin-top:20px;"></a>
            <a href="#" class="fa fa-twitter" style="font-size: 40px ;margin-top:20px;"></a>
            <a href="#" class="fa fa-instagram" style="font-size: 40px;margin-top:20px;"></a>
            <a href="#" class="fa fa-google-plus" style="font-size: 40px;margin-top:20px;"></a>
            <a href="#" class="fa fa-youtube-play" style="font-size: 40px;margin-top:20px;"></a>
        </div>
    </div>
    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md visible-sm visible-xs text-center bglast">
        <div class="End_footer">
            <div class="NavbarFooter" style="font-family: Roboto Condensed,Serif;font-size: 18px;">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About US</a></li>
                    <li><a href="#">Products & Service</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Quote Request</a></li>
                    <li><a href="#">Contact US</a></li>
                </ul>
            </div>
            <hr class="last_line" >
            <div class="copyRight copyright">
                <p>&copy; 2017 Yellow Sea Logistic. All right reserved.Designed by <strong>Flexitech</strong></p>
            </div>
        </div>
    </div>



</body>
</html>