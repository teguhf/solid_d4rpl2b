<?php
include_once("tipePembayaran.php");

class Debit implements tipePembayaran
{
    public function memprosesPembayaran(): void
    {
        echo "Pembayaran dilakukan secara Debit <br>";
    }
}
