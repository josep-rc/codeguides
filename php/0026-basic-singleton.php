<?php

namespace BasicSingleton;

class DB
{
    private static ?DB $instance = null;

    private function __construct(public array $config)
    {
        echo "Instance created!";
    }

    public static function getInstance(array $config): ?DB
    {
        if(self::$instance === null) {
            self::$instance = new DB($config);
        }

        return self::$instance;
    }
}

$db = DB::getInstance([]); // Instance crated
$db = DB::getInstance([]); // same instance
$db = DB::getInstance([]); // same instance

