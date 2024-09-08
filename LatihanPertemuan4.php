<?php

class PenghitungAngsuran
{
    private $jumlahPinjaman;
    private $sukuBunga;
    private $lamaAngsuran;
    private $pokokAngsuran;


    function __construct($pinjaman, $bunga, $angsuran)
    {
        $this->setJumlahPinjaman($pinjaman);
        $this->setSukuBunga($bunga);
        $this->setLamaAngsuran($angsuran);
        $this->pokokAngsuran = $pinjaman / $angsuran;
    }


    function setJumlahPinjaman($pinjaman)
    {
        $this->jumlahPinjaman = $pinjaman;
    }


    function setSukuBunga($bunga)
    {
        $this->sukuBunga = $bunga;
    }

    function setLamaAngsuran($angsuran)
    {
        $this->lamaAngsuran = $angsuran;
    }


    function hitungAngsuran()
    {
        $detailAngsuran = array();
        $totalBunga = ($this->jumlahPinjaman * $this->sukuBunga) / 100;
        $penguranganBunga = $totalBunga / $this->lamaAngsuran;
        for ($i = 0; $i < $this->lamaAngsuran; $i++) {
            $bungaBulanIni = $totalBunga - ($i * $penguranganBunga);
            $totalAngsuran = $this->pokokAngsuran + $bungaBulanIni;

            $detailAngsuran[] = array(
                "angsuran_ke" => $i + 1,
                "pokok" => $this->pokokAngsuran,
                "bunga" => $bungaBulanIni,
                "total" => $totalAngsuran
            );
        }

        return $detailAngsuran;
    }

    function tampilkanAngsuran()
    {

        echo "TOKO PEGADAIAN SYARIAH\n";
        echo "<br/>";
        echo "Jl Keadilan No 16\n";
        echo "<br/>";
        echo "Telp 732746238\n\n";
        echo "<br/>";
        echo "<br/>";
        echo "Program Penghitung Besaran Angsuran Hutang\n";
        echo "<br/>";
        echo "Besaran Pinjaman : Rp." . number_format($this->jumlahPinjaman, 0, ',', '.') . "\n";
        echo "<br/>";
        echo "Masukan Besaran Bunga (%) : " . $this->sukuBunga . "\n";
        echo "<br/>";
        echo "Lama Angsuran (bulan) : " . $this->lamaAngsuran . "\n\n";

        $angsuran = $this->hitungAngsuran();

        foreach ($angsuran as $item) {
            echo "Angsuran " . $this->terbilang($item['angsuran_ke']) . " : " .
                number_format($item['pokok'], 0, ',', '.') . " + " .
                number_format($item['bunga'], 0, ',', '.') . " = " .
                number_format($item['total'], 0, ',', '.') . "\n";
        }
    }


    function terbilang($angka)
    {
        $daftarAngka = array('pertama', 'kedua', 'ketiga', 'keempat', 'kelima');
        return $daftarAngka[$angka - 1];
    }
}


$pinjaman = 1000000;
$bunga = 10;
$angsuran = 5;

$penghitung = new PenghitungAngsuran($pinjaman, $bunga, $angsuran);
$penghitung->tampilkanAngsuran();

?>