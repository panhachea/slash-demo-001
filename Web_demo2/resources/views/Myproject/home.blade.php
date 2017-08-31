@extends('Myproject.main')
@section('body')

    <div class="container-fluid">



        <section class="main-slider">
            <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">


                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active" style="width:30px;height:2px;"></li>
                    <li data-target="#myCarousel" data-slide-to="1" style="width:30px;height:2px;"></li>
                    <li data-target="#myCarousel" data-slide-to="2" style="width:30px;height:2px;"></li>
                    <li data-target="#myCarousel" data-slide-to="3" style="width:30px;height:2px;"></li>
                    <li data-target="#myCarousel" data-slide-to="4" style="width:30px;height:2px;"></li>

                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner myimg">

                    <!-- Slide 1 : Active -->
                    <div class="item active">
                        <img src="img/new-slide-1.jpg" alt=""  class="img-responsive myslide">
                        <div class="carousel-caption text_slide">
                            <p class="text-center">
                                YELLOW SEA LOGISTICS offers the supports for the goods transportation both locally and globally
                                such as Rail Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing/Distribution.
                            </p>

                        </div><!-- /.carousel-caption -->
                    </div><!-- /Slide1 -->

                    <!-- Slide 2 -->
                    <div class="item ">
                        <img src="img/y-slide-2.JPG" alt="" class="img-responsive myslide" >
                        <div class="carousel-caption text_slide">
                            <p class="text-center">
                                YELLOW SEA LOGISTICS offers the supports for the goods transportation both locally and globally such
                                as Rail Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing/Distribution.
                            </p>

                        </div><!-- /.carousel-caption -->
                    </div><!-- /Slide2 -->

                    <!-- Slide 3 -->
                    <div class="item ">
                        <img src="img/y-slide-3.jpg" alt="" class="img-responsive  myslide" >
                        <div class="carousel-caption text_slide">
                            <p class="text-center">
                                By Ocean or Air, FCL or LCL, we believe that we are the one for you. We focus to offer the fast
                                and premium service, from Door to Door / Port to Port / Door to Port / Port to Door.
                            </p>
                        </div><!-- /.carousel-caption -->
                    </div><!-- /Slide3 -->

                    <!-- Slide 4 -->
                    <div class="item ">
                        <img src="img/y-about-2.jpg" alt="" class="img-responsive  myslide" >
                        <div class="carousel-caption text_slide">
                            <p class="text-center">
                                Storage is crucially important for your cargos asit is the starting point before bringing your cargos to the world or to your retails shop.
                            </p>

                        </div><!-- /.carousel-caption -->
                    </div><!-- /Slide4 -->
                    {{--slide5--}}

                    <div class="item ">
                        <img src="img/y-about-2.jpg" alt="" class="img-responsive  myslide" >
                        <div class="carousel-caption text_slide">
                            <p class="text-center">
                                YELLOW SEA LOGISTICS offers the supports for the goods transportation both locally and globally such
                                as Rail Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing/Distribution.
                            </p>

                        </div><!-- /.carousel-caption -->
                    </div><!-- /Slide4 -->



                </div><!-- /.carousel-inner -->


                <!-- Controls -->
                <div class="control-box">
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div><!-- /.control-box -->


            </div><!-- /#myCarousel -->
        </section><!-- /.main-slider -->
    </div>


    {{--Button Quote Request--}}
    <div class="btnQuoteRequest ">
        <div class="btn btn-warning hidden-sm hidden-xs">Quote Request</div>
    </div>


    <script>
        // Carousel Auto-Cycle
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 6000
            })
        });

    </script>


    <div class="container-fluid" id="about" >
        <div class="row">
            <div class="col-lg-12 col-md-3 col-sm-6 col-xs-12">
                <h4 class="about">About<span style="color:#ffcc00;"> Yellow Sea Logistics</span></h4>
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
        </div>

        <img src="img/truck-logistic.jpg" class="img_fluid">

    </div>



    <div class="Body" >
        <h3 class="title">PRODUCT& SERVICE</h3>
        <hr class="lines_top">
    </div>
    <!--first text and picture-->

    <div class="container" >
        <div class="row">
            <div class="col-lg-8 col-md-3 col-sm-6 col-xs-12"  id="product&service" >
                <h3 class="sub_title">Intermodal Service</h3>
                <p class="text_sub_title">
                    Our own product is to provide you the stable but qualitied delivery service.We have a
                    station where you can essily drop your cargo and have everything to us.On top of that are have
                    the intermodal service to support you an all in delivery to yor warehouse directly.</p>
                <p class="text_sub_title" >
                    We have a strong product as we have a warehouse combined with locak intermodal service.
                    It will sarve youome,oop and security.
                    Your cargos will dilivered at the destination all at the same time.</p>

            </div>

            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <img src="img/intermodal.jpg"  class="sub_img_first">

            </div>

        </div>
        <!--    second text and picture-->
        <div class="Container">
            <div class="row">
                <hr class="lines_top"> <br>
                <div class="col-lg-4 ">
                    <img src="img/export_brokerage.jpg" class="sub2_img_first">


                </div>
                <div class="col-lg-8 col-md-3 col-sm-6 col-xs-12">
                    <h3 class="sub2_title"> Freight Forwarding</h3>
                    <p class="text2_sub_title">By Ocean or Air, FCL or LCL, we believe that we
                        are the one for you. We focus
                        to offer the fast and premium service, from Door to Door / Port to Port
                        / Door to Port / Port to Door.
                    </p>
                    <p class="text2_sub_title">
                        We design our service as per your individual requirements
                        - from/to almost anywhere you wish to ship your cargo in the globe.
                        We handle them with Care and Responsibility. Given your available time range,
                        we will support you to present your cargos to any place of your request with
                        the cost effectiveness.
                    </p>

                </div>
            </div>
        </div>
    </div>

    <!--third text and pic -->

    <div class="container">
        <div class="row">
            <hr class="lines_top">
            <div class="col-lg-8 col-md-3 col-sm-6 col-xs-12">
                <h3 class="sub_title">Custom House Brokerage</h3>
                <p class="text_sub_title">For ease of doing your trading business, we urge to provide
                    you - Customs House Brokerage service supporting your exports and imports businesses.
                </p>
                <p class="text_sub_title">
                    We will cover all the preparations of required documents, taxes/duties calculation and payment,
                    ensuring customs formality completion in the fast manner, so your cargo will be available as planned.
            </div>

            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <img src="img/custom-brokerage.jpg"  class="sub_img_first">

            </div>

        </div>

        <!--    second text and picture-->
        <div class="Container">
            <div class="row">
                <hr class="lines_top">
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <img src="img/y-about-3.jpg" class="sub2_img_first">


                </div>
                <div class="col-lg-8 col-md-3 col-sm-6 col-xs-12">
                    <h3 class="sub2_title">Warehousing And Distribution</h3>
                    <p class="text4_sub_title">Storage is crucially important for your cargos as it is the starting point before bringing your cargos to the world or to your retails shop.
                    </p>
                    <p class="text4_sub_title">
                        We keep it a priority when it comes to this. That is why we have our own warehouse
                        which is standardize, highly maintained, and ideally safe. There is also our value added service
                        to distribute your wish-list cargo to you whether it is in a small or big volume. </p>

                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <img src="img/wharehouse.jpg"  class="mirro_bgs">

            <div class="mirror_bg">
                <p class="bg_text">YELLOW SEA LOGISTICS offers the suports for the goosds transportation both locally and globally as
                    ,Rail Freight,Intermodal,Air Freight,Ocean Freigth,Custom Broker, and Warehousing/Distribution.</p>
                <input type="text"class="btn_last" value="Quote Request">

            </div>
        </div>
    </div>


@stop

