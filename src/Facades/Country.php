<?php

namespace KinDigi\Country\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \KinDigi\Country\Country
 */
class Country extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \KinDigi\Country\Country::class;
    }
}
