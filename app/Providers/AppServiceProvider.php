<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ItemRepository;
use App\Repositories\ItemRepositoryInterface;

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
        $this->app->bind(
            ItemRepositoryInterface::class,
            ItemRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
