<?php
include_once("Kubus.php");
include_once("Persegi.php");

echo "<h3> Output Study Case 1 - Interface Segregation </h3>";
$box = new Kubus();
$rect = new rectangle();

echo "<h3> Kubus </h3>";
$box->calculateVolume();
$box->calculateArea();

echo "<h3> Persegi </h3>";
$rect->calculateArea();
