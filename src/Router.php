<?php

namespace Smtm\Frameless;

class Router
{
    public static function fetchRoute()
    {
        $parsedUrl = parse_url($_SERVER['REQUEST_URI']);
        if(array_key_exists($parsedUrl['path'], self::ROUTES)) {
            return self::ROUTES[$parsedUrl['path']];
        } else {
            return self::ROUTES['404'];
        }
    }
}
