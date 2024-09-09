<?php
class Supermarket {
    public $pembeli;
    public $kartu;
    public $totalbelanja;
    public $diskon;
    public $biayakeluar;

    function mengaturpembeli($pembeli) {
        switch ($pembeli) {
            case 1:
                $this->kartu = "Memiliki";
                $this->totalbelanja = 200000;
                break;
            case 2:
                $this->kartu = "Memiliki";
                $this->totalbelanja = 570000;
                break;
            case 3:
                $this->kartu = "Tidak Memiliki";
                $this->totalbelanja = 120000;
                break;
            case 4:
                $this->kartu = "Tidak Memiliki";
                $this->totalbelanja = 90000;
                break;
            default:
                echo "Pembeli tidak valid!";
                return;
        }

    
        if ($this->kartu == "Memiliki") {
            if ($this->totalbelanja > 500000) {
                $this->diskon = 50000;
            } elseif ($this->totalbelanja > 100000) {
                $this->diskon = 15000;
            } else {
                $this->diskon = 0;
            }
        } else {
            if ($this->totalbelanja > 100000) {
                $this->diskon = 5000;
            } else {
                $this->diskon = 0;
            }
        }

        $this->biayakeluar = $this->totalbelanja - $this->diskon;

      
        echo  "Pembeli $pembeli<br/>";
        echo "Kartu Member: {$this->kartu}<br/>";
        echo "Total Belanja: {$this->totalbelanja}<br/>";
        echo "Diskon: {$this->diskon}<br/>";
        echo "Biaya yang dikeluarkan: {$this->biayakeluar}<br/><br/>";
    }
}


$supermarket = new Supermarket();
for ($i = 1; $i <= 4; $i++) {
    $supermarket->mengaturpembeli($i);
}
?>
