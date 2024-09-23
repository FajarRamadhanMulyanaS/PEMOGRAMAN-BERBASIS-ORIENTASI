<?php
class Shape {
    const PI = 3.142;

    // Method untuk menghitung area
    function area(...$args) {
        if (count($args) === 0) {
            return 0; // Tidak ada argumen
        }
        switch (count($args)) {
            case 1: // Menghitung area lingkaran
                return self::PI * $args[0] * $args[0]; // Menggunakan jari-jari
            case 2: // Menghitung area persegi panjang
                return $args[0] * $args[1];
            default:
                return null; // Lebih dari 2 argumen tidak didukung
        }
    }
}

// Membuat objek Shape untuk lingkaran
$circle = new Shape();
echo "Area Lingkaran: " . $circle->area(3) . "<br/>"; // Jari-jari 3

// Membuat objek Shape untuk persegi panjang
$rect = new Shape();
echo "Area Persegi Panjang: " . $rect->area(8, 6); // Panjang 8, Lebar 6
?>
