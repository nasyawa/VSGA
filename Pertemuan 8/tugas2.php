<?php
// Membuat array multidimensi untuk menyimpan data produk
$products = array(
    array(
        "name" => "Laptop",
        "price" => 8000000,
        "stock" => 10
    ),
    array(
        "name" => "HP",
        "price" => 3000000,
        "stock" => 15
    ),
    array(
        "name" => "Ipad",
        "price" => 500000,
        "stock" => 25
    ),
    array(
        "name" => "Keyboard",
        "price" => 200000,
        "stock" => 20
    )
);

// Menampilkan data produk menggunakan foreach
foreach ($products as $product) {
    echo "Nama Produk: " . $product["name"] . "\n <br>";
    echo "Harga: " . number_format($product["price"], 0, ',', '.') . "\n <br>";
    echo "Stok: " . $product["stock"] . "\n <br>";
    echo "---------------------------\n<br>";
}
