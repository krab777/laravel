<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;
		App::setlocale('ru');


class UsersController extends Controller
{
	private $users = [
			[
				'username' => 'username 1',
				'about_user' => 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'
			], 

			[
				'username' => 'username 2',
				'about_user' => 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'
			],

			[
				'username' => 'username 3',
				'about_user' => 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'
			],
		];

   public function index()
	{
		// App::setlocale('en');

		$users = $this->users;

		return view('users.index', compact('users'));
	}

	public function show($id)
	{
		$user = $this->users[$id];

		return view('users.show', compact('user'));
	}
}
