@extends('Myproject.template2')
@section('content')


<div class="bgquto">
    <div class="news_imgs " style="background-image: url('img/y-quotation.JPG');"></div>

    <div class="news_event_quote">
    <p class="QUOTES_REQUEST text-center" >QUOTES REQUEST</p>
    </div>

</div>

     <h2 class="qoute_request text-center custom-header-style  style-yellow">Quotes Request Form</h2>
     <hr  class="quote_request_lines">

<div class="container bgwell">
<div class="myrows">

    <div  class="form-group row" style="margin-top: 10px;">

        <div class="col-sm-2 col-lg-2 col-md-12 col-sx-10 place_of_receipt">
            <label class="Text_lefts pof">Place of Receipt <span class="color-yellow" style="color:orange;">*</span></label>
        </div>

        <div class="col-sm-10  col-lg-10 col-md-12 col-sx-10 in_place">
            <input type="text" class="form-control pc">
        </div>

    </div>

    <div  class="form-group row ">
            <div class="col-sm-2 col-lg-2 col-md-12 col-sx-12  place_of_receipt">
                <label class="Text_lefts p_d">Place of Delivery <span class="color-yellow" style="color:orange;">*</span></label>
             </div>

             <div class="col-sm-10 col-lg-10 col-md-12 col-sx-12 in_place">
            <input type="text" class="form-control ibox">
             </div>

    </div>

<div class="form-group row">
    <label  class="col-sm-2  mycargo">Cargo Volume Details</label>

    <div class="col-sm-10  cargo">

         <div  class="form-group myrow">
             <label style="padding: 5px;"> FCL:</label>

             <input type="text" class="fcl_box" style="width: 70px;">
             <label style="padding: 5px;">&times; 20'</label>
             <input type="text" class="fcl_box" style="width: 70px;" >
             <label style="padding: 5px;">&times; 40'</label>
             <input type="text" class="fcl_box" style="width: 70px;">
             <label style="padding: 5px;">&times; 45'</label>


         </div>


    </div>
</div>
    <div class="form-group row">
        <div  class="col-sm-2">
           <label class="commodity">Commodity <span class="color-yellow" style="color:orange;">*</span></label>
        </div>
        <div  class="col-sm-10">
            <input type="text" class="form-control ibox">

        </div>

    </div>

<div class="form-group row">
    <div  class="col-sm-2">
        <label class="Cargo_Weight">Cargo Weight</label>
    </div>
    <div  class="col-sm-5">
        <input type="text" class="form-control ibox">

    </div>

    <div  class="col-sm-5">
       <label class="KGs">KGs per container</label>

    </div>

</div>

    <div class="form-group row">
        <div class="col-sm-2">
            <label class="remark">Remark</label>
        </div>
        <div class="col-sm-10">
           <input type="text" class="form-control textarea">
        </div>
    </div>


    <div  class="form-group row" style="margin-top: 10px;">

        <div class="col-sm-2 col-lg-2 col-md-12 col-sx-10 place_of_receipt">
            <label class="Text_lefts pof">Your Company <span class="color-yellow" style="color:orange;">*</span></label>
        </div>

        <div class="col-sm-10  col-lg-10 col-md-12 col-sx-10 in_place">
            <input type="text" class="form-control pc">
        </div>

    </div>


    <div  class="form-group row" style="margin-top: 10px;">

        <div class="col-sm-2 col-lg-2 col-md-12 col-sx-10 place_of_receipt">
            <label class="Text_lefts pof">Country </label>
        </div>

        <div class="col-sm-10  col-lg-10 col-md-12 col-sx-10 in_place">
            <input type="text" class="form-control pc">
        </div>

    </div>


    <div  class="form-group row" style="margin-top: 10px;">

        <div class="col-sm-2 col-lg-2 col-md-12 col-sx-10 place_of_receipt">
            <label class="Text_lefts pof">Contact Person <span class="color-yellow" style="color:orange;">*</span></label>
        </div>

        <div class="col-sm-10  col-lg-10 col-md-12 col-sx-10 in_place">
            <input type="text" class="form-control pc">
        </div>

    </div>


    <div  class="form-group row" style="margin-top: 10px;">

        <div class="col-sm-2 col-lg-2 col-md-12 col-sx-10 place_of_receipt">
            <label class="Text_lefts pof">Email Address  <span class="color-yellow" style="color:orange;">*</span></label>
        </div>

        <div class="col-sm-10  col-lg-10 col-md-12 col-sx-10 in_place">
            <input type="text" class="form-control pc">
        </div>

    </div>


    <div  class="form-group row" style="margin-top: 10px;">

        <div class="col-sm-2 col-lg-2 col-md-12 col-sx-10 place_of_receipt">
            <label class="Text_lefts pof">Phone Number  <span class="color-yellow" style="color:orange;">*</span></label>
        </div>

        <div class="col-sm-10  col-lg-10 col-md-12 col-sx-10 in_place">
            <input type="text" class="form-control Phone_Number">
        </div>

    </div>

</div>
</div>


@endsection