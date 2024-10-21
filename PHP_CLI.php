<?php

class BangunRuang
{
    var $username; // deklarasi variabel untuk menyimpan username
    var $password; // deklarasi variabel untuk menyimpan password

    // Konstruktor untuk menginisialisasi username dan password
    public function __construct($username, $password)
    {
        $this->username = $username; // set variabel $username
        $this->password = $password; // set variabel $password
    }

    // Metode untuk memeriksa kecocokan username dan password
    public function login($username, $password)
    {
        // jika username dan password yang diinput sesuai dengan yang disimpan, return true
        if ($this->username == $username && $this->password == $password) {
            return true;
        } else {
            return false; // jika tidak sesuai, return false
        }
    }

    // Metode untuk menghitung luas persegi, rumusnya sisi^2
    public function hitungLuasPersegi($sisi)
    {
        return pow($sisi, 2); // menggunakan fungsi pow untuk pangkat dua
    }

    // Metode untuk menghitung keliling persegi, rumusnya 4 * sisi
    public function hitungKelilingPersegi($sisi)
    {
        return 4 * $sisi;
    }

    // Metode untuk menghitung luas persegi panjang, rumusnya panjang * lebar
    public function hitungLuasPersegiPanjang($panjang, $lebar)
    {
        return $panjang * $lebar;
    }

    // Metode untuk menghitung keliling persegi panjang, rumusnya 2 * (panjang + lebar)
    public function hitungKelilingPersegiPanjang($panjang, $lebar)
    {
        return 2 * ($panjang + $lebar);
    }

    // Metode untuk menghitung luas segitiga, rumusnya 1/2 * alas * tinggi
    public function hitungLuasSegitiga($alas, $tinggi)
    {
        return 0.5 * $alas * $tinggi;
    }

    // Metode untuk menghitung keliling segitiga, rumusnya a + b + c (jumlah ketiga sisinya)
    public function hitungKelilingSegitiga($a, $b, $c)
    {
        return $a + $b + $c;
    }

    // Metode untuk menghitung luas lingkaran, rumusnya π * r^2
    public function hitungLuasLingkaran($jariJari)
    {
        return 3.14 * pow($jariJari, 2); // menggunakan π = 3.14
    }

    // Metode untuk menghitung keliling lingkaran, rumusnya 2 * π * r
    public function hitungKelilingLingkaran($jariJari)
    {
        return 2 * 3.14 * $jariJari;
    }

    // Metode untuk menghitung luas belah ketupat, rumusnya 1/2 * diagonal1 * diagonal2
    public function hitungLuasBelahKetupat($diagonal1, $diagonal2)
    {
        return 0.5 * $diagonal1 * $diagonal2;
    }

    // Metode untuk menghitung keliling belah ketupat, rumusnya 4 * sisi
    public function hitungKelilingBelahKetupat($sisi)
    {
        return 4 * $sisi;
    }
}

// Membuat array berisi beberapa user (username dan password)
$user = array(
    array("username" => "mahasiswa1", "password" => "pass1"),
    array("username" => "mahasiswa2", "password" => "pass2"),
    array("username" => "mahasiswa3", "password" => "pass3")
);

