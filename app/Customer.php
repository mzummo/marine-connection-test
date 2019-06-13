<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // https://stackoverflow.com/questions/50529760/eloquent-mapping-api-attributes-to-field-names
    // https://laravel.com/api/5.3/Illuminate/Database/Eloquent/Model.html

    // show him this code:
    // https://github.com/mzummo/sports and other private repos in bitbucket
    // https://bitbucket.org/nextserve/nextserve-base/
    protected $fillable = ['first_name','last_name','email','phone','address1', 'address2'];

    public function sales()
    {
        return $this->belongsToMany('App\Sale');
    }

}
