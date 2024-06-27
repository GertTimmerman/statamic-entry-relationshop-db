<?php

namespace App\Providers;

use Statamic\Statamic;
use Illuminate\Support\ServiceProvider;
use Stillat\Relationships\Support\Facades\Relate;

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
        Relate::oneToMany(
            'books.author',
            'authors.books'
        );
    }
}
