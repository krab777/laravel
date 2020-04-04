<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function statuses()
    {
        return $this->hasOne(Status::class);
    }

    protected $hidden = [];
}
