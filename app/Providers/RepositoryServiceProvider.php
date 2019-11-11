<?php

namespace App\Providers;

use App\Repositories\CountryRepository;
use App\Repositories\Interfaces\CountryRepositoryInterface;
use App\Repositories\Interfaces\NumberRepositoryInterface;
use App\Repositories\Interfaces\SendLogRepositoryInterface;
use App\Repositories\NumberRepository;
use App\Repositories\SendLogRepository;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(CountryRepositoryInterface::class, CountryRepository::class);
        $this->app->bind(NumberRepositoryInterface::class, NumberRepository::class);
        $this->app->bind(SendLogRepositoryInterface::class, SendLogRepository::class);
    }
}
