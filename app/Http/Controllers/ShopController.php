<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;
		App::setlocale('ru');


class ShopController extends Controller
{
	private $items = [
			[
				'image' => 'http://placehold.it/700x400',
				'title' => 'Item One',
				'price' => '21.99',
				'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!'
			], 
			[
				'image' => 'http://placehold.it/700x400',
				'title' => 'Item Two',
				'price' => '22.99',
				'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!'
			], 
			[
				'image' => 'http://placehold.it/700x400',
				'title' => 'Item Three',
				'price' => '23.99',
				'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!'
			],
			[
				'image' => 'http://placehold.it/700x400',
				'title' => 'Item Four',
				'price' => '24.99',
				'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!'
			], 
			[
				'image' => 'http://placehold.it/700x400',
				'title' => 'Item Five',
				'price' => '23.99',
				'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!'
			], 
			[
				'image' => 'http://placehold.it/700x400',
				'title' => 'Item Six',
				'price' => '23.99',
				'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!'
			]
		];

   	public function index()
	{

		$items = $this->items;

		return view('shop.index', compact('items'));
	}

	public function show($id)
	{
		$item = $this->items[$id];

		return view('shop.show', compact('item'));
	}

	public function about()
	{
		return view('about');
	}
}
