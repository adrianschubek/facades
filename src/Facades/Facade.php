<?php
/**
 * Copyright (c) 2019 Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Facades;

use Psr\Container\ContainerInterface;

class Facade
{
    protected static $container;

    public static function __callStatic($name, $arguments)
    {
        self::$container->
    }

    protected static function setContainer(ContainerInterface $container)
    {
        self::$container = $container;
    }
}