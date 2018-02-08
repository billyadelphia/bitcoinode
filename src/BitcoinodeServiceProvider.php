<?php

namespace Adelphia\Bitcoinode;

use Illuminate\Support\ServiceProvider;
use adelphia\bitcoinode\Bitcoinode;

class BitcoinodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('Bitcoinode', function(){
            return new Bitcoinode;
        });
    }
}
