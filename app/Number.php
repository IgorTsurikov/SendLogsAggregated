<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    public $timestamps = false;

    public function country()
    {
        return $this->belongsTo(\App\Country::class, 'cnt_id', 'cnt_id');
    }
}
