<?php
include_once("tipePembayaran.php");

class pembayaranCustomer
{
    public function menerimaPembayaran(tipePembayaran $type): void
    {
        $type->memprosesPembayaran();
    }
}
