<?php

namespace App\Repositories;

use App\Repositories\Interfaces\SendLogRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class SendLogRepository implements SendLogRepositoryInterface
{
    public function getAll(): Collection
    {
        return DB::table('send_log')
            ->join('numbers', 'send_log.num_id', '=', 'numbers.num_id')
            ->select(
                'send_log.usr_id',
                'numbers.cnt_id',
                DB::raw('DATE(send_log.log_created) as log_created_date'),
                DB::raw("SUM(IF(send_log.log_success = '1', 1, 0)) as success"),
                DB::raw("SUM(IF(send_log.log_success = '0', 1, 0)) as fail")
            )
            ->groupBy('usr_id', 'log_created_date', 'numbers.cnt_id')
            ->get();
    }
}
