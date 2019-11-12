<?php

namespace App\Providers;

use App\Services\SendLogService;
use App\Services\SendLogServiceInterface;
use Illuminate\Support\ServiceProvider;

class SendLogServiceProvider extends ServiceProvider
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
        $this->app->bind(SendLogServiceInterface::class,SendLogService::class);
    }
}
