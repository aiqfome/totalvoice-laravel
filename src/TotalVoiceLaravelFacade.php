<?php

namespace Aiqfome\TotalVoiceLaravel;

use Illuminate\Support\Facades\Facade;

class TotalVoiceLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'totalvoice';
    }
}
