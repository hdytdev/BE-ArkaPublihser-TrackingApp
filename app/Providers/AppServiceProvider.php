<?php

namespace App\Providers;

use App\Interface\CustomerRepositoryInterface;
use App\Interface\CustomerServiceInterface;
use App\Interface\StatisticServiceInterface;
use App\Policies\UserManagementPolicy;
use App\Repositories\CustomerRepository;
use App\Services\CustomerService;
use App\Services\StatisticService;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('update-user', [UserManagementPolicy::class, 'update']);
        Gate::define('delete-user', [UserManagementPolicy::class, 'delete']);
    }
}
