<?php

namespace App\Repositories;

use App\Repositories\Interfaces\SendLogAggregatedRepositoryInterface;
use App\SendLogAggregated;

class SendLogAggregatedRepository implements SendLogAggregatedRepositoryInterface
{
    public function create(array $attributes): SendLogAggregated
    {
        return SendLogAggregated::create($attributes);
    }
}
