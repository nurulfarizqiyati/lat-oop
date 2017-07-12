<?php

require 'Pesawat.php';
require 'bis.php';

$Pesawat = new Pesawat();
$Pesawat->jumlahpenumpang = 300;
$Pesawat->warna = 'putih biru';
$Pesawat->namaTransport();
$Pesawat->Info();

echo "<br>";

$bis = new Bis();
$bis->jumlahpenumpang = 60;
$bis->warna = 'putih biru';
$bis->namaTransport();
$bis->Info();
