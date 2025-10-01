<?php
echo "TUGAS FUNGSI<br><br>";

// 1. Fungsi menentukan bilangan terbesar dari 2 bilangan
function terbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$bil1 = 100;
$bil2 = 150;
echo "Bilangan terbesar dari $bil1 dan $bil2 adalah: " . terbesar($bil1, $bil2);
echo "<br><br>";

// 2. Menampilkan tanggal, bulan, dan tahun sekarang dengan getdate()
$sekarang = getdate();
echo "Tanggal sekarang (dengan getdate): " . 
     $sekarang["mday"] . "-" . 
     $sekarang["mon"] . "-" . 
     $sekarang["year"];
echo "<br><br>";

// 3. Menampilkan tanggal, bulan, dan tahun sekarang dengan date()
echo "Tanggal sekarang (dengan date): " . date("d-F-Y");
?>
