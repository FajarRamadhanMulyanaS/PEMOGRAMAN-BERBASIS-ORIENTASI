<?php
class Pegadaian
{
    var $besarpinjaman = 1000000;
    var $besarbunga = 10;
    var $lamaangsuran = 5;
    var $haritelambat = 40;
    var $dendaperhari = 0.15;

    function totalpinjaman()
    {
        $persentase = ($this->besarpinjaman * $this->besarbunga) / 100;
        $totalpinjaman = $this->besarpinjaman + $persentase;
        return $totalpinjaman;
    }

    function besarangsuran()
    {
        $totalpinjaman = $this->totalpinjaman();
        $besarangsuran = $totalpinjaman / $this->lamaangsuran;
        return $besarangsuran;
    }

    function hitungdenda($haritelambat)
    {
        $besarangsuran = $this->besarangsuran();
        return $haritelambat * ($besarangsuran * $this->dendaperhari) / 100;
    }

    function totalpembayaran($haritelambat)
    {
        $denda = $this->hitungdenda($haritelambat);
        return $this->besarangsuran() + $denda;
    }
}

$pegadaian = new Pegadaian();
$haritelambat = $pegadaian->haritelambat;

$dendaketerlambatan = $pegadaian->hitungdenda($haritelambat);
$besaranpembayaran = $pegadaian->totalpembayaran($haritelambat);

echo ("TOKO PEGADAIAN SYARIAH") . "<br>";
echo ("Jl. Keadilan No. 16") . "<br>";
echo ("Telp. 72353459") . "<br>" . "<br>" . "<br>";

echo "Besaran Pinjaman : " . $pegadaian->besarpinjaman;
echo "<br>";
echo "Besar Bunga (%) : " . $pegadaian->besarbunga;
echo "<br>";
echo "Total Pinjaman : " . $pegadaian->totalpinjaman();
echo "<br>";
echo "Lama Angsuran : " . $pegadaian->lamaangsuran;
echo "<br>";
echo "Besaran Angsuran : " . $pegadaian->besarangsuran();
echo "<br>";
echo "Keterlambatan Angsuran (hari) : " . $haritelambat;
echo "<br>";
echo "Denda Keterlambatan : " . $dendaketerlambatan;
echo "<br>";
echo "Total Pembayaran : " . $besaranpembayaran;
?>