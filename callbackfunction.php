<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function sayhello(string $name, callable $filter)
{
    $finalname = call_user_func($filter, $name);
    echo "Hello $finalname" . PHP_EOL;
}

sayhello("Eko", "strtoupper");
sayhello("Aufa", "strtolower");
sayhello("Eko", function (string $name): string{
    return strtoupper($name);
});
sayhello("Eko", fn ($name) => strtoupper($name));