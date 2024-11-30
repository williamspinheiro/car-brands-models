<?php

use Illuminate\Support\ServiceProvider;

class BrandsModelsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Carregar migrações automaticamente
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // Publicar migrações explicitamente com o prefixo car
        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'car-brands-models-migrations');

        // Publicar seeders com o prefixo car
        $this->publishes([
            __DIR__.'/../database/seeders' => database_path('seeders'),
        ], 'car-brands-models-seeders');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}
