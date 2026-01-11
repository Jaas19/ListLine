<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;
use App\Services\UserServiceInterface;
use App\Services\AuthService;
use App\Services\AuthServiceInterface;
use App\Services\MessageService;
use App\Services\MessageServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            UserServiceInterface::class, 
            UserService::class
        );
        $this->app->bind(
            AuthServiceInterface::class, 
            AuthService::class
        );
        $this->app->bind(
            MessageServiceInterface::class, 
            MessageService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
