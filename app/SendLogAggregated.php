<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendLogAggregated extends Model
{
    public $table = 'send_log_aggregated';

    public $timestamps = false;

    protected $fillable = [
        'log_created',
        'cnt_id',
        'usr_id',
        'sent_success',
        'sent_fail',
    ];
}
