<body style="background-color:pink;">
    
<?php

$nama = "HENDRI SIMANJUNTAK";
$kelas = "XI RPL 1";

echo "Nama : $nama <br>";
echo "Kelas : $kelas <br><br>";

$nilai_inggris = 90;
$nilai_indonesia = 80;
$matematika = 85;
$produktif = 80;
$jumlah_nilai = $nilai_inggris + $nilai_indonesia + $matematika + $produktif;
$jumlah_nilai /= 4;

echo"nilai B.inggris : $nilai_inggris <br>";
echo"nilai B.indonesia :$nilai_indonesia <br>";
echo"nilai Matematika :$matematika <br>";
echo"nilai Produktif :$produktif <br>";
echo "rata-rata = $jumlah_nilai <br><hr>";

if ($jumlah_nilai > 75){
    echo "Status : <i>*Anda Lulus coy!*</i>";
} else {
    echo "Status : *Anda tidak lulus coy!*";
}

?>

</body>