<?php

namespace Vendor\adelphia\bitcoinode\src;


use Illuminate\Support\ServiceProvider;
use vendor\adelphia\bitcoinode\src\Bitcoinode;

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
