<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subservice extends Model
{
    public function services()
    {
        return $this->belongsTo('App\Service');
    }
}
