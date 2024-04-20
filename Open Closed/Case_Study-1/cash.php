<?php
include_once("tipePembayaran.php");

class Cash implements tipePembayaran
{
    public function memprosesPembayaran(): void
    {
        echo "Pembayaran dilakukan secara Cash <br>";
    }
}
