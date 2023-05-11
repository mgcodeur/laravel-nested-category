<?php

namespace Mgcodeur\LaravelNestedCategory\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mgcodeur\LaravelNestedCategory\LaravelNestedCategory
 */
class LaravelNestedCategory extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mgcodeur\LaravelNestedCategory\LaravelNestedCategory::class;
    }
}
