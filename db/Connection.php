<?php

class Connection
{

    public static function initDB($config)
    {
        try {
            return new PDO(
                $config['mysql'] . ';' . $config['dbname'],
                $config['username'],
                $config['password'],
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
