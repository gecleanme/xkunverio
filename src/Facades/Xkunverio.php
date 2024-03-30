<?php

namespace gecleanme\Xkunverio\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \gecleanme\Xkunverio\Xkunverio
 */
class Xkunverio extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \gecleanme\Xkunverio\Xkunverio::class;
    }
}
