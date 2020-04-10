<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Cart extends Model
{
    protected $fillable = [
        'user_id', 'item_id', 'price', 'count', 'sum'
    ];
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        // return $this->hasMany(Item::class);
        return $this->hasMany(Item::class, 'id', 'item_id');
        // return $this->hasMany(Item::class);
    }

    public function getCartItems()
    {
        $userId = Auth::user()->id; 
    	
        $items = Cart::with('items')->where("user_id", $userId)->get();

        return $items;
    }

    public function clearCart()
    {
        $userId = Auth::user()->id; 
        // $cart = Cart::find($id);
        $cart = Cart::where("user_id", $userId);

        $cart->delete();
        
        // $items = Cart::with('items')->where("user_id", $userId)->get();

        // return $items;
    }
}
