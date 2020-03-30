<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Shop extends Model
{
    public function getItems()
    {
        $items = DB::table('items')->orderBy('id', 'desc')->get();
        // dd($items);
        return $items;
    }

    public function getOneItem($id)
    {
        $item = DB::table('items')->where('id', $id)->first();

        return $item;
    }
}
