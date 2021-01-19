<?php

class Request
{
    //get path from url
    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
            '/'
        );
    }
    //get method. GET, POST
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
