<?php
// Class induk
class Manusia {
    public $nama;
    public $umur;
    public $gender;

    function getInfo() {
        echo "Nama: " . $this->nama . "<br/>";
        echo "Umur: " . $this->umur . "<br/>";
        echo "Jenis Kelamin: " . $this->gender . "<br/>";
    }
}

// Class Ayah yang merupakan subclass dari Manusia
class Ayah extends Manusia {
    function pekerjaan() {
        echo "Pekerjaan: Pegawai Negeri Sipil<br/>";
    }
}

// Class Ibu yang merupakan subclass dari Manusia
class Ibu extends Manusia {
    function pekerjaan() {
        echo "Pekerjaan: Ibu Rumah Tangga<br/>";
    }
}

// Class Anak yang merupakan subclass dari Manusia
class Anak extends Manusia {
    function pekerjaan() {
        echo "Pekerjaan: Pelajar<br/>";
    }
}

// Instansiasi objek Ayah
$objekAyah = new Ayah();
$objekAyah->nama = "Budi";
$objekAyah->gender = "Laki-Laki";
$objekAyah->umur = "45";

echo "<b>Info Ayah</b><br/>";
$objekAyah->getInfo();
$objekAyah->pekerjaan();

// Instansiasi objek Ibu
$objekIbu = new Ibu();
$objekIbu->nama = "Dini";
$objekIbu->gender = "Perempuan";
$objekIbu->umur = "38";

echo "<b>Info Ibu</b><br/>";
$objekIbu->getInfo();
$objekIbu->pekerjaan();

// Instansiasi objek Anak
$objekAnak = new Anak();
$objekAnak->nama = "Ardi";
$objekAnak->gender = "Laki-Laki";
$objekAnak->umur = "15";

echo "<b>Info Anak</b><br/>";
$objekAnak->getInfo();
$objekAnak->pekerjaan();
?>
