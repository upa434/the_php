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

function sumALL(...$values)
{
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "total " . implode(",", $values) . " = $total" . PHP_EOL;
    }

    $values = [1, 2, 3, 4, 5];

    sumALL(1, 2, 3, 4, 5);
    sumall(...$values);
