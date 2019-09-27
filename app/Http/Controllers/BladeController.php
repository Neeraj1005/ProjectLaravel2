<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index()
    {
    	$data = [
    		'name'=>'neo',
    		'lastname'=>'carter',
    		'htmlshow'=>'<h1>Hii buddy</h1>'
    	];
    	return view('bladefile',['data'=>$data]);
    }
}
