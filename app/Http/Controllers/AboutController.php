<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;
		App::setlocale('ru');


class AboutController extends Controller
{
   public function index()
	{
		return view('about');
	}
	
}
