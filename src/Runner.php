<?php

namespace Hexlet\Php;

class Runner
{
    public static function run()
    {
        return ['TAYLOR', 'ABIGAIL', ''];
    }
}

function run()
{
    $collection = collect(['taylor', 'abigail', 'ivan'])->map(function ($name) {
        return strtoupper($name);
    });

    return $collection;
}

