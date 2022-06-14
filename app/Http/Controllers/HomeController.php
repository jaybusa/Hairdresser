<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use DataTables;
use Auth;
use DB;
use Log;
use Session;
use App\User;

class HomeController extends Controller {
  
    public function send_socket() { 
    	return view('send_socket');
    }

    public function receive_socket() { 
    	
        return view('receive_socket');
    } 

    public function post_send_socket(Request $request) {
    	$data = ['user_id'=>1,'message'=>$request->message];
 		User::send_socket($data,'send_notification');
	
    }

    
}
