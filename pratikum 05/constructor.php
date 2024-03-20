<?php

class kendaraan
{
    public $nama;
    public $warna;
    public $tempatoperasi;

function __construct($nama, $warna, $tempatoperasi)
{
    $this->nama = $nama;
    $this->warna = $warna;
    $this->tempatoperasi =$tempatoperasi;
}
}
$kendaraan = new Kendaraan("Mobil", "Merah", "Darat");
echo $kendaraan->nama;
echo "<br>";
echo $kendaraan->warna;
echo "<br>";
echo $kendaraan->tempatoperasi;
echo "<br>";

?>