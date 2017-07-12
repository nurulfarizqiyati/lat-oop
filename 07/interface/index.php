<?php

require 'Pesawat.php';
require 'bis.php';

$Pesawat = new Pesawat();
$Pesawat->Info();

echo "<br>";

$bis = new bis();
$bis->Info();
