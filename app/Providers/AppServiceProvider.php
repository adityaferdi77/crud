<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\PostModel;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('isAdmin', function ($user) {
            return $user->role == 'admin';
        });
        Gate::define('isOperator', function ($user) {
            return $user->role == 'operator';
        });
        Gate::define('isUser', function ($user) {
            return $user->role == 'user';
        });
    }
}
