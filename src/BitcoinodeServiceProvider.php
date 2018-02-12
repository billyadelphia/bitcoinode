<?php

namespace Adelphia\Bitcoinode;

use Illuminate\Support\ServiceProvider;
use Adelphia\Bitcoinode\Bitcoinode;

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