// Perulangan untuk terus meminta input username dan password dari user
while (true) {
    echo "Masukan Username: ";
    $username = trim(fgets(STDIN)); // menerima input username dari user
    echo "Masukan Password: ";
    $password = trim(fgets(STDIN)); // menerima input password dari user

    // Inisialisasi variabel untuk menandakan apakah user ditemukan
    $found = false;

    // Perulangan untuk memeriksa username dan password di array $user
    foreach ($user as $usr) {
        if ($usr["username"] == $username) { // cek apakah username cocok
            // Membuat objek BangunRuang dengan username dan password dari array
            $bangunRuang = new BangunRuang($usr["username"], $usr["password"]);
            // Jika login berhasil, set found = true dan tampilkan menu pilihan
            if ($bangunRuang->login($username, $password)) {
                $found = true;
                while (true) { // masuk ke menu jika login berhasil
                    echo "Pilih Bangun Ruang:\n";
                    echo "1. Persegi\n";
                    echo "2. Persegi Panjang\n";
                    echo "3. Segitiga\n";
                    echo "4. Lingkaran\n";
                    echo "5. Belah Ketupat\n";
                    $pilihan = (int) trim(fgets(STDIN)); // menerima pilihan user

                    // Switch untuk memproses pilihan berdasarkan input user
                    switch ($pilihan) {
                        case 1:
                            // Persegi
                            echo "Masukan Sisi Persegi: ";
                            $sisi = (int) trim(fgets(STDIN));
                            echo "Luas Persegi: " . $bangunRuang->hitungLuasPersegi($sisi) . "\n";
                            echo "Keliling Persegi: " . $bangunRuang->hitungKelilingPersegi($sisi) . "\n";
                            break;
                        case 2:
                            // Persegi Panjang
                            echo "Masukan Panjang Persegi Panjang: ";
                            $panjang = (int) trim(fgets(STDIN));
                            echo "Masukan Lebar Persegi Panjang: ";
                            $lebar = (int) trim(fgets(STDIN));
                            echo "Luas Persegi Panjang: " . $bangunRuang->hitungLuasPersegiPanjang($panjang, $lebar) . "\n";
                            echo "Keliling Persegi Panjang: " . $bangunRuang->hitungKelilingPersegiPanjang($panjang, $lebar) . "\n";
                            break;
                        case 3:
                            // Segitiga
                            echo "Masukan Alas Segitiga: ";
                            $alas = (int) trim(fgets(STDIN));
                            echo "Masukan Tinggi Segitiga: ";
                            $tinggi = (int) trim(fgets(STDIN));
                            echo "Luas Segitiga: " . $bangunRuang->hitungLuasSegitiga($alas, $tinggi) . "\n";
                            echo "Masukan Sisi 1 Segitiga: ";
                            $a = (int) trim(fgets(STDIN));
                            echo "Masukan Sisi 2 Segitiga: ";
                            $b = (int) trim(fgets(STDIN));
                            echo "Masukan Sisi 3 Segitiga: ";
                            $c = (int) trim(fgets(STDIN));
                            echo "Keliling Segitiga: " . $bangunRuang->hitungKelilingSegitiga($a, $b, $c) . "\n";
                            break;
                        case 4:
                            // Lingkaran
                            echo "Masukan Jari-Jari Lingkaran: ";
                            $jariJari = (int) trim(fgets(STDIN));
                            echo "Luas Lingkaran: " . $bangunRuang->hitungLuasLingkaran($jariJari) . "\n";
                            echo "Keliling Lingkaran: " . $bangunRuang->hitungKelilingLingkaran($jariJari) . "\n";
                            break;
                        case 5:
                            // Belah Ketupat
                            echo "Masukan Diagonal 1 Belah Ketupat: ";
                            $diagonal1 = (int) trim(fgets(STDIN));
                            echo "Masukan Diagonal 2 Belah Ketupat: ";
                            $diagonal2 = (int) trim(fgets(STDIN));
                            echo "Luas Belah Ketupat: " . $bangunRuang->hitungLuasBelahKetupat($diagonal1, $diagonal2) . "\n";
                            echo "Masukan Sisi Belah Ketupat: ";
                            $sisi = (int) trim(fgets(STDIN));
                            echo "Keliling Belah Ketupat: " . $bangunRuang->hitungKelilingBelahKetupat($sisi) . "\n";
                            break;
                    }

                    // Tanya user apakah ingin kembali ke menu utama
                    echo "Kembali ke menu utama? (y/n) ";
                    $konfirmasi = trim(fgets(STDIN)); // menerima input dari user
                    if ($konfirmasi == "y") {
                        continue; // jika "y", kembali ke menu utama
                    } else {
                        break; // jika tidak, keluar dari menu
                    }
                }
            }
        }
    }

    // Jika username atau password tidak ditemukan
    if (!$found) {
        echo "Maaf username atau password tidak ditemukan, coba lagi? (y/n) ";
        $konfirmasi = trim(fgets(STDIN)); // tanya apakah user ingin mencoba lagi
        if ($konfirmasi == "y") {
            continue; // jika "y", ulangi input username dan password
        } else {
            exit; // jika "n", keluar dari program
        }
    }
}

?>