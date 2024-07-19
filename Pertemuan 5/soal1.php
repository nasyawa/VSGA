<?php
// Mendeklarasikan array untuk menyimpan data produk
$produk = [
    [
        "nama" => "Laptop",
        "jumlah" => 10,
        "harga" => 7000000,
        "status" => "Tersedia"
    ],
    [
        "nama" => "Ponsel",
        "jumlah" => 15,
        "harga" => 3000000,
        "status" => "Tersedia"
    ],
    [
        "nama" => "iPad",
        "jumlah" => 5,
        "harga" => 8000000,
        "status" => "Habis"
    ]
];

// Menghitung total nilai inventaris
function hitungTotalNilaiInventaris($jumlah, $harga) {
    return $jumlah * $harga;
}

// Menampilkan laporan lengkap
echo "<h2>Laporan Inventaris</h2>";

foreach ($produk as $item) {
    $total_nilai_inventaris = hitungTotalNilaiInventaris($item['jumlah'], $item['harga']);
    
    echo "Nama Produk: " . $item['nama'] . "<br>";
    echo "Jumlah Produk: " . $item['jumlah'] . "<br>";
    echo "Harga per Produk: Rp " . number_format($item['harga'], 2, ',', '.') . "<br>";
    echo "Total Nilai Inventaris: Rp " . number_format($total_nilai_inventaris, 2, ',', '.') . "<br>";
    echo "Status Ketersediaan: " . $item['status'] . "<br>";
    echo "<br>";
}
?>
