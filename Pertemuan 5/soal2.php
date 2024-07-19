<?php

// Input panjang dan lebar
$panjang = 10;
$lebar = 5;

// Menghitung LUAS persegi panjang
function hitungLuas($panjang, $lebar)
{
    return $panjang * $lebar;
}

// Menghitung KELILING persegi panjang
function hitungKeliling($panjang, $lebar)
{
    return 2 * ($panjang + $lebar);
}

// Menghitung DIAGONAL persegi panjang
function hitungDiagonal($panjang, $lebar)
{
    return sqrt(($panjang * $panjang) + ($lebar * $lebar));
}

// Menghitung luas, keliling, dan panjang diagonal
$luas = hitungLuas($panjang, $lebar);
$keliling = hitungKeliling($panjang, $lebar);
$diagonal = hitungDiagonal($panjang, $lebar);

// Menampilkan hasil
echo "Panjang: $panjang<br>";
echo "Lebar: $lebar<br>";
echo "Luas: $luas<br>";
echo "Keliling: $keliling<br>";
echo "Panjang Diagonal: $diagonal<br>";
