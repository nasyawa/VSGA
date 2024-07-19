<?php
// Mendeklarasikan data mahasiswa
$nim = "2141720011";
$nama = "Nasya Kirana";
$nilai_q1 = 90;
$nilai_q2 = 95;
$nilai_uts = 80;
$nilai_uas = 85;
$nilai_proyek = 85;

// Menghitung nilai akhir dengan bobot
$nilai_akhir = ($nilai_q1 * 0.10) + ($nilai_q2 * 0.10) + ($nilai_uts * 0.10) + ($nilai_uas * 0.20) + ($nilai_proyek * 0.50);

// Mengecek status kelulusan
$status_kelulusan = $nilai_akhir > 60 ? "Lulus" : "Tidak Lulus";

// Menampilkan hasil
echo "<h2>Data Kelulusan Mahasiswa</h2>";
echo "NIM: $nim<br>";
echo "Nama: $nama<br>";
echo "Nilai Q1: $nilai_q1<br>";
echo "Nilai Q2: $nilai_q2<br>";
echo "Nilai UTS: $nilai_uts<br>";
echo "Nilai UAS: $nilai_uas<br>";
echo "Nilai Proyek: $nilai_proyek<br>";
echo "Nilai Akhir: " . number_format($nilai_akhir, 2) . "<br>";
echo "Status Kelulusan: $status_kelulusan<br>";
