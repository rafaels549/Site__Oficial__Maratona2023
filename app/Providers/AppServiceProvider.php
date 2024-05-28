<?php

namespace App\Providers;
use App\Models\User;
use App\Policies\authPolicy;
use Illuminate\Support\Facades\{Gate,URL};
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(User::class, authPolicy::class);
           
         if(env("APP_ENV") == "production"){
              URL::forceSchema("https");
         }
    }
}
