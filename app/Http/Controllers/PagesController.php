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

    function insertcart(Request $req){
        $email=$req->input('email');
        $message=$req->input('message');
        $data=array('sender'=>'2016.jay.rajput@ves.ac.in','receiver'=>$email,'choco_id'=>'1',
        'message'=>$message,'class'=>'D12B','bought'=>0);
        DB::table('sender_receiver')->insert($data);
        return view('pages.insertcart');
    }
}
