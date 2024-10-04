<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

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
        Paginator::useBootstrap();

        // Share $count variable with all views
        view()->composer('*', function ($view) {
            $user = Auth::user();
            $count = 0; // Default value

            if ($user) {
                $userid = $user->id;
                $count = Cart::where("user_id", $userid)->count();
            }

            // Share the $count variable globally to all views
            $view->with('count', $count);
        });
    }
}
