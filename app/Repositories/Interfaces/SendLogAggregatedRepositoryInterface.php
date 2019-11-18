<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\SendLogAggregatedPost;

interface SendLogAggregatedRepositoryInterface
{
    public function create(array $attributes);

    public function getSendLogAggegated(SendLogAggregatedPost $sendLogAggregatedRequest);

    public function getStartDate();
}
