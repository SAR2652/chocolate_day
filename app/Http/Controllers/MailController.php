<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email(){
      $data = array('name'=>"JAY RAJPUT");
   
      Mail::send(['text'=>'pages.mail'], $data, function($message) {
         $message->to('2016.jay.rajput@ves.ac.in', 'JAY RAJPUT')->subject
            ('Laravel Basic Testing Mail');
         $message->from('2016.jay.rajput@ves.ac.in','JAY RAJPUT');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email(){
      $data = array('name'=>"JAY RAJPUT");
      Mail::send('mail', $data, function($message) {
         $message->to('2016.jay.rajput@ves.ac.in', 'JAY RAJPUT')->subject
            ('Laravel HTML Testing Mail');
         $message->from('2016.jay.rajput@ves.ac.in','JAY RAJPUT');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function attachment_email(){
      $data = array('name'=>"JAY RAJPUT");
      Mail::send('mail', $data, function($message) {
         $message->to('2016.jay.rajput@ves.ac.in', 'JAY RAJPUT')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('2016.jay.rajput@ves.ac.in','JAY RAJPUT');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}