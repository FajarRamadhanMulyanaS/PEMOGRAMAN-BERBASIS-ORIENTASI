<?php
class manusia
{
    // property
    var $nama;
    var $warna;

    // method construct di jalankan pertama kali
    function __construct()
    {
        echo "ini adalah isi method construct <br/>";
    }

    // method destruct di jalankan terakhir 
    function __destruct()
    {
        echo "ini adalah isi method destruct <br/>";
    }

    // method manusia
    function tampilkan_nama()
    {
        return "Nama saya mahasiswa SI <br/>";
    }
}

// instansiasi class manusia 
$manusia = new manusia(); // Corrected: Use '=' to assign the new instance to $manusia

// memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();
?>
