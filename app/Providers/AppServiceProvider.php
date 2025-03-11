<?php

namespace App\Providers;

use App\Customer\CustomerServiceInterface;
use App\Services\CustomerService;
use App\Services\interface\JournalServiceInterface;
use App\Services\JournalService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CustomerServiceInterface::class, CustomerService::class);
        $this->app->singleton(JournalServiceInterface::class, JournalService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
