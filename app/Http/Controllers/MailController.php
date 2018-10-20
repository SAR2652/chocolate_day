<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
    public function send(){
        $users=DB::select('select * from sender_receiver');
        foreach ($users as $user) {
            # code...
            $choco=DB::select('select * from chocolates where id='.$user->choco_id);
            Mail::raw($user->message,function($message) use($user,$choco){
                $message->to($user->receiver,'To JAY RAJPUT')->subject('Chocolate as '.$choco[0]->category);
                $message->from($user->sender,'JAY RAJPUT');
            });
        }
        //return view('pages.mail',['users'=>$users]);
    }
}