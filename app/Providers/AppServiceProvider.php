<?php

namespace App\Providers;

use App\Http\Contracts\UserRepositoryInterface;
use App\Http\Repositories\MysqlUserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(UserRepositoryInterface::class , function (){
            return new MysqlUserRepository();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
