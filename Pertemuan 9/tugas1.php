<?php
echo "<h4>Buatlah class Segitiga, dengan memiliki properti alas dan tinggi, 
serta buatkan fungsi hitung luas dan hitung keliling</h4>";
class Segitiga
{
    //propertinya
    public $alas;
    public $tinggi;
    public $sisi; //untuk sisi miringnya

    //konstruktor inisialisasi
    public function __construct($alas, $tinggi, $sisi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisi;
    }
    //hitung luas
    public function hitungLuas()
    {
        return 0.5 * $this->alas * $this->tinggi;
    }
    //keliling
    public function hitungKeliling()
    {
        return $this->alas + $this->tinggi + $this->sisi;
    }
}
//objeknya
$segitiga = new Segitiga(5, 15, 7);

echo "Luas Segitiga: " . $segitiga->hitungLuas() . "<br>";
echo "Keliling Segitiga" . $segitiga->hitungKeliling() . "<br>";
