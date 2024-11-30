<?php

namespace Car\BrandsModels;

use Illuminate\Support\ServiceProvider;

class BrandsModelsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Load Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // Publish seeders
        $this->publishes([
            __DIR__.'/../database/seeders/CarBrandsSeeder.php' => database_path('seeders/CarBrandsSeeder.php'),
            __DIR__.'/../database/seeders/CarModelsSeeder.php' => database_path('seeders/CarModelsSeeder.php'),
        ], 'brands-models-seeders');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}