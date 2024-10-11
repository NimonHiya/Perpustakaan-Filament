<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Borrowing;
use App\Observers\BorrowingObserver;

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
        Borrowing::observe(BorrowingObserver::class);
    }
}
