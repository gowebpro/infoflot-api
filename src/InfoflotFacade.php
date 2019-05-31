<?php

namespace Gowebpro\Infoflot;

use Illuminate\Support\Facades\Facade;

/**
 * Class LaravelFacade
 * @package Dusterio\LinkPreview\Integrations
 * @codeCoverageIgnore
 */
class InfoflotFacade extends Facade
{
    /**
     * Name of the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'infoflot';
    }
}
