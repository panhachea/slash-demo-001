@extends('Myproject.template2')
@section('content')


    <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.084695978349!2d104.89912701420229!3d11.545781991802293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095102f084a533%3A0xd1fa14b956a60cb6!2z4Z6V4Z-S4Z6f4Z624Z6a4oCL4Z6R4Z-G4Z6T4Z6-4Z6UIOGen-Geu-GenOGejuGfkuGejuGetg!5e0!3m2!1skm!2skh!4v1502853800681" frameborder="0" style="border:0" allowfullscreen>
    </iframe>

    <div class="container margin-btm-contact">
        <div class="row">
                <h2 class="contact_us text-center custom-header-style  style-yellow text-capitalize">CONTACT US</h2>
        </div>
        <div class="row text_row">
            <hr  class="contact_lines">

            <p class="yellosea_text " style="text-align: center;">YELLOW SEA LOGISTICS offers the supports for the goods transportation both locally and globally such as Rail </p>
            <p class="freight_text" style="text-align: center;">Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing/Distribution.</p>
        </div>

        <div class="row contact" style="text-align: center;">
            {{--<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"></div>--}}
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 myphone">
                <span class="glyphicon glyphicon-earphone" ></span>
                <p class="any">Any Question?</p>
                <p class="num">+855 61 333 117 </p>
                <p class="numS">+855 61 333 500</p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mysms">

                <span class="glyphicon glyphicon-envelope " ></span>
                <p class="write">Write Us A Message</p>
                <p style="color:lightseagreen" class="gmail">csmng@yellowsea.asia</p>
                <p></p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 myaddress">

                <span class="glyphicon glyphicon-map-marker"></span>
                <p class="mapss">Find Us On Map</p>
                <p class="maps_add">#G26, Street Gold, Sangkat </p>
                <p class="maps">Tumnub Terk, Khan Chamkarmon,</p>
                <p class="pp">Phnom Penh</p>


            </div>

        </div>

    </div>

    <div class="container-fluid how_we_help">
        <div class="row" style="text-align: center;">
            <h2 class="t_h2">HOW CAN WE HELP YOU?</h2>
        </div>
        <div class="row">
            <hr  class="contact_lines">
            <p class=t_we style="text-align: center;">We love to hear from you! So leave us your inquiry and we will get back  </p>
            <p class="t_to" style="text-align: center;">to you as soon as we got your message.</p>

        </div>
        <div class="row" style=" text-align:left;">
            <div class="container">
            <form class="">
            <div class="col-sm-4 col-sm-12 col-md-4">
                <div class="form-group">

                 <input type="text" class="form-control name" placeholder="Name *">
                </div>


            </div>
            </form>

            <form class="">
            <div class="col-sm-4 col-sm-12 col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control email" placeholder="Email *">

                </div>



            </div>
            </form>

            <div class="col-sm-4 col-sm-12 col-md-4">
                <form class="">
                    <input type="text" class="form-control phone" placeholder="Phone*">
                </form>


            </div>


        </div>
        </div>

        <div class="row">
            <div class="container">
            <div class="col-sm-12">
                <div class="form-group">
                <input type="text" class="form-control desciption" placeholder="Desciption *">
                 </div>

            </div>
            </div>

        </div>
    </div>


@endsection