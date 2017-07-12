<?php

require 'robot.php';

	$robot1 = new Robot();
	$robot1->setWarna("Merah");
	$robot1->setNama("Humanoid");
	$robot1->jenis = 2;

	$jenis1 = $robot1;
	$jenis1->setNama("Humanoid");
	$jenis2 = clone $robot1;
	$jenis2->setNama("Humanoid 2");
	$robot1->cekRobot();
	
	echo "<hr>";
	var_dump($jenis1);
	echo "<hr>";
	
	$jenis1->cekRobot();
	echo "<hr>";
	var_dump($jenis1);
	echo "<hr>";
	
	$jenis2->cekRobot();
	echo "<hr>";
var_dump($jenis2);