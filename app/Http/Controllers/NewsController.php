<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
   public function get()
   {
   		$news = DB::table('news')
   			->select(['id', 'title'])
   			// ->where('id', 1)
   			->get();

   		dd ( $news );

   		// foreach ($news as $item) {
   		// 	echo $item->title."<br>";
   		// }
   }
}
