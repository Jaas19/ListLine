<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Services\UserService;
use App\Services\UserServiceInterface;
use App\Services\AuthService;
use App\Services\AuthServiceInterface;
use App\Services\MessageService;
use App\Services\MessageServiceInterface;
use App\Services\ProgramServiceInterface;
use App\Services\ProgramService;
use App\Services\TotalTypeServiceInterface;
use App\Services\TotalTypeService;
use App\Services\TotalServiceInterface;
use App\Services\TotalService;

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
        $this->app->bind(
            ProgramServiceInterface::class,
            ProgramService::class
        );
        $this->app->bind(
            TotalTypeServiceInterface::class,
            TotalTypeService::class
        );
        $this->app->bind(
            TotalServiceInterface::class,
            TotalService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $user = Auth::user();
            $view->with('user', $user);
            $view->with('admin', $user ? $user->role === 'admin' : false);

            if($user){
                $messageService = app(MessageServiceInterface::class);
                $view->with('messages', $messageService->listMessages());
            } else {
                $view->with('messages', []);
            }
            });
    }
}
