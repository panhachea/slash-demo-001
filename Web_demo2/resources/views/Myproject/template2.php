<!doctype>
<html>
<head >
    <title>

    </title>
    <link href="css/template2.css" rel="stylesheet" type="text/css" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Name">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        /*
        .mySlides {display:none;}
        .w3-left, .w3-right, .w3-badge {
            cursor: pointer;
            margin-top: -18%;
            font-size: 45px;
            color: gainsboro;
            opacity: 0;
        }


        .mySlides:hover .w3-left,.mySlides:hover,.w3-right{
            opacity: 1;

        }
*/



        /*.w3-badge {
            height:3px;
            width:40px;
            margin-right:5px;

            position:relative;
            display: inline-block;
            transition: background-color 0.6s ease;
            cursor: pointer;
            bottom: 50px;
         }*/
    </style>


</head>
<body>

<div class="Container">
    <div class="Header">
        <div class="Navigation-bar navigation-shadow navbar-inverse navbar-fixed-top">
            <div class="Top_header">
                <!--div on top of menu -->
                <div class="Top_left">
                    <!-- logo title-->
                    <div class="Logo">

                        <!--<span style="background:darkorange;" >Y</span>
                        <span  style="background: #2a88bd;width:17px;">S</span>
                        <span  style="background: darkgreen;width:17px;">L</span><br/>
                        <p class="last_texts_top">Yellow Sea Logistics Co., Ltd</p>-->

                        <img src="img/yellow-sea-logo-white-no-text.png" class="symbol">
                        <p class="sub_Texts">Yellow Sea Logistics Co., Ltd</p>





                    </div>
                </div>
                <div class="Top_right">
                    <div class="navis">
                        <!--navigation place at top-->

                        <ul>
                            <li><a href="#">CONTACT US</a></li>
                            <li><a href="#">QUOTE REQUEST</a></li>
                            <li><a href="#">NEWS</a></li>
                            <li><a href="#">PRODUCTS & SERVICE</a></li>
                            <li><a href="#">ABOUT</a></li>
                            <li onclick="active" style="border-bottom:1px white solid;">
                                <a href="#">HOME</a></li>

                        </ul>
                    </div>

                </div>
            </div>

        </div>
        <div class="container-header">

            <!-- first slide-->
            <div class="slide-contain fade" >

                <img src="img/new-slide-1.jpg" class="background-img" style="width: 100%; height: 675px;">

                <div class="sub_bg_img">
                    <p class="sub_text">
                        By Ocean or Air, FCL or LCL, we believe that we are the one for you
                        . We focus to offer the fast and premium
                        service, from Door to Door / Port to Port / Door to Port / Port to Door.
                    </p>
                    <br>
                    <input type="text" class="btn" value="Quote Request">
                </div>

            </div>

            <!--  second slide-->

            <div class="slide-contain fade" >

                <img src="img/y-about-2.jpg" class="background-img" style="width:100%; height: 675px;">

                <div class="sub_bg_img">
                    <p class="sub_text">
                        YELLOW SEA LOGISTICS offers the supports for the goods transportation
                        both locally and globally such as Rail Freight, Intermodal, Air Freight,
                        Ocean Freight, Custom Broker, and Warehousing/Distribution.
                    </p>
                    <br>
                    <input type="text" class="btn" value="Quote Request">
                </div>

            </div>

            <!-- third slide-->

            <div class="slide-contain fade" >

                <img src="img/y-slide-3.JPG" class="background-img" style="width: 100%; height: 675px;">

                <div class="sub_bg_img">
                    <p class="sub_text">
                        Storage is crucially important for your cargos as it is
                        the starting point before bringing your cargos to the
                        world or to your retails shop.
                    </p>
                    <br>
                    <input type="text" class="btn" value="Quote Request">
                </div>

            </div>

            <!-- four slide-->
            <div class="slide-contain fade" >

                <img src="img/y-slide-3.JPG" class="background-img" style="width: 100%; height: 675px;">

                <div class="sub_bg_img">
                    <p class="sub_text">
                        YELLOW SEA LOGISTICS offers the supports
                        for the goods transportation both locally and
                        globally such as Rail Freight, Intermodal, Air Freight,
                        Ocean Freight, Custom Broker, and Warehousing/Distribution

                    </p>
                    <br>
                    <input type="text" class="btn" value="Quote Request">
                </div>

            </div>

            <!-- endl slide 5-->

            <!--<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>-->



            <button class=" w3-button prev w3-black" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button next w3-black" onclick="plusDivs(1)">&#10095;</button>

            <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                    showDivs(slideIndex += n);
                }

                function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("fade");
                    if (n > x.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = x.length}
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[slideIndex-1].style.display = "block";
                }
            </script>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
            </div>
        </div>





    </div>






    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlide(slideIndex += n);
        }
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slide-contain");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            slideIndex++;
            if (slideIndex> slides.length) {slideIndex = 1}
            setTimeout(showSlides,10000); // Change image every 2 seconds

        }
        //dot

    </script>


    <div class="letter">
        <h4 class="about">About<span style="color:yellow;"> Yellowsea Logistic</span></h4>
        <p class="t_about">Yellow Sea Logistics offers the supports for the goods transportation both locally and globallly such as Rail
            Freight. Intermodal, Air Freight, Custom Broker, and WarehousingDistrubute.</p>
        <p class="t_about">Bason on our strong assets and facilities, we have beenmotivated to start out first
            service providing in 2016, and then with many more services from the start to the end.
            We would like our customers to rest assured and let us take care of the rest for you.We are new
            in term of company,but we havea talented and
            experience learn here to ensure a high quality servicebeing delivered and satisfiedour cutomers.</p>
        <p class="t_about">We are doing our best as a respondiblr budinrdd partner and a customer tocused service provider
            to bring value and solution to your business developmentas well as ours.</p>
    </div>
    <div class="last_header_img">
        <img src="img/truck-logistic.jpg" class="last_pic">



    </div>

