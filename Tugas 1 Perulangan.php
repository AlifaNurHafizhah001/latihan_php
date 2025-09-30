<?php
echo "<h2>PERULANGAN ANGKA 100 SAMPAI 1000</h2>";

/* 1. PERULANGAN FOR */
echo "<h3>1. Menggunakan FOR</h3>";
for($i=100; $i<=1000; $i++) {
    echo $i." ";
    if(($i - 99) % 20 == 0) { // pindah baris tiap 20 angka
        echo "<br>";
    }
}

echo "<hr>";

/* 2. PERULANGAN WHILE */
echo "<h3>2. Menggunakan WHILE</h3>";
$j = 100;
while($j <= 1000) {
    echo $j." ";
    if(($j - 99) % 20 == 0) {
        echo "<br>";
    }
    $j++;
}

echo "<hr>";

/* 3. PERULANGAN DO-WHILE */
echo "<h3>3. Menggunakan DO-WHILE</h3>";
$k = 100;
do {
    echo $k." ";
    if(($k - 99) % 20 == 0) {
        echo "<br>";
    }
    $k++;
} while($k <= 1000);

echo "<hr>";

/* 4. PERULANGAN FOREACH */
echo "<h3>4. Menggunakan FOREACH</h3>";
$angka = range(100, 1000); // buat array otomatis
foreach($angka as $idx => $value) {
    echo $value." ";
    if((($idx+1)) % 20 == 0) {
        echo "<br>";
    }
}
?>



