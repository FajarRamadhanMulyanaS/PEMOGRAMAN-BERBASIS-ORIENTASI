<?php
class kendaraan 
{
    var $jumlahroda;
    var $warna;
    var $bahanbakar;
    var $harga = 350000000;
    var $merek;
    var $status;

    function statusharga()
    {
        if ($this->harga > 50000000) {
            $this->status = "Mahal";
        } else {
            $this->status = "Murah";
        }
        return $this->status;
    }
}

$objekkendaraan = new kendaraan();

class kendaraan2
{
    var $jumlahroda = 4;
    var $warna;
    var $bahanbakar = "premium";
    var $harga = 100000000;
    var $merek;
    var $tahunpembuatan = 2004;

    function dapatsubsidi()
    {
        
        if ($this->bahanbakar == "premium" && $this->tahunpembuatan < 2005) {
            return "Dapat Subsidi";
        } else {
            return "Tidak Dapat Subsidi";
        }
    }
}

// Objek 1
$objekkendaraan1 = new kendaraan2;
// Setting properties
$objekkendaraan1->harga = 10000000;
$objekkendaraan1->tahunpembuatan = 1999;
// Instansiasi objek (pemanggilan method/function)
echo "Status harga: " . $objekkendaraan->statusharga();

// Objek 2
$objekkendaraan2 = new kendaraan2;
// Setting properties
$objekkendaraan2->bahanbakar = "pertamax";
$objekkendaraan2->tahunpembuatan = 1999;
// Instansiasi objek (pemanggilan method/function)
echo "<br>";
echo "Status BBM: " . $objekkendaraan2->dapatsubsidi();
echo "<br>";
echo "Harga bekas: " . $objekkendaraan2->hargasecondkendaraan();
?>
