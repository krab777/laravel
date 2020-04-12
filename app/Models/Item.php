<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'total_count', 'image'
    ];
    protected $hidden = [];

	public function getItems()
    {
        // $items = DB::table('items')->orderBy('id', 'desc')->get();
        $items = Item::latest()->paginate(10);

        // dd($items);
        return $items;
    }

    public function getOneItem($id)
    {
        // $item = DB::table('items')->where('id', $id)->first();
        $item = Item::find($id);
        // dd($item);
        return $item;
    }

    public function cart()
    {
        // return $this->belongsToMany(Cart::class);
        return $this->belongsTo(Cart::class, 'id', 'item_id');
        // return $this->belongsTo(Cart::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
