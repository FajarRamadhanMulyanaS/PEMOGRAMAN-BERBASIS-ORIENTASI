<?php
class Perulangan {
    var $t;

    public function setTinggi($t) {
        $this->t = $t;
    }

    public function getTinggi() {
        return $this->t;
    }

    public function Segitiga1() {
        for ($i = 1; $i < 6; $i++) {
           
            for ($j = $i; $j < 6; $j++) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
            }

            for ($j = 1; $j <= $i; $j++) {
                echo "&nbsp;*" . "&nbsp;";
            }

            
            for ($j = 1; $j <= $i; $j++) {
                echo "&nbsp;*" . "&nbsp;";
            }

            echo '<br />';
        }
    }

    public function cetakSegitigaKanan()
    {
        for ($i = 1; $i <= $this->t; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
 
        for ($i = $this->t - 1; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
 
    public function cetakSegitigaKiri() {
        for ($i = 1; $i <= $this->t; $i++) {
            for ($j = $this->t; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br>";
        }

        for ($i = $this->t - 1; $i >= 1; $i--) {
            for ($j = $this->t; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br>";
        }
    }
}

$segitiga1 = new Perulangan();
echo "Segitiga 1 :<br/>";
$segitiga1->Segitiga1();

$segitiga2 = new Perulangan(); 
$segitiga2->setTinggi(6);
echo "<br>Segitiga 2 :<br>";
$segitiga2->cetakSegitigaKanan();

$segitiga3 = new Perulangan();
$segitiga3->setTinggi(6);
echo "<br>Segitiga 3 : <br>";
$segitiga3->cetakSegitigaKiri();
?>
