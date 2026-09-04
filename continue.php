<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

for ($counter = 1; $counter <=100; $counter++){
    if($counter % 2 == 0){
        continue;
}
echo "counter : $counter" . PHP_EOL;
}

//untuk hasil ganjil

for ($counter = 1; $counter <=100; $counter++){
    if($counter % 2 == 1){
        continue;
}
echo "counter : $counter" . PHP_EOL;
}
//untuk hasil genap