<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendLogAggregatedPost;
use App\Repositories\CountryRepository;
use App\Repositories\SendLogAggregatedRepository;
use App\Repositories\UserRepository;

class SendLogAggregatedController extends Controller
{
    /**
     * @var SendLogAggregatedRepository $sendLogAggregatedRepository
     */
    private $sendLogAggregatedRepository;

    /**
     * @var CountryRepository $countryRepository
     */
    private $countryRepository;

    /**
     * @var UserRepository $userRepository
     */
    private $userRepository;

    public function __construct(
        SendLogAggregatedRepository $sendLogAggregatedRepository,
        CountryRepository $countryRepository,
        UserRepository $userRepository
    ) {
        $this->sendLogAggregatedRepository = $sendLogAggregatedRepository;
        $this->countryRepository = $countryRepository;
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $countries = $this->countryRepository->getAll(['cnt_id', 'cnt_title']);
        $users = $this->userRepository->getAll(['usr_id', 'usr_name']);

        return view('sendLogAggregated', [
            'countries' => $countries->pluck('cnt_title', 'cnt_id')->toArray(),
            'users' => $users->pluck('usr_name', 'usr_id')->toArray(),
            'startDate' => $this->sendLogAggregatedRepository->getStartDate(),
            'endDate' => $this->sendLogAggregatedRepository->getEndDate()
        ]);
    }

    public function getSendLogAggregated(SendLogAggregatedPost $sendLogAggregatedPost)
    {
        $sendLogAggregated = $this->sendLogAggregatedRepository->getSendLogAggegated($sendLogAggregatedPost);

        $countries = $this->countryRepository->getAll(['cnt_id', 'cnt_title']);
        $users = $this->userRepository->getAll(['usr_id', 'usr_name']);

        return view('sendLogAggregated', [
            'countries' => $countries->pluck('cnt_title', 'cnt_id')->toArray(),
            'users' => $users->pluck('usr_name', 'usr_id')->toArray(),
            'startDate' => $this->sendLogAggregatedRepository->getStartDate(),
            'endDate' => $this->sendLogAggregatedRepository->getEndDate(),
            'fromDateValue' => $sendLogAggregatedPost->get('date-from'),
            'toDateValue' => $sendLogAggregatedPost->get('date-to'),
            'selectedCountry' => $sendLogAggregatedPost->get('country'),
            'selectedUser' => $sendLogAggregatedPost->get('user'),
            'sendLogAggregated' => $sendLogAggregated,
        ]);
    }
}
