<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    public function cart()
    {
        return $this->belongsToMany('App\Models\Cart');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }
}
