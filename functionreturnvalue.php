<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function sum(int $first, int $second)
{
$total = $first + $second;
return$total;
}
$result = sum(100, 100);
var_dump($result);

$result = sum(20, 30);
var_dump($result);
