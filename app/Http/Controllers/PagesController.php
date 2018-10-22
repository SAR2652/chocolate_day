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
        return view('pages.index');
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

    function insertcart(Request $req,$c_id){
        $email=$req->input('email');
        $message=$req->input('message');
        $data=array('sender'=>session('email'),'receiver'=>$email,'choco_id'=>$c_id,
        'message'=>$message,'class'=>'D12B','bought'=>0);
        DB::table('sender_receiver')->insert($data);

        $chocos = DB::select('SELECT * FROM chocolates,sender_receiver WHERE chocolates.id=sender_receiver.choco_id');
        return view('pages.insertcart',['chocos'=>$chocos]);
    }
}
