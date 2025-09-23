<?php
// =============================
// Nomor 1
// =============================
// Mengapa string bisa dijumlahkan? Karena PHP melakukan type juggling.
// String yang berisi angka otomatis dikonversi menjadi integer/float
// jika dipakai pada operasi aritmatika.

$a = "10"; // string angka
$b = "20"; // string angka
$jumlah = $a + $b;
echo "Nomor 1: '10' + '20' = $jumlah<br><br>";


// =============================
// Nomor 2
// =============================
// Perbedaan operator / dan %
// "/" menghasilkan hasil bagi
// "%" menghasilkan sisa pembagian

$x = 10;
$y = 3;
echo "Nomor 2:<br>";
echo "$x / $y = " . ($x / $y) . " (hasil pembagian)<br>";
echo "$x % $y = " . ($x % $y) . " (sisa pembagian)<br><br>";


// =============================
// Nomor 3
// =============================
// Tambahkan kode operator agar bisa menghasilkan nilai gabungan string
// Menggunakan operator "."

$string1="Ini adalah string sederhana";
$string2="Ini adalah
string yang bisa
memiliki beberapa
baris";
$string3="Dia berkata: \"I'll be back\"";
$string4="Anda telah berhasil menghapus C:\\xampp\\htdocs";
$string5="Kalimat ini tidak akan pindah ke: \n baris baru";
$string6="Variabel juga bisa otomatis ditampilkan $string1 dan $string3";

echo "Nomor 3:<br>";
echo $string1 . "<br><br>";
echo nl2br($string2) . "<br><br>";
echo $string3 . "<br><br>";
echo $string4 . "<br><br>";
echo nl2br($string5) . "<br><br>"; // menampilkan \n jadi <br>
echo $string6 . "<br><br>";

// Tambahan contoh operator aritmatika
$a = 15;
$b = 4;
echo "Contoh tambahan operator:<br>";
echo "$a + $b = " . ($a + $b) . "<br>";
echo "$a - $b = " . ($a - $b) . "<br>";
echo "$a * $b = " . ($a * $b) . "<br>";
echo "$a / $b = " . ($a / $b) . "<br>";
echo "$a % $b = " . ($a % $b) . "<br><br>";


// =============================
// Tugas Tambahan: Penulisan Tipe Data String dengan Double Quoted
// =============================

// Tabel Karakter Khusus untuk Double Quoted String
// -----------------------------------------------
// | Karakter | Arti / Fungsi                   |
// |----------|---------------------------------|
// | \n       | Baris baru (new line)           |
// | \r       | Carriage return                 |
// | \t       | Tab horizontal                  |
// | \"       | Tanda kutip ganda (")           |
// | \'       | Tanda kutip tunggal (')         |
// | \\       | Backslash (\)                   |
// | \$       | Tanda dolar ($)                 |
// | \f       | Form feed                       |
// | \v       | Tab vertikal                    |
// -----------------------------------------------

// Contoh penggunaan karakter khusus:
echo "Tugas Tambahan (Double Quoted String):<br>";
$contoh1 = "Halo,\nIni baris baru dengan karakter \\n";
$contoh2 = "Teks dengan tab\t(ada spasi tab di sini)";
$contoh3 = "Dia berkata: \"PHP itu mudah!\"";
$contoh4 = "Harga barang = \$1000";
$contoh5 = "Folder ada di C:\\xampp\\htdocs";

echo nl2br($contoh1) . "<br>";
echo $contoh2 . "<br>";
echo $contoh3 . "<br>";
echo $contoh4 . "<br>";
echo $contoh5 . "<br>";
?>
