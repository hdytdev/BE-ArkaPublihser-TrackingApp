<?php

namespace App\Providers;

use App\Interface\CustomerRepositoryInterface;
use App\Interface\CustomerServiceInterface;
use App\Interface\StatisticServiceInterface;
use App\Repositories\CustomerRepository;
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

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
