<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function welcome()
    {
        if(session('email')->exists())
        {
            $email = session('email');
        }
        return view('pages.welcome')->with('email');
    }

    /*public function purchasing(){
        return view('pages.purchasing');
    }*/
    public function cart()
    {
        return view('pages.cart');
    }
}
