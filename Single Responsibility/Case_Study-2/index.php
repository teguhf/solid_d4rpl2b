<?php
include_once("Mahasiswa.php");
include_once("MahasiswaView.php");

echo "<h3'> Output Study Case 2 - Single Responsibility </h3>";
$mhs = new Mahasiswa("2205058", "Teguh Febriyana");
$data = new MahasiswaView();
echo "<br>";
echo "<br>";
echo $data->showMahasiswa($mhs);
