<?php
class Kendaraan {
    
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;

   
function setjumlahroda($a){
    $this->jumlahRoda = $a;
}

function setwarna($b){
    $this->warna = $b;
}

    function setMerek($x) {
        $this->merek = $x;
    }

    function getMerek() {
        return $this->merek;
    }

    function setHarga($y) {
        $this->harga = $y;
    }

    function getHarga() {
        return $this->harga;
    } 

    function statusHarga()
    {
        if ($this->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }
}

$kendaraan1 = new Kendaraan();
$kendaraan1->setMerek('Yamaha Mio');
$kendaraan1->setHarga(10000000);
$kendaraan1->setjumlahroda(2);
$kendaraan1->statusHarga();

$kendaraan2 = new Kendaraan();
$kendaraan2->setMerek('Honda City');
$kendaraan2->setHarga(300000000);
$kendaraan2->setjumlahroda(4);
$kendaraan2->statusHarga();

echo $kendaraan1->getMerek();
echo "<br>";
echo $kendaraan1->jumlahRoda;
echo "<br>";
echo $kendaraan1->getHarga();
echo "<br>";
echo $kendaraan1->statusHarga();
echo "<br>";
echo $kendaraan2->getMerek();
echo "<br>";
echo $kendaraan2->jumlahRoda;
echo "<br>";
echo $kendaraan2->getHarga();
echo "<br>";
echo $kendaraan2->statusHarga();




?>
