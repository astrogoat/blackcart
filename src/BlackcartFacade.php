<?php

namespace Astrogoat\Blackcart;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Blackcart\Blackcart
 */
class BlackcartFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'blackcart';
    }
}
