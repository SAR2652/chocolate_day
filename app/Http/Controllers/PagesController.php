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
        return view('pages.welcome');
    }

    /*public function purchasing(){
        return view('pages.purchasing');
    }*/
    public function cart($c_id){
        
        return view('pages.cart')->with('c_id',$c_id);
    }

    public function thank_you(){
        return view('pages.thank_you');
    }
}
