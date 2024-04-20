<?php
include_once("MobilListrik.php");
include_once("Mobil.php");

echo "<h3'> Output Study Case 2 - Liskov Substitution </h3>";
$emobil = new MobilListrik();
$mobil = new Mobil();

echo "<br>";
$emobil->Baterai();
$mobil->BBM();
