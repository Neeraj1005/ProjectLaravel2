<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DbModel;

class DbModelController extends Controller
{
    public function index()
    {
    	//return DbModel::find(3);
    	return DbModel::all();
    }
}
