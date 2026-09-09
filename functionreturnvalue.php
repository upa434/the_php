<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function sum(int $first, int $second) : int
{
$total = $first + $second;
return $total;
}
$result = sum(100, 100);
var_dump($result);

$result = sum(20, 30);
var_dump($result);

function getFinalValue (int $value) : string
{
    if ($value >= 80) {
        return "A";
       } else if ($value >= 70) {
        return "B";
        }
        else if ($value >= 60) {
        return "C";
        }
        else if ($value >= 50) {
        return "D";
        }
        else {
            return "E";
        }
        echo "ups" . PHP_EOL;
    }$score = getFinalValue(90);
    var_dump($score);