</div>



<div class="Body">
    <h3 class="title">Product & Service</h3>
    <hr class="lines_top">

    <div class="first_title">

        <div class="text_left">
            <h3 class="sub_title">Intermodal Service</h3>
            <p class="text_sub_title">
                Our own product is to provide you the stable but qualitied delivery service.We have a
                station where you can essily drop your cargo and have everything to us.On top of that are have
                the intermodal service to support you an all in delivery to yor warehouse directly.</p>
            <p class="text_sub_title">
                We have a strong product as we have a warehouse combined with locak intermodal service.
                It will sarve youome,oop and security.
                Your cargos will dilivered at the destination all at the same time.</p>

        </div>
        <div class="pic_right">
            <img src="img/intermodal.jpg" style="height:220px;width:100%;">

        </div>

    </div>

    <div class="sec_line"><br>
        <hr class="lines_top"> <br>
        <div class="pic_left">
            <img src="img/export_brokerage.jpg" style="height: 220px;">

        </div>


        <div class="text_right">
            <h3 class="sub_title"> Freight Forwarding</h3>
            <p class="text_sub_title">Our own product is to provide you the stable but qualitied
                delivery service.We have a station where you can essily drop
                your cargo and have everything to us.On top of that are have
                the intermodal service to support you an all in delivery to yor warehouse directly.
            </p>
            <p class="text_sub_title">
                We have a strong product as we have a warehouse combined with locak intermodal service.It will sarve youome,
                oop and security. Your cargos will dilivered at the destination all at the same time.</p>
        </div>
    </div>

    <div class="thr_line">
        <br>
        <hr class="lines_top">
        <div class="Text_lefts">
            <h3 class="sub_title">Custom House Brokerage</h3>
            <p class="text_sub_title">Our own product is to provide you the stable but qualitied delivery
                service.We have a station where you can essily drop your cargo and have everything to us.On top of that are have
                the intermodal service to support you an all in delivery to yor warehouse directly.</p>
            <p class="text_sub_title">We have a strong product as we have a warehouse combined with locak intermodal service.It will
                sarve youome,oop and security.
                Your cargos will dilivered at the destination all at the same time.</p>

        </div>

        <div class="Pic_rights">
            <img src="img/custom-brokerage.jpg" style="height:220px;">

        </div>

    </div>

    <div class="last_line">
        <br>
        <hr class="lines_top">
        <div class="Pic_Left">
            <img src="img/y-about-3.jpg" style="height: 220px">

        </div>
        <div class="Text_Right">
            <h3 class="sub_title">Warehousing And Distribution</h3>
            <p class="text_sub_title">Our own product is to provide you the stable but
                qualitied delivery service.We have a station where
                you can essily drop your cargo and have everything to
                us.On top of that are have the intermodal service to support
                you an all in delivery to yor warehouse directly.
            </p>
            <p class="text_sub_title">We have a strong product as we have a warehouse combined with locak intermodal service
                .It will sarve youome,oop and security. Your cargos will dilivered at the destination all at the same time.</p>

        </div>
    </div>
    <br>
</div>


<div class="Footer">

    <div class="Last_bg">

        <img src="img/wharehouse.jpg" style="height:357px;width:100%;">


        <div class="mirror_bg">
            <p class="bg_text">YELLOW SEA LOGISTICS offers the suports for the goosds transportation both locally and globally as
                ,Rail Freight,Intermodal,Air Freight,Ocean Freigth,Custom Broker, and Warehousing/Distribution.</p>
            <input type="text"class="btn_last" value="Quote Request">

        </div>

        <div class="Socailimg">
            <!--<img src="img/follow.png" class="follow">-->
            <p class="follow">FOLLOW US</p>
            <hr class="line_media">
            <img src="img/facebook.png" class="facebook">
            <img src="img/twitter.png" class="twitter">
            <img src="img/instragram.png " class="instragram">
            <img src="img/google.png" class="google">
            <img src="img/youtube.jpg" class="youtube">


        </div>
    </div>
    <div class="end">
        <ul>
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

</div>





</div>


</body>
</html>