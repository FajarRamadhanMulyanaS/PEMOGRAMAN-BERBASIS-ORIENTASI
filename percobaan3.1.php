
<?php
class Kendaraan 
{
    var $jumlahroda = 4;
    var $warna;
    var $bahanbakar = "premium";
    var $harga = 100000000;
    var $merek;
    var $tahunpembuatan = 2004;

    function statusharga() 
    {
        if($this->harga > 50000000) { 
            $status = "Harga kendaraan mahal";
        } else {
            $status = "Harga kendaraan murah";
        }
        return $status;
    }

    function statussubsidi()
    {
        if($this->tahunpembuatan < 2005 && $this->bahanbakar == "premium") {
            $status = "Dapat Subsidi";
        } else {
            $status = "Tidak dapat Subsidi";
        }
        return $status;
    }
}

// Instansiasi kelas 
$objekkendaraan = new Kendaraan(); // Pembuatan objek dari kelas
echo "Jumlah roda : " . $objekkendaraan->jumlahroda . " <br/>"; // Proses instansiasi pemanggilan variabel 
echo "Status harga : " . $objekkendaraan->statusharga() . "<br/>"; // Proses instansiasi/pemanggilan function kelas
echo "Status subsidi : " . $objekkendaraan->statussubsidi(); // Proses instansiasi/pemanggilan function kelas

?>
