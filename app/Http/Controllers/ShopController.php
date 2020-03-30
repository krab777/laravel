<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Shop;


class ShopController extends Controller
{
	public function index()
	{
		App::setlocale('ru');

		$items = (new Shop())->getItems();

		return view('shop.index', compact('items'));
	}

	public function show($id)
	{
		App::setlocale('ru');
		
		$item = (new Shop())->getOneItem($id);

		return view('shop.show', compact('item'));
	}
}
