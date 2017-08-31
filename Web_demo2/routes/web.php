<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//
//Route::get('/template2', function () {
//    return view('Myproject.template2');
//});
//



Route::get('/t','homecontroller@templeate');

Route::get('/main','homecontroller@tmain');


Route::get('/template2','homecontroller@template2');




Route::get('/linkhome', function () {
    return view('Myproject.linkhome');
});




Route::get('/news', function () {
    return view('Myproject.news');
});



Route::get('/quote_request', function () {
    return view('Myproject.quote_request');
});

Html::macro('clever_link',function($route){
    $path=Request::path();// recieve path from server
    $active="";

    //return $route. ' === '. $path; // this for print for sure what our path and route it's equal or not


    if($route == $path){
        $active="active";// can be active ,focus or anything in style css
    }
    else{
        $active="";
    }
    return $active;
});



Route::get('/contact_us', function () {
    return view('Myproject.contact_us');
});