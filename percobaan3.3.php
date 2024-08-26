<?php 
class kendaraan
{
    var $jumlahroda; 
    var $warna;
    var $bahanbakar;
    var $harga ;
    var $merek ;
    function statusharga ()
    {
        if ($this->harga > 50000000) $status = "mahal";
        else $status = "murah";
        return $status;
    }
}
$objekkendaraan1 = new kendaraan();
$objekkendaraan1->merek = "Yamaha Mio";//set properties
$objekkendaraan1->harga="100000000";

$objekkendaraan2 = new kendaraan();
$objekkendaraan2 -> merek = "Toyota Avanza";
$objekkendaraan2->harga= "100000000";

$objekkendaraan3 = new kendaraan();
$objekkendaraan3 -> merek = "Honda Civic";
$objekkendaraan3->harga= "900000000";

echo "Merek kendaraan ke 1 : ".$objekkendaraan1 ->merek;
echo"<br>";
echo "Nominal Harga : ".$objekkendaraan1->harga;
echo "<br>";
echo "status harga kendaraan ke 1 : ".$objekkendaraan1->statusharga();
echo"<br>";
echo"<br>";

echo "Merek kendaraan ke 2 : ".$objekkendaraan2 ->merek;
echo"<br>";
echo "Nominal Harga : ".$objekkendaraan2->harga;
echo "<br>";
echo "status harga kendaraan ke 2 : ".$objekkendaraan2->statusharga();
echo"<br>";
echo"<br>";

echo "Merek kendaraan ke 3 : ".$objekkendaraan3 ->merek;
echo"<br>";
echo "Nominal Harga : ".$objekkendaraan3->harga;
echo "<br>";
echo "status harga kendaraan ke 3 : ".$objekkendaraan3->statusharga();

?>