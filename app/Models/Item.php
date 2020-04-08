<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
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

    public function cart()
    {
        // return $this->belongsToMany(Cart::class);
        return $this->hasMany(Cart::class);
        
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
