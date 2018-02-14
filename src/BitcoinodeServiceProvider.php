<?php

namespace Adelphia\Bitcoinode;

use Illuminate\Support\ServiceProvider;
use Adelphia\Bitcoinode\BitcoinCall;

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
        $this->app->bind('BitcoinCall', function(){
            return new BitcoinCall;
        });
    }
}
