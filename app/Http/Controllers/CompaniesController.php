<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{
    public function index()
    {
    	$data= DB::table('company')->paginate(2);
    	return view('companies',['data'=>$data]);
    }
}
