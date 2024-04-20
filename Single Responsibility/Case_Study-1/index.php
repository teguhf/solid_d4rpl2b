<?php
include_once("persegi.php");
include_once("perhitunganPersegi.php");

echo "<H3> CASE STUDY - 1 SINGLE RESPONSIBILITY PRINCIPLE <H3>";
$kotak = new persegi(10);

$calculator = new PenghitungPersegi();
$luaspersegi = $calculator->hitungLuas($kotak);
echo "Luas Persegi = " . $luaspersegi;
