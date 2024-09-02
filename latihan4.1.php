<?php
class kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;

    function statusHarga()
    {
        if ($this->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }

    function setMerek($x)
    {
        $this->merek = $x;
    }

    function setHarga($x)
    {
        $this->harga = $x;
    }
}

$kendaraan1 = new kendaraan();
$kendaraan1->setMerek('Yamaha MIO');
$kendaraan1->setHarga(10000000);
echo $kendaraan1->statusHarga();

?>
