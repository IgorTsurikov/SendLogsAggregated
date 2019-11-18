<?php

namespace App\Repositories;

use App\Http\Requests\SendLogAggregatedPost;
use App\Repositories\Interfaces\SendLogAggregatedRepositoryInterface;
use App\SendLogAggregated;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class SendLogAggregatedRepository implements SendLogAggregatedRepositoryInterface
{
    public function create(array $attributes): SendLogAggregated
    {
        return SendLogAggregated::create($attributes);
    }

    public function getSendLogAggegated(SendLogAggregatedPost $sendLogAggregatedRequest): Collection
    {
        $where = [];

        $sendLogAggregatedRequest->get('user') ? $where['usr_id'] = $sendLogAggregatedRequest->get('user') : null;
        $sendLogAggregatedRequest->get('country') ? $where['cnt_id'] = $sendLogAggregatedRequest->get('country') : null;
        $whereDate = [];
        $whereDate[] = ['log_created', '>=', $sendLogAggregatedRequest->get('date-from')];
        $whereDate[] = ['log_created', '<=', $sendLogAggregatedRequest->get('date-to')];

        $result = SendLogAggregated::select(
            'log_created',
            DB::raw('SUM(sent_success) as sent_success'),
            DB::raw('SUM(sent_fail) as sent_fail'))
            ->where($where)
            ->where($whereDate)
            ->groupBy('log_created')
            ->get();

        return $result;
    }

    public function getStartDate()
    {
        return SendLogAggregated::select('log_created')->orderBy('log_created', 'asc')->pluck('log_created')->first();
    }

    public function getEndDate()
    {
        return SendLogAggregated::select('log_created')->orderBy('log_created', 'desc')->pluck('log_created')->first();
    }
}
