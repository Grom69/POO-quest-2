<?php

require_once 'Truck.php';


echo '<h2>Camion 1</h2><br>';
$truck1 = new Truck('green', 4, 'electric', 200);
echo "Départ : " . $truck1->forward();
echo '<br>';
echo "Freinage : " . $truck1->brake();
echo '<br>';
echo "Capacité : " .$truck1->getStockCapacity();
echo '<br>';
$truck1->setFilling(150);
echo "Chargement de 150 ";
echo '<br>';
echo "Contrôle du chargement : ". $truck1->checkFilling();
echo '<br>';


echo '<br>';
echo '<br>';


echo '<h2>Camion 2</h2><br>';
$truck2 = new Truck('blue', 4, 'gazole', 500);
echo "Départ : " . $truck2->forward();
echo '<br>';
echo "Freinage : " . $truck2->brake();
echo '<br>';
echo "Capacité : " .$truck2->getStockCapacity();
echo '<br>';
$truck2->setFilling(500);
echo "Chargement de 500 ";
echo '<br>';
echo "Contrôle du chargement : ". $truck2->checkFilling();

