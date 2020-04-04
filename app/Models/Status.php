<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Status extends Model
{
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
