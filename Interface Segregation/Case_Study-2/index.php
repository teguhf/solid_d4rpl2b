<?php
include_once("printerEntryLevel.php");
include_once("printerMidRange.php");
include_once("printerFlagShip.php");


echo "<h3> Output Study Case 2 - Interface Segregation </h3>";
$prtEnt = new printerEntryLevel();
$prtMid = new printerMidRange();
$prtFs = new printerFlagShip();

echo "<h3> Printer Entry Level </h3>";
$prtEnt->cetakKertas();

echo "<h3> Printer Mid Range </h3>";
$prtMid->cetakKertas();
$prtMid->scanKertas();

echo "<h3> Printer Flag Ship </h3>";
$prtFs->terimaFax();
$prtFs->cetakKertas();
$prtFs->scanKertas();
