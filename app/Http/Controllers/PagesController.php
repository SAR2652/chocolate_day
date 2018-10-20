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
<<<<<<< HEAD
    public function cart()
    {
        return view('pages.cart');
=======
    public function cart($c_id){
        
        return view('pages.cart')->with('c_id',$c_id);
>>>>>>> 375f9d444211a5cbb6470a3931a40820207cc99d
    }
}
