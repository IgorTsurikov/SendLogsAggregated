<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendLog extends Model
{
    public $table = 'send_log';

    public $timestamps = false;

    public function number()
    {
        return $this->belongsTo(\App\Number::class, 'num_id', 'num_id');
    }
}
