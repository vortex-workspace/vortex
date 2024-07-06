<?php

use Stellar\Boot\Application;
use Stellar\Request;
use Stellar\RouteDriver;

require_once __DIR__ . '/../vendor/autoload.php';

try {

    Application::build(__DIR__ . '/..');
} catch (Exception|Error $exception) {
    dd($exception);
}

RouteDriver::discover(new Request())::getRoute()->call();
