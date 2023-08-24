<?php

namespace Akichi139\Bladeboostrap\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Akichi139\Bladeboostrap\Bladeboostrap
 */
class Bladeboostrap extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Akichi139\Bladeboostrap\Bladeboostrap::class;
    }
}
