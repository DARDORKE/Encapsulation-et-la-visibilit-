<?php

include_once 'RealEstate.php';
include_once 'House.php';
include_once 'Flat.php';

$house = new House('102 rue des noyers', 350000.00, 120, 2);
echo $house->getAddress().'<br>';
$flat = new Flat('45 rue de la république', 150000, 30, 3);
echo $flat->getFloor();

// Chaque bien immobilier peut être associé à une annexe, mais ce n'est pas obligatoire.
// Il existe plusieurs types d'annexes : les jardins, et les places de parking.
// Les deux possèdent une surface qui ne doit pas être modifiable, mais seule celle des jardins doit être comprise dans
// la surface habitable. Les jardins possèdent également une caractéristique permettant de définir si une piscine est
// présente ou non, tandis que les stationnements ont un numéro de place.
//
//Utilisez la composition pour ajouter des informations dans votre application immobilière.