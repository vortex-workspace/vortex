<?php

namespace App;

use Stellar\Request;

class TestController
{
    public static function test(Request $request, string $name, int $number)
    {
        dd($name, $number);
    }
}
