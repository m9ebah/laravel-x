<?php

namespace Nawaf\LaravelX\Facade;

use Illuminate\Support\Facades\Facade;

class X extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return 'x';
    }
}