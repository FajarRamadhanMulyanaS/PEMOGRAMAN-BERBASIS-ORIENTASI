<?php
class Perulangan {
    public function loop() {
        $array = array('Subang', 'Bandung', 'Jakarta', 'Surabaya', 'Yogyakarta');
        foreach ($array as $key) {
            echo $key . "<br/>";
        }
    }
}

$objekPerulangan = new Perulangan();
echo "Nama-Nama Kota di Pulau Jawa: " . "<br />";
$objekPerulangan->loop(). "<br />"; 
?>
