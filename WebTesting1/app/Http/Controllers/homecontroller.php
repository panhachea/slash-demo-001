<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    //


    public function __call($method, $parameters)
    {
        parent::__call($method, $parameters); // TODO: Change the autogenerated stub
    }

    public function Myhome()
    {
        return view('home');
    }


    public function  Mytemplate()
    {
        return view('Myproject.template');
    }
}