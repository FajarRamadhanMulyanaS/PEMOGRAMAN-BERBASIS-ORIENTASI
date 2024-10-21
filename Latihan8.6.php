<?php
class Manusia
{
    // Properties (Encapsulation)
    public $nama = "Ardi";
    public $kelas = "SI 2";

    // Method untuk menampilkan nama
    public function tampilkan_nama()
    {
        return $this->nama;
    }

    // Method untuk menampilkan kelas
    public function tampilkan_kelas()
    {
        return $this->kelas;
    }
}

// Instansiasi objek dari class Manusia
$manusia = new Manusia();

// Memanggil method tampilkan_nama dan tampilkan_kelas dari class Manusia
echo "Nama : " . $manusia->tampilkan_nama() . "<br />";
echo "Kelas : " . $manusia->tampilkan_kelas();
?>