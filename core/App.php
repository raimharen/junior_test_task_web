<?php

class App
{
    protected static $registry = [];

    //put info into array
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    //get from $registry by key
    public static function get($key)
    {
        if (array_key_exists($key, static::$registry)) {
            return static::$registry[$key];
        }
    }
}
