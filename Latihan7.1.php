<?php
// Class induk
class Manusia {
    // Property class Manusia
    public $nama_saya;

    // Method pada class Manusia
    function berinama($saya) {
        $this->nama_saya = $saya;
    }
}

// Class turunan atau subclass dari class Manusia
class Teman extends Manusia {
    // Property class Teman
    public $nama_teman;

    // Method pada class Teman
    function berinamateman($teman) {
        $this->nama_teman = $teman;
    }
}

// Instansiasi class Teman
$objectteman = new Teman();

// Mengakses method dari class Manusia dan class Teman
$objectteman->berinama("Dika");
$objectteman->berinamateman("Andra");

// Menampilkan isi property
echo "Nama Saya: " . $objectteman->nama_saya . "<br/>";
echo "Nama Teman Saya: " . $objectteman->nama_teman;
?>
