<?php
class Perulangan {
    public function loop() {
        for ($baris = 1; $baris <= 6; $baris++) {
            for ($kolom = 1; $kolom <= $baris; $kolom++) {
                echo $kolom . "&nbsp;";
            }
            echo "<br />";
        }
    }

    public function loop2() {
        for ($baris = 1; $baris <= 6; $baris++) {
            for ($kolom = 1; $kolom <= $baris; $kolom++) {
                echo "* *" ."&nbsp;";
            }
            echo "<br />";
        }
    }
}

$objekPerulangan = new Perulangan();
echo "Jenis Perulangan 1 " . "<br/>";
echo $objekPerulangan->loop() . "<br />";
echo "Jenis Perulangan 2 " . "<br/>";
echo $objekPerulangan->loop2() . "<br />";
?>
