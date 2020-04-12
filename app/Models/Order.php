<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    public function items()
    {
        return $this->belongsTo(Item::class);
    }

    public function statuses()
    {
        // return $this->hasOne(Status::class);
        return $this->belongsTo(Status::class, 'status_id', 'id');

    }

    public function user()
    {
        return $this->belongsTo(User::class, );
        // return $this->hasMany(User::class);
        
    }

    public function getOrders()
    {
    	$userId = Auth::user()->id; 
    	
        $orders = Order::latest()->with('user')->where('user_id', $userId)->paginate(10);

        $orders->transform(function ($order, $key)
        {
        	$order->cart = unserialize($order->cart);
        	return $order;
        });

        return $orders;
    }

    public function getOneOrder($order)
    {
        $userOrder = Order::where('id', $order)->get();

        $userOrder->transform(function ($order, $key)
        {
            $order->cart = unserialize($order->cart);
            return $order;
        }); 

        return $userOrder;
    }

    protected $fillable = [
        'user_id', 'item_id', 'cart', 'sum', 'status_id'
    ];

    protected $hidden = [];
}
