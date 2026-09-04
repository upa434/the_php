<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$absen = 67 ;
$nilai = 90 ;

if ($nilai >= 85 && $absen >= 85) {
    echo "Selamat anda lulus". PHP_EOL;
}else {
    echo"Maaf,anda tidak lulus". PHP_EOL;
    }

// jika ingin mengeksekusi false,tambahkan else

$absen = 20 ;
$nilai = 56 ;

if($nilai >=  70 && $absen >= 15){
    echo "Nilai Anda A" . PHP_EOL;
} else if ($nilai >=60 && 10){
    echo "Nilai Anda B" . PHP_EOL;
   }   else if ($nilai >=  50 && $absen >= 5)
        {echo "Nilai Anda C" . PHP_EOL;
 }   else {
 echo "Nilai Anda E" . PHP_EOL;
 }


 //syntax alternatif adalah :


    if($nilai >=  70 && $absen >= 15):
    echo "Nilai Anda A" . PHP_EOL;
 elseif ($nilai >=60 && 10):
    echo "Nilai Anda B" . PHP_EOL;
      elseif ($nilai >=  50 && $absen >= 5):
        echo "Nilai Anda C" . PHP_EOL;
   else :
 echo "Nilai Anda E" . PHP_EOL;
endif;
 

