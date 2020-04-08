<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Item;


class ItemController extends Controller
{
	public function index()
	{
		$items = (new Item())->getItems();

		return view('shop.index', compact('items'));
	}

	public function show($id)
	{		
		$item = (new Item())->getOneItem($id);

		return view('shop.show', compact('item'));
	}

	
}
