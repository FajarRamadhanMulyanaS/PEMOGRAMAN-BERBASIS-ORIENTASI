<?php

class Kendaraan {
    var $merek;
    var $jmlRoda;
    var $harga;
    var $warna;
    var $bhnBakar;
    var $tahun;

    function setMerek($merek) {
        $this->merek = $merek;
    }

    function getMerek() {
        return $this->merek;
    }

    function setJmlRoda($jmlRoda) {
        $this->jmlRoda = $jmlRoda;
    }

    function getJmlRoda() {
        return $this->jmlRoda;
    }

    function setHarga($harga) {
        $this->harga = $harga;
    }

    function getHarga() {
        return $this->harga;
    }

    function setWarna($warna) {
        $this->warna = $warna;
    }

    function getWarna() {
        return $this->warna;
    }

    function setBhnBakar($bhnBakar) {
        $this->bhnBakar = $bhnBakar;
    }

    function getBhnBakar() {
        return $this->bhnBakar;
    }

    function setTahun($tahun) {
        $this->tahun = $tahun;
    }

    function getTahun() {
        return $this->tahun;
    }

    function statusHarga() {
        if($this->harga > 150000000) {
            return "Mahal";
        } else {
            return "Murah";
        }
    }

    function dapatSubsidi() {
        if($this->bhnBakar == "Solar" || $this->bhnBakar == "Premium") {
            return "Ya";
        } else {
            return "Tidak";
        }
    }

    function hargaSecondKendaraan() {
        return $this->harga * 0.8;
    }
}

$Data1 = array('Toyota Yaris', '4', 160000000, 'Merah', 'Pertamax', 2014);
$Data2 = array('Honda Scoopy', '2', 13000000, 'Putih', 'Premium', 2005);
$Data3 = array('Isuzu Panther', '4', 40000000, 'Hitam', 'Solar', 1994);

for($i = 1; $i <= 3; $i++) {
for($h = 0; $h <= 5; $h++)
    ${"kendaraan$i"} = new Kendaraan();
    ${"kendaraan$i"}->setMerek(${"Data$i"}[0]);
    ${"kendaraan$i"}->setJmlRoda(${"Data$i"}[1]);
    ${"kendaraan$i"}->setHarga(${"Data$i"}[2]);
    ${"kendaraan$i"}->setWarna(${"Data$i"}[3]);
    ${"kendaraan$i"}->setBhnBakar(${"Data$i"}[4]);
    ${"kendaraan$i"}->setTahun(${"Data$i"}[5]);
}

for($i = 1; $i <= 3; $i++) {
    echo "Kendaraan $i:<br>"
        ."Merek: ".${"kendaraan$i"}->getMerek()."<br>"
        ."Jumlah Roda: ".${"kendaraan$i"}->getJmlRoda()."<br>"
        ."Harga: ".${"kendaraan$i"}->getHarga()."<br>"
        ."Warna: ".${"kendaraan$i"}->getWarna()."<br>"
        ."Bahan Bakar: ".${"kendaraan$i"}->getBhnBakar()."<br>"
        ."Tahun: ".${"kendaraan$i"}->getTahun()."<br>"
        ."Status Harga: ".${"kendaraan$i"}->statusHarga()."<br>"
        ."Dapat Subsidi: ".${"kendaraan$i"}->dapatSubsidi()."<br>"
        ."Harga Second: ".${"kendaraan$i"}->hargaSecondKendaraan()."<br><br>";
}

?>
