<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class ProductController extends Controller
{	
	private $products = [
			[
				'header' => 'Heading 1',
				'content' => 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. ',
				'button' => 'View details'
			], 

			[
				'header' => 'Heading 2',
				'content' => 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. ',
				'button' => 'Read more'
			],

			[
				'header' => 'Heading 3',
				'content' => 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. ',
				'button' => 'All about'
			],
		];


	public function index()
	{
		App::setlocale('en');

		$products = $this->products;

		return view('products.index', compact('products'));
	}

	public function show($id)
	{
		App::setlocale('en');
		
		$product = $this->products[$id];

		return view('products.show', compact('product'));
	}
    


}
