<?php

namespace App\Repositories\Interfaces;

use Illuminate\Support\Collection;

interface SendLogRepositoryInterface
{
    public function getAll(): Collection;
}
