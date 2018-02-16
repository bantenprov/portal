<?php namespace Bantenprov\Portal\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Portal facade.
 *
 * @package Bantenprov\Portal
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class Portal extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'portal';
    }
}
