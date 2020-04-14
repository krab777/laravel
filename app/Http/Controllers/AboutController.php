<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;


class AboutController extends Controller
{

   	public function index()
	{
		return view('about');
	}
	
}
