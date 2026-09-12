<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function factorialLoop(int $value): int
{
    $total = 1;
    for ($i=1; $i <= $value; $i++ ) {
    $total *= $i;
    }
    return $total;
}
var_dump(factorialLoop(5));
var_dump(1 * 2 * 3 * 4 * 5);