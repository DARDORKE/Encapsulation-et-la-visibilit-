<?php

include_once 'RealEstate.php';
include_once 'House.php';
include_once 'Flat.php';

$house = new House('102 rue des noyers', 350000.00, 120, 2);
echo $house->getAddress().'<br>';
$flat = new Flat('45 rue de la république', 150000, 30, 3);
echo $flat->getFloor();