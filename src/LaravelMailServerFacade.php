<?php

namespace Talbot\LaravelMailServer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Talbot\LaravelMailServer\Skeleton\SkeletonClass
 */
class LaravelMailServerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-mail-server';
    }
}
