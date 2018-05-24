<?php

namespace skygdi\ShoppingCart;


use Illuminate\Support\ServiceProvider;

class ShoppingCartProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //include __DIR__.'/routes.php';
        

        $this->publishes([
            __DIR__.'/../database/migrations/create_shopping_cart_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_shopping_cart_table.php'),
        ], 'migrations');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
    }
}
