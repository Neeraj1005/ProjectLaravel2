<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinsController extends Controller
{
    public function joinsdb()
    {//for joins first we have to define data in table and create table first
    	$userdata= DB::table('users')
    	->select('company.name','users.name')
    	->join('company','users.id','company.users.id')
    	->Where('company.name','Samsung')
    	->get();
    	print_r($userdata);
    }
}
