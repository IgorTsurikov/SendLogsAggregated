<?php

namespace App\Services;

use App\Repositories\Interfaces\SendLogAggregatedRepositoryInterface;
use App\Repositories\Interfaces\SendLogRepositoryInterface;
use App\Repositories\SendLogAggregatedRepository;
use App\Repositories\SendLogRepository;

class SendLogService implements SendLogServiceInterface
{
    /**
     * @var SendLogRepository $sendLogRepository
     */
    protected $sendLogRepository;

    /**
     * @var SendLogAggregatedRepository $sendLogAggregatedRepository
     */
    protected $sendLogAggregatedRepository;

    public function __construct(
        SendLogRepositoryInterface $sendLogRepository,
        SendLogAggregatedRepositoryInterface $sendLogAggregatedRepository
    ) {
        $this->sendLogRepository = $sendLogRepository;
        $this->sendLogAggregatedRepository = $sendLogAggregatedRepository;
    }

    public function aggregate()
    {
        $sendLogAll = $this->sendLogRepository->getAll();
        $sendLogAll->each(function ($sendLog) {
            $this->sendLogAggregatedRepository->create([
                'log_created'  => $sendLog->log_created_date,
                'cnt_id'       => $sendLog->cnt_id,
                'usr_id'       => $sendLog->usr_id,
                'sent_success' => $sendLog->success,
                'sent_fail'    => $sendLog->fail,
            ]);
        });
    }

}
