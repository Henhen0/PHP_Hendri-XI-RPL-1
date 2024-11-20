<?php

function biodata($nama,$tmpat_lahir,$tgl_lahir,$jk,$agama,$alamat,$hobi){
    echo "Nama : $nama <br>";
    echo "Tempat Lahir : $tmpat_lahir <br>";
    echo "Tanggal Lahir : $tgl_lahir <br>";
    echo "Jenis Kelamin : $jk <br>";
    echo "Agama : $agama <br>";
    echo "Alamat : $alamat <br>";
    echo "Hobi : $hobi <br>";
    echo "<hr>";
}

 biodata("Handrei","Bandung","19 juli 2006","laki-laki","Islam","Cibaduyut","Mangan");


 function menghitung($angka1,$angka2){
    echo "Bilangan Ke 1 : $angka1 <br>";
    echo "Bilangan Ke 2 : $angka2 <br>";
    $hasil = $angka1 + $angka2;
    echo "Hasil Penjumlahan : $hasil";
    
}

menghitung(10,20);

?>