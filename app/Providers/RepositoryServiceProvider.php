<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\ProductRepository',
            'App\Repositories\ProductRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\SobreRepository',
            'App\Repositories\SobreRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\ContatoRepository',
            'App\Repositories\ContatoRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\TopoRepository',
            'App\Repositories\TopoRepositoryEloquent'
        );
    }
}
