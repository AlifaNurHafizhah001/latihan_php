<?php
// ==============================
// 1. Cek Status Cuaca
// ==============================
$cuaca = "hujan";

echo "1. Cek Cuaca: ";
if ($cuaca == "hujan") {
    echo "Bawa payung ya, karena sedang hujan!<br><br>";
} elseif ($cuaca == "cerah") {
    echo "Cuaca cerah, cocok buat jalan-jalan.<br><br>";
} else {
    echo "Cuaca mendung, lebih baik tetap siaga.<br><br>";
}

// ==============================
// 2. Cek Usia untuk Tiket Bioskop
// ==============================
$usia = 16;

echo "2. Tiket Bioskop: ";
if ($usia >= 18) {
    echo "Kamu boleh menonton film dewasa (18+).<br><br>";
} elseif ($usia >= 13) {
    echo "Kamu boleh menonton film remaja (13+).<br><br>";
} else {
    echo "Kamu hanya boleh menonton film anak-anak.<br><br>";
}

// ==============================
// 3. Mode Aplikasi (Dark/Light)
// ==============================
$mode = "dark";

echo "3. Mode Aplikasi: ";
if ($mode == "dark") {
    echo "Aplikasi dalam mode Gelap 🌙<br><br>";
} else {
    echo "Aplikasi dalam mode Terang ☀️<br><br>";
}

// ==============================
// 4. Cek Stok Barang
// ==============================
$stok = 0;

echo "4. Stok Barang: ";
if ($stok > 0) {
    echo "Barang tersedia, silakan lanjutkan pembelian.<br><br>";
} else {
    echo "Maaf, barang sedang habis.<br><br>";
}

// ==============================
// 5. Sapaan Berdasarkan Jam
// ==============================
$jam = 14;

echo "5. Sapaan: ";
if ($jam >= 5 && $jam < 12) {
    echo "Selamat Pagi!<br><br>";
} elseif ($jam >= 12 && $jam < 18) {
    echo "Selamat Siang!<br><br>";
} else {
    echo "Selamat Malam!<br><br>";
}
?>
