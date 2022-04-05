<?php

namespace Offlogs\ClientLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class ClientLaravel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'offlogs';
    }
}
