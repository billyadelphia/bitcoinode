<?php

namespace Adelphia\Bitcoinode;

use Illuminate\Support\Facades\Facade;

class BitcoinodeFacades extends Facade {

    protected static function getFacadeAccessor() { return 'BitcoinCall'; }

}
