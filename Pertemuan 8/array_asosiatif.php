<?php
echo"<h4>B. Array Asosiatif</h4>";
$mahasiswa = array(
    "nama"=> "JohnDoe",
    "umur"=>20,
    "jurusan"=> "Informatika"
);
echo "Nama: ". $mahasiswa["nama"]."<br>";
echo "Umur: ". $mahasiswa["umur"]. "<br>";
echo "Jurusan: ". $mahasiswa['jurusan']."<br>";

foreach($mahasiswa as $key=>$value){
    echo $key.": ".$value . "<br>";
}
