<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//bisa diganti dengan cara yang lebih singkat dengan switch
$nilai = "A";
switch($nilai){
case "A":
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
    case "B":
    case "C":
    echo "anda lulus" . PHP_EOL;
    break;
    case "D":
        echo "anda tidak lulus" . PHP_EOL;
        break;
        default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
}

//jika ganti syntax 

$nilai = "A";
switch($nilai):
case "A":
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
    case "B":
    case "C":
    echo "anda lulus" . PHP_EOL;
    break;
    case "D":
        echo "anda tidak lulus" . PHP_EOL;
        break;
        default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
    endswitch;