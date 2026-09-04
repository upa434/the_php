<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



//default argument value


function SayHello($firstname, $lastname = "")
{
echo "Hello $firstname $lastname" . PHP_EOL;
}

sayHello("aufa");
sayHello("nino");
sayHello("aufa","nur");

function sum( int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}
sum(100, 100);
sum("100", "100");
sum(true, false);