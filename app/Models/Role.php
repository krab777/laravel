<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model
{
    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
