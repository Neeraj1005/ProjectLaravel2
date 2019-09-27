<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
    	//echo "checking database";
    	$userdata=DB::select('select * from users');
    	return $userdata;//or print_r($userdata); 
    }
}
