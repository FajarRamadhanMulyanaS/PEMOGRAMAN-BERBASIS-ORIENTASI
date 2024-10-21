<?php
class Segitiga {
    public $tinggi;
    public $lebar;

    function __construct($tinggi, $lebar) {
        $this->tinggi = $tinggi;
        $this->lebar = $lebar;
    }

   
    function Luas() {
        $Luas = $this->tinggi * $this->lebar / 2;
        echo "Tinggi Segitiga = " . $this->tinggi . "<br/>";
        echo "Lebar Segitiga = " . $this->lebar . "<br/>";
        echo "<br/><b>Luas Segitiga = $Luas</b>";  
    }
}


$segitiga = new Segitiga(200, 500);
$segitiga->Luas();
?>
