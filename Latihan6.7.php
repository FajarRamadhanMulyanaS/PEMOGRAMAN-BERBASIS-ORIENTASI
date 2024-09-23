<?php
class Perulangan {
    public function loop() {
        $i = 0;
        do {
            $i++;
            echo $i . '<br />';
           
        } while ($i <= 9);
    }
}

$ObjekPerulangan = new Perulangan();
$ObjekPerulangan->loop();
?>
