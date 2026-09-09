<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function foo()
{
    echo "foo" . PHP_EOL;
}
function bar()
{
    echo "bar" . PHP_EOL;
}

$functionYgAkanDipanggil = "foo";
$functionYgAkanDipanggil();
$functionYgAkanDipanggil = "bar";
$functionYgAkanDipanggil();

function sayHello(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Hello $finalname" . PHP_EOL;
}
function ProsesSample(string $name) : string{
return "sample  $name";
}
sayhello("Eko", "ProsesSample");
sayhello("Eko", "strtoupper");
sayHello("Eko", "strtolower");