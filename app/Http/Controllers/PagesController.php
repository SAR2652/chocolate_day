<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }

    /*public function purchasing(){
        return view('pages.purchasing');
    }*/
    public function cart(){
        return view('pages.cart');
    }
}
