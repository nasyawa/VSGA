<?php
echo"<h4>A. Array Numerik</h4>";
$hari = array("senin", "selasa", "rabu", "kamis", "jumat", "sabtu", "minggu");
echo "Hari ke-1: " . $hari[0] . "<br>";
echo "Hari ke-2: " . $hari[1] . "<br>";
echo "Hari ke-3: " . $hari[2] . "<br>";
echo "Hari ke-4: " . $hari[3] . "<br>";
echo "Hari ke-5: " . $hari[4] . "<br>";
echo "Hari ke-6: " . $hari[5] . "<br>";
echo "Hari ke-7: " . $hari[6] . "<br>";

foreach($hari as $b){
    echo $b . "<br>";
}
?>