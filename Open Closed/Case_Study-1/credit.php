<?php
include_once("tipePembayaran.php");

class Credit implements tipePembayaran
{
    public function memprosesPembayaran(): void
    {
        echo "Pembayaran dilakukan secara Credit <br>";
    }
}
