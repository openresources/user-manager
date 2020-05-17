<?php

namespace Openresources\UserManager;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Openresources\UserManager\Skeleton\SkeletonClass
 */
class UserManagerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'user-manager';
    }
}
