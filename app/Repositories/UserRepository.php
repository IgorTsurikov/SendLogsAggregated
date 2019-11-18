<?php

namespace App\Repositories;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\User;
use Illuminate\Support\Collection;

class UserRepository implements UserRepositoryInterface
{
    public function getAll($columns = null): Collection
    {
        return User::all();
    }
}
