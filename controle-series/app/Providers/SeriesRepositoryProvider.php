<?php

namespace App\Providers;

use App\Repositories\EloquentSeriesRepository;
use App\Repositories\SeriesRepository;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;

class SeriesRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public array $bindings = [
        SeriesRepository::class => EloquentSeriesRepository::class
    ];
    public function register(): void
    {
        // $this->app->bind(abstract:SeriesRepository::class, concrete:EloquentSeriesRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
