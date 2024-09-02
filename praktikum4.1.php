<?php
class Mahasiswa {
    var $nama;
    var $kelas;
    var $matkul;
    var $nilai;

   

    function setNama($nama) {
        $this->nama = $nama;
    }

    function setKelas($kelas) {
        $this->kelas = $kelas;
    }

    function setMatkul($matkul) {
        $this->matkul = $matkul;
    }

    function setNilai($nilai) {
        $this->nilai = $nilai;
    }

    function getNama() {
        return $this->nama;
    }

    function getKelas() {
        return $this->kelas;
    }

    function getMatkul() {
        return $this->matkul;
    }

    function getNilai() {
        return $this->nilai;
    }

    function cekKelulusan() {
        if ($this->nilai >= 75) {
            return "Lulus Kuis";
        } else {
            return "Tidak Lulus Kuis";
        }
    }
}


$Data1 = array("Aditya", "SI 2", "Pemrograman Berorientasi Objek", 80);
$Data2 = array("Shinta", "SI 2", "Pemrograman Berorientasi Objek", 75);
$Data3 = array("Ineu", "SI 2", "Pemrograman Berorientasi Objek", 55);


for ($i = 1; $i <= 3; $i++) 
for($h = 0; $h <= 3; $h++)
{
    ${"mahasiswa$i"} = new Mahasiswa(); 
    ${"mahasiswa$i"}->setNama(${"Data$i"}[0]);
    ${"mahasiswa$i"}->setKelas(${"Data$i"}[1]);
    ${"mahasiswa$i"}->setMatkul(${"Data$i"}[2]);
    ${"mahasiswa$i"}->setNilai(${"Data$i"}[3]);
}

for ($i = 1; $i <= 3; $i++) {
    echo "Mahasiswa $i:<br>"
        ."Nama: ".${"mahasiswa$i"}->getNama()."<br>"
        ."Kelas: ".${"mahasiswa$i"}->getKelas()."<br>"
        ."Matkul: ".${"mahasiswa$i"}->getMatkul()."<br>"
        ."Nilai: ".${"mahasiswa$i"}->getNilai()."<br>"
        ."Kuis: ".${"mahasiswa$i"}->cekKelulusan()."<br><br>";
}
?>
