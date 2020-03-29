<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;


class AboutController extends Controller
{

   	public function index()
	{
		App::setlocale('ru');

		return view('about');
	}
	
}
