<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Item;


class ItemController extends Controller
{
	public function index()
	{
		App::setlocale('ru');

		$items = (new Item())->getItems();

		return view('shop.index', compact('items'));
	}

	public function show($id)
	{
		App::setlocale('ru');
		
		$item = (new Item())->getOneItem($id);

		return view('shop.show', compact('item'));
	}
}
