<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function subservices()
    {
        return $this->hasMany('App\Subservice');
    }
}
