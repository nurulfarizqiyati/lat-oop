<?php
require 'app/robot.php';
require 'app/Validator.php';

$rules = array('warna' => 'required', 'nama' => 'required', 'stok' => 'required|equal:4');
$data = array('warna' => 'Merah', 'nama' => 'Humanoid', 'stok' => 4);
$test = new Validator();

if ($test->validate($data, $rules) === true) 
{
    $robot1 = new robot();
    $robot1->setWarna($data['warna'])
        ->setNama($data['nama'])
        ->setStok($data['stok']);
		
    echo $robot1->viewResult();
    echo "<hr>";
    echo '<pre>';
        return print_r($robot1);
    echo '</pre>';
}
 else 
 {
    echo '<pre>';
        return print_r($test->error());
    echo '</pre>';
}