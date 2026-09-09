<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$sayhello = function(string $name)
{
    echo "Hello $name" . PHP_EOL;
};

$sayhello("eko");
$sayhello("budi");

function sayGoodBye(string $name, $filter)
{
    $finalname = $filter($name);
    echo "good bye $finalname" . PHP_EOL;
}

sayGoodBye("aufa", function (string $name) : string {
    return strtoupper($name);
});

$filterfunction = function (string $name) : string {
    return strtoupper($name);
};

sayGoodBye("aufa",$filterfunction);

$firstname = "Eko";
$lastname = "Budi";

$sayhelloEko = function () use ($firstname, $lastname){
    echo  "Hello $firstname $lastname" . PHP_EOL;
};
$sayhelloEko();
