<?php
require 'app/robot.php';
require 'app/Validator.php';

$rules = array('warna' => 'required', 'merk' => 'required', 'roda' => 'required|equal:4');
$data = array('warna' => 'Merah', 'nama' => 'Humanoid', 'stok' => 2);
$test = new Validator();

if ($test->validate($data, $rules) === true) {
    $robot1 = new robot($data);
	
    echo  $robot1->viewResult();
    echo "<hr>";
    $robot1->warna = "putih";
     $robot1->pembeli = "pak jokowi";
	
    echo '<pre>';
        return print_r( $robot1);
    echo '</pre>';
	
} else {
    echo '<pre>';
        return print_r( $robot1->error());
    echo '</pre>';
}