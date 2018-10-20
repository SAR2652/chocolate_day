<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ChocolateController extends Controller
{
    //
    public function index($c_id){
        $chocos = DB::select('select * from chocolates');
        return view('pages.purchasing',['chocos'=>$chocos])->with('c_id',$c_id);
     }

}
