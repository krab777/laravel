<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Cart extends Model
{
    protected $fillable = [
        'user_id', 'item_id', 'price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        // return $this->hasMany(Item::class);
        return $this->belongsTo(Item::class);

    }

    public function getCartItems()
    {

        $userId = Auth::user()->id;    	
    	
        $items = Cart::with('items')->where("user_id", $userId)->get();

        return $items;
    }
}
