<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
// use App\Models\User;
// use Illuminate\Foundation\Auth;


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
    }

    public function getOrders()
    {
        $orders = Order::latest()->with('user')->get();
        // $orders = Auth::user()->orders;
        // $orders = preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $orders);
		// var_dump(unserialize($orders));
        $orders->transform(function ($order, $key)
        {
        	$order->cart = unserialize($order->cart);
        	return $order;
        });

        return $orders;
    }

    protected $fillable = [
        'user_id', 'item_id', 'cart', 'sum'
    ];

    protected $hidden = [];
}
