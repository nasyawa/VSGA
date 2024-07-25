<?php
class Buku
{
    //propertinya
    public $judul;
    public $penulis;
    public $tahunTerbit;

    //inisialisasi
    public function __construct($judul, $penulis, $tahunTerbit)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }
    //method info buku
    public function tampilInfo()
    {
        return "Judul: " . $this->judul . "<br>";
        "Penulis: " . $this->penulis . "<br>";
        "Tahun Terbit: " . $this->tahunTerbit . "<br>";
    }
}
class Perpustakaan
{
    // Properti
    private $koleksiBuku = array();

    // Metode untuk menambah buku ke koleksi
    public function tambahBuku(Buku $buku)
    {
        $this->koleksiBuku[] = $buku;
    }

    // Metode untuk menampilkan semua buku
    public function tampilkanSemuaBuku()
    {
        if (empty($this->koleksiBuku)) {
            return "Koleksi buku kosong.";
        }

        $output = "";
        foreach ($this->koleksiBuku as $buku) {
            $output .= $buku->tampilInfo() . "\n";
        }
        return $output;
    }

    // Metode untuk mencari buku berdasarkan judul
    public function cariBuku($judul)
    {
        foreach ($this->koleksiBuku as $buku) {
            if (strcasecmp($buku->judul, $judul) == 0) {
                return $buku->tampilInfo();
            }
        }
        return "Buku dengan judul '{$judul}' tidak ditemukan.";
    }
}

// Membuat objek buku
$buku1 = new Buku("The Great Gatsby", "F. Scott Fitzgerald", 1925);
$buku2 = new Buku("To Kill a Mockingbird", "Harper Lee", 1960);
$buku3 = new Buku("1984", "George Orwell", 1949);

// Membuat objek perpustakaan
$perpustakaan = new Perpustakaan();

// Menambahkan buku ke koleksi
$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);
$perpustakaan->tambahBuku($buku3);

// Menampilkan semua buku
echo "Daftar Buku di Perpustakaan:\n";
echo $perpustakaan->tampilkanSemuaBuku();

// Mencari buku berdasarkan judul
echo "Pencarian Buku:\n";
echo $perpustakaan->cariBuku("To Kill a Mockingbird");
echo "\n";
echo $perpustakaan->cariBuku("The Catcher in the Rye");
