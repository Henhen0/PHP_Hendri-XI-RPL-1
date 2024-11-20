<?php

function segitiga($alas,$tinggi){
    echo "Alas : $alas<br>";
    echo "Tinggi : $tinggi<br>";
    $hasil = $alas * $tinggi / 2;
    echo "Hasil : $hasil<br>";
}
echo "Segitiga<br>";
segitiga(10,20);
echo "<hr>";

function persegi($sisi1){
    echo "Sisi : $sisi1<br>";
    $hasil = $sisi1 * $sisi1 ;
    echo "Hasil : $hasil<br>";
}
echo "Persegi<br>";
persegi(10);
echo "<hr>";

function persegipanjang($panjang,$lebar){
    echo "Panjang : $panjang<br>";
    echo "Lebar : $lebar<br>";
    $hasil = $panjang * $lebar ;
    echo "Hasil : $hasil<br>";
}
echo "Persegi panjang<br>";
persegipanjang(10,20);
echo "<hr>";

function lingkaran($jarijari){
    echo "Jari Jari : $jarijari<br>";
    echo "V  : 3,14 <br>";
    $hasil = 3.14 * $jarijari * $jarijari;
    echo "Hasil : $hasil<br>";
}
echo "Lingkaran<br>";
lingkaran(20);
echo "<hr>";

?>