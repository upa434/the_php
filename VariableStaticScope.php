<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function increment()
{
    static $counter = 1;
    
    echo "Counter = $counter" . PHP_EOL;
    
    $counter++;
}

increment();
increment();
increment();