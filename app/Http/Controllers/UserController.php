<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class UserController extends Controller
{
  	public function index()
	{
		$users = (new User())->getUsers();

		return view('users.index', compact('users'));
	}

	public function show($id)
	{
		$user = (new User())->getOneUser($id);

		return view('users.show', compact('user'));
	}
}
