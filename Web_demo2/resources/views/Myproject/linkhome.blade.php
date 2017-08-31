@extends('Myproject.template2')
@section('content')


    {{--<!----}}{{--Animation--}}{{---->--}}
    <div class="animation">
        <section class="main-slider">
            <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active line_move"  ></li>
                    <li data-target="#myCarousel" data-slide-to="1"  class="line_move" ></li>
                    <li data-target="#myCarousel" data-slide-to="2"  class="line_move" ></li>
                    <li data-target="#myCarousel" data-slide-to="3"  class="line_move" ></li>
                    <li data-target="#myCarousel" data-slide-to="4"  class="line_move" ></li>

                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner myimg">

                    <!-- Slide 1 : Active -->
                    <div class="item active">
                        <img src="img/new-slide-1.jpg" alt=""  class="img-responsive myslide" style="width: 100%;">
                        <div class="carousel-caption text_slide">
                            <p class="text-center">
                                YELLOW SEA LOGISTICS offers the supports for the goods transportation both locally and globally
                                such as Rail Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing/Distribution.
                            </p>

                        </div><!-- /.carousel-caption -->
                    </div><!-- /Slide1 -->

                    <!-- Slide 2 -->
                    <div class="item ">
                        <img src="img/y-slide-2.JPG" alt="" class="img-responsive myslide" style="width: 100%;" >
                        <div class="carousel-caption text_slide">
                            <p class="text-center">
                                YELLOW SEA LOGISTICS offers the supports for the goods transportation both locally and globally such
                                as Rail Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing/Distribution.
                            </p>

                        </div><!-- /.carousel-caption -->
                    </div><!-- /Slide2 -->

                    <!-- Slide 3 -->
                    <div class="item ">
                        <img src="img/y-slide-3.jpg" alt="" class="img-responsive  myslide"  style="width: 100%;">
                        <div class="carousel-caption text_slide">
                            <p class="text-center">
                                By Ocean or Air, FCL or LCL, we believe that we are the one for you. We focus to offer the fast
                                and premium service, from Door to Door / Port to Port / Door to Port / Port to Door.
                            </p>
                        </div><!-- /.carousel-caption -->
                    </div><!-- /Slide3 -->

                    <!-- Slide 4 -->
                    <div class="item ">
                        <img src="img/y-about-2.jpg" alt="" class="img-responsive  myslide" style="width: 100%;">
                        <div class="carousel-caption text_slide">
                            <p class="text-center">
                                Storage is crucially important for your cargos asit is the starting point before bringing your cargos to the world or to your retails shop.
                            </p>

                        </div><!-- /.carousel-caption -->
                    </div><!-- /Slide4 -->


                    <div class="item ">
                        <img src="img/y-about-2.jpg" alt="" class="img-responsive  myslide" style="width: 100%;">
                        <div class="carousel-caption text_slide">
                            <p class="text-center">
                                YELLOW SEA LOGISTICS offers the supports for the goods transportation both locally and globally such
                                as Rail Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing/Distribution.
                            </p>

                        </div><!-- /.carousel-caption -->
                    </div><!-- /Slide4 -->



                </div><!-- /.carousel-inner -->


                {{--<!-- Controls -->--}}
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


    {{--<!--Button Quote Request -->--}}
    <div class="btnQuoteRequest ">
        <div class="btn btn-warning hidden-xs button button_quote">Quote Request</div>
    </div>

    <!--About Section-->
    <div class="jumbotron body_jumbotron" id="aboutus" >
        <div class="aboutDescription" >

            <h3 class="about">About <span style="color:#ffcc00"> Yellowsea Logistic</span></h3> <br>

            <p class="text">Yellow Sea Logistics offers the supports for the goods transportation both locally and
                globally such as Real Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing Distribution.
            </p>

            <p class="text">Based on our strong assets and facilities, we have been motivated to start our first service providing in 2016,
                and then with many more services from the start to the end. We would like our customers to rest assured and let
                us take care of the rest for you. We are new in term of a company, but we have a talented and experienced team
                here to ensure a high quality service being delivered and satisfied to our customers.
            </p>

            <p class="text">We are doing our best as a responsible business partner and a customer focused service provider
                to bring value and solution to your business development as well as ours.
            </p>

        </div>

        <div class="aboutImage">
            <img src="img/truck-logistic.jpg">
        </div>

    </div> <!--end class jumbotron in about section-->



    <!--Homepage Feature-->
    <div class="container container_product" id="product_service"  >

        <div class="row" style="margin-top: 75px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="product-service" >
                    <h3 >PRODUCT & SERVICE</h3>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row" >
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <h3 class=" text_of_pic">Intermodal Service</h3> <br>

                <p  class="texts">
                    Our core product is to provide you the stable but qualified delivery service.
                    We have a station where you can easily drop your cargo and leave everything to us.
                    On top of that, we have the intermodal service to support you an all-in delivery
                    to/from your warehouse directly.
                </p> <br>

                <p class="texts">
                    We have a strong product designed as we have a warehouse combined with local intermodal service.
                    It will save you time, cost and security. Your cargos will delivered at the destination all at the same time.
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <img src="img/intermodal.jpg" class="imgtext">
            </div>
        </div>

        <hr style="width: 100px; border: 1px solid #ffffb3; text-align: center; margin-bottom: 50px">

        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 frieght-forwarding">
                <h3   class=" text_of_pic" >Frieght Forwarding</h3> <br>

                <p class="texts">
                    By Ocean or Air, FCL or LCL, we believe that we are the one for you.
                    We focus to offer the fast and premium service, from Door to Door / Port to Port
                    / Door to Port / Port to Door.
                </p> <br>

                <p class="texts">
                    We design our service as per your individual requirements - from/to almost
                    anywhere you wish to ship your cargo in the globe. We handle them with Care and Responsibility.
                    Given your available time range, we will support you to present your cargos to any place of your
                    request with the cost effectiveness.
                </p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 image-frieght-forwarding">
                <img src="img/export_brokerage.jpg" class="imgtext">
            </div>


        </div>

        <hr style="width: 100px; border: 1px solid #ffffb3; text-align: center; margin-bottom: 50px">

        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <h3  class=" text_of_pic">Custom House Brokerage</h3> <br>

                <p class="texts">
                    For ease of doing your trading business,we urge to provide you -
                    Customs House Brokerage service supporting your exports and imports businesses.
                </p> <br>

                <p class="texts">
                    We will cover all the preparations of required documents, taxes/duties calculation
                    and payment, ensuring customs formality completion in the fast manner, so your cargo will be available as planned.
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <img src="img/custom-brokerage.jpg" class="imgtext">
            </div>
        </div>

        <hr style="width: 100px; border: 1px solid #ffffb3; text-align: center; margin-bottom: 50px">

        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 wiredhousing">
                <h3  class=" text_of_pic" >Wiredhousing and Distribution</h3> <br>

                <p class="texts">
                    Storage is crucially important for your cargos as it
                    is the starting point before bringing your cargos to the world or to your retails shop.
                </p> <br>

                <p class="texts">
                    We keep it a priority when it comes to this. That is why we have our own warehouse
                    which is standardize, highly maintained, and ideally safe. There is also our value added
                    service to distribute your wish-list cargo to you whether it is in a small or big volume. Add Comment
                </p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 image-wiredhousing">
                <img src="img/new-warehousing.jpg" class="imgtext">
            </div>

        </div>

    </div> <!--end class container-->


    <div class="Footer">
        <div class="row">
            <div class="text-center bgpic" >
                <div class="img_near_footer">
                    <div class="contain " style="background-image: url('img/wharehouse.jpg');"></div>
                    <div class="txt_near_footer">
                        <p>YELLOW SEA LOGISTICS offers the supports for the foods transportation both
                            locally and <br>globally such as Rail Freight, Intermodal
                            ,Air Freight, Ocean Freight,Custom Broker and<br> Warehousing /Distribution
                        </p>
                    </div>
                    <div class="footer_btn">
                        <button class="btn_quote_last">Quote Request</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection