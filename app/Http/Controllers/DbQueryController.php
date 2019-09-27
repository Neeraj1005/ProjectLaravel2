<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbQueryController extends Controller
{
    public function index()
    {/*
    	$userdata = DB::table('users')
    	->Where('name','Nick')
    	->get();
    	return $userdata; or you can use below*/
    	//return $userdata = DB::table('users')->count();
    }
    public function deletedb()
    {/*
    	$userdata = DB::table('users')
    	->Where('name','Nick')
    	->delete();*/
    }

    public function insertdb()
    {/*
    	$userdata = DB::table('users')
    	->insert([
    		'name'=>'Thor2',
    		'email'=>'call@thor2.com',
    		'password'=>12345678
    	]);
    	print_r($userdata); */
    }
    public function updatedb()
    {
    	$userdata =DB::table('users')
    		->Where('name','Thor')
    		->update([
    			'email'=>'callme@nick.com'
    		]);
    		print_r($userdata);
    }
}
