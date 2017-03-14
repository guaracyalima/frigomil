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
            'App\Repositories\ClienteRepository',
            'App\Repositories\ClienteRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\FilialRepository',
            'App\Repositories\FilialRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\LogoRepository',
            'App\Repositories\LogoRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\MenuRepository',
            'App\Repositories\MenuRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\SeoRepository',
            'App\Repositories\SeoRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\ServicoRepository',
            'App\Repositories\ServicoRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\TelefoneRepository',
            'App\Repositories\TelefoneRepositoryEloquent'
        );
    }
}
