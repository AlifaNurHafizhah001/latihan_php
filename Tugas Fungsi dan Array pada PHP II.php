<?php
echo "<h2>SOAL 1</h2>";

// Membuat array 2 dimensi berisi data 3 siswa
$siswa = [
    ["Andi", 85, 90],
    ["Budi", 78, 88],
    ["Citra", 92, 95]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa siswa ke-2: " . $siswa[1][2] . "<br><br>";

// Cetak semua data menggunakan looping
echo "Daftar Nilai Siswa:<br>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i][0] . 
         ", Nilai Matematika: " . $siswa[$i][1] . 
         ", Nilai Bahasa: " . $siswa[$i][2] . "<br>";
}

echo "<hr><h2>SOAL 2</h2>";

$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0] . "<br><br>";

// 2. Hitung total nilai stok * harga
$total = 0;
for ($i = 0; $i < count($buah); $i++) {
    $total += $buah[$i][1] * $buah[$i][2];
}
echo "Total nilai semua buah: Rp " . number_format($total, 0, ',', '.');

echo "<hr><h2>SOAL 3</h2>";

$produk = [
    ["nama" => "Headphone", "kategori" => "Elektronik", "harga" => 250000, "rating" => 4.7],
    ["nama" => "Tas Ransel", "kategori" => "Fashion", "harga" => 180000, "rating" => 4.5],
    ["nama" => "Smartwatch", "kategori" => "Gadget", "harga" => 500000, "rating" => 4.9]
];

// Mencari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $item) {
    if ($item["harga"] > $tertinggi["harga"]) {
        $tertinggi = $item;
    }
}

echo "Produk dengan harga tertinggi adalah: " . $tertinggi["nama"] .
     " (Rp " . number_format($tertinggi["harga"], 0, ',', '.') . ")";

echo "<hr><h2>SOAL 4</h2>";

// Membuat array 3x3 dengan angka acak 1–9
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
    }
}

// Cetak dalam bentuk matriks
echo "Matriks 3x3:<br>";
$total = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriks[$i][$j] . " ";
        $total += $matriks[$i][$j];
    }
    echo "<br>";
}

// Hitung jumlah total semua elemen
echo "<br>Total semua elemen: " . $total;
?>
