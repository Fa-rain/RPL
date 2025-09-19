<?php

require "Class01.php"; // memungkinkan akses terhadap segala sesuatu yang ada di class01 jika public

$jeruk = new Buah("jeruk", "hijau", "1 kg", "Rp 20.000"); // instansi + inisialisasi obyek karena adanya constructor
$nanas = new Buah("Nanas", "Kuning", "1 kg", "Rp 5.000"); // instansi + inisialisasi obyek karena adanya constructor 
echo $nanas->info(); // 
echo "<br>";
echo $jeruk->info();
echo "<br>";
echo $apel->info(); // sudah di instansi dan inisialisasi di class01.php

?>