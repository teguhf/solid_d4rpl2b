<?php
include_once("pembayaranCustomer.php");
include_once("debit.php");
include_once("cash.php");
include_once("credit.php");

echo "<h3> Output Study Case 1 - Open Closed </h3>";
$debit = new debit();
$cash = new cash();
$kredit = new credit();

$bayar = new PembayaranCustomer();

$bayar->menerimaPembayaran($debit);
$bayar->menerimaPembayaran($cash);
$bayar->menerimaPembayaran($kredit);
