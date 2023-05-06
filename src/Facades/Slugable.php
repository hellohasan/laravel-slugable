<?php

namespace Hellohasan\LaravelSlugable\Facades;

use Illuminate\Support\Facades\Facade;

class Slugable extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @see \Hellohasan\LaravelSlugable\Slugable
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return "laravel-slugable";
    }
}
