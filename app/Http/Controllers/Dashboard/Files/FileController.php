<?php

namespace App\Http\Controllers\Dashboard\Files;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{

	public function index()
	{
		return view('dashboard.files.index');
	}

    public function upload()
    {
    	# code...
    }

    public function download()
    {
    	# code...
    }
}
