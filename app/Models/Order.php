<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    public function items()
    {
        return $this->belongsToMany('App\Models\Item');
    }

    public function statuses()
    {
        return $this->belongsToMany('App\Models\Status');
    }

    protected $hidden = [];
}
