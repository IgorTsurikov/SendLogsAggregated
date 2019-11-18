<?php

namespace App\Repositories;

use App\Country;
use App\Repositories\Interfaces\CountryRepositoryInterface;
use Illuminate\Support\Collection;

class CountryRepository implements CountryRepositoryInterface
{
    public function getAll($columns = null): Collection
    {
        return Country::all($columns);
    }
}
