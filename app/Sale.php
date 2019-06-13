<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    // todo: need pivot table for sale -> multiple customers and the has many relationship

    public function customers()
    {
        $this->belongsToMany('App\Customer');
    }
}
