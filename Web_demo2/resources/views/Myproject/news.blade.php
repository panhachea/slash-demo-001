@extends('Myproject.template2')
@section('content')

    <div class="nav">
        <ul>
            <li>
                <a href=""><span>Home</span></a>
            </li>
        </ul>
    </div>

    <div class=" bgnews">
        <div class="newsimg " style="background-image: url('img/y-news.JPG');"></div>

        <div class="bgs_text">
            <p class="news_event text-center">News & Events</p>
        </div>
    </div>

    <div class="footer_texts text-center">
        <p class="news_events  text-uppercase custom-header-style style-yellow" style="text-align:center;">NEWS & EVENTS</p>
        <hr  class="follow_lines_news article-headline" >

    </div>

    <div class="container mypictures">
        <div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-6  ">
                <div class="img-item">
                    <a href="#" >
                        <img src="{{asset('img\air-logistic.jpg')}}" class="box-shadow-on-img news-img">
                         <div class="overlay-img-box"></div>
                     </a>
                </div>

                <p class="pcolor">Basic Docker Setup with Openshift</p>

                <div class="row">
                      <div class="col-xs-6">
                       <span class="post-time">
                       <span class="glyphicon glyphicon-time time"></span>
                        <span><p class="month">1 month ago</p></span>
                        </span>
                       </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-6  ">
                <div class="img-item">
                    <a href="#" >
                        <img src="{{asset('img\y-about-2.jpg')}}" class="box-shadow-on-img news-img">
                        <div class="overlay-img-box"></div>
                    </a>
                </div>

                <p class="pcolor">Docker Basic With AWS EC2 Container Service</p>

                <div class="row">
                    <div class="col-xs-6">
                       <span class="post-time">
                       <span class="glyphicon glyphicon-time time"></span>
                        <span><p class="month">1 month ago</p></span>
                        </span>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-sm-4 col-xs-6  ">
                <div class="img-item">
                    <a href="#" >
                        <img src="{{asset('img\sea-port.jpg')}}" class="box-shadow-on-img news-img">
                        <div class="overlay-img-box"></div>
                    </a>
                </div>


                <p class="pcolor">Introducing The All New Trello Business Class</p>
                <div class="row">
                    <div class="col-xs-6">
                       <span class="post-time">
                       <span class="glyphicon glyphicon-time time"></span>
                        <span><p class="month">1 month ago</p></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-6  ">
                <div class="img-item">
                    <a href="#" >
                        <img src="{{asset('img\export_brokerage.jpg')}}" class="box-shadow-on-img news-img">
                        <div class="overlay-img-box"></div>
                    </a>
                </div>
                <p class="pcolor">Getting prepared for learning Angular 2</p>
                <div class="row">
                    <div class="col-xs-6">
                       <span class="post-time">
                       <span class="glyphicon glyphicon-time time"></span>
                        <span><p class="month">1 month ago</p></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-6  ">
                <div class="img-item">
                    <a href="#" >
                        <img src="{{asset('img\intermodal.jpg')}}" class="box-shadow-on-img news-img">
                        <div class="overlay-img-box"></div>
                    </a>
                </div>
                <p class="pcolor">PHP 7 is coming - It will gonna fly high</p>
                <div class="row">
                    <div class="col-xs-6">
                       <span class="post-time">
                       <span class="glyphicon glyphicon-time time"></span>
                        <span><p class="month">1 month ago</p></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-6  ">
                <div class="img-item">
                    <a href="#" >
                        <img src="{{asset('img\y-about-3.jpg')}}" class="box-shadow-on-img news-img">
                        <div class="overlay-img-box"></div>
                    </a>
                </div>
                <p class="pcolor">Introduction to MEAN Stack</p>
                <div class="row">
                    <div class="col-xs-6">
                       <span class="post-time">
                       <span class="glyphicon glyphicon-time time"></span>
                        <span><p class="month">1 month ago</p></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @endsection