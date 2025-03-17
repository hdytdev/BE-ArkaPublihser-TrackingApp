<?php

namespace App\Providers;

use App\Interface\CustomerServiceInterface;
use App\Interface\StatisticServiceInterface;
use App\Services\CustomerService;
use App\Services\StatisticService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(StatisticServiceInterface::class,StatisticService::class);
        $this->app->singleton(CustomerServiceInterface::class,CustomerService::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
