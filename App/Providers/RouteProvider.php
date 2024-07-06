<?php

namespace App\Providers;

use App\Commands\RouteList;
use Stellar\Provider;

class RouteProvider extends Provider
{
    public static function commands(): array
    {
        return [RouteList::class];
    }
}
