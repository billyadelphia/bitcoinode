<?php

namespace vendor\adelphia\bitcoinode\src;

use Illuminate\Support\Facades\Facade;

class BitcoinodeFacades extends Facade {

    protected static function getFacadeAccessor() { return 'Bitcoinode'; }

}
