<?php
// Array angka
$numbers = array(23, 24, 24, 30, 34, 35, 40, 40, 46, 47);

// Menghitung total penjumlahan
$total = array_sum($numbers);

// Menghitung nilai rata-rata (mean)
$mean = $total / count($numbers);

// Menghitung nilai median
sort($numbers); // Urutkan array
$count = count($numbers);
$middle = floor($count / 2);

if ($count % 2 == 0) {
    // Jika jumlah elemen genap, rata-rata dua angka tengah
    $median = ($numbers[$middle - 1] + $numbers[$middle]) / 2;
} else {
    // Jika jumlah elemen ganjil, ambil angka tengah
    $median = $numbers[$middle];
}

// Menampilkan angka ganjil
$ganjil = array_filter($numbers, function ($number) {
    return $number % 2 != 0;
});

// Output hasil
echo "Total Penjumlahan: $total\n <br>";
echo "Nilai Rata-rata (Mean): $mean\n <br>";
echo "Nilai Median: $median\n <br>";
echo "Angka Ganjil: " . implode(", ", $ganjil) . "\n<br>";
