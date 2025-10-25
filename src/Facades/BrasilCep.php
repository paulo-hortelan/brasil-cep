<?php

namespace Paulo Hortelan\BrasilCep\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Paulo Hortelan\BrasilCep\BrasilCep
 */
class BrasilCep extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Paulo Hortelan\BrasilCep\BrasilCep::class;
    }
}
