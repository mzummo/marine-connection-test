<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    protected $fillable = ['year','make','model','serial_number','stock_number','list_price'];
}
