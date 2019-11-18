<?php

namespace App\Repositories\Interfaces;

use Illuminate\Support\Collection;

interface CountryRepositoryInterface
{
    public function getAll(): Collection;
}
