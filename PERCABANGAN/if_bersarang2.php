<?php

$provinsi = "jawa timur";
$kota = "ngawi";

if($provinsi == "jawa barat"){
    echo "*SELAMAT DATANG DI PROVINSI JAWA BARAT!!*<br>";
    if($kota == "bandung"){
        echo "*SELAMAT DATANG DI KOTA BANDUNG!!*";
    }elseif($kota == "cimahi"){
        echo "*SELAMAT DATANG DI KOTA CIMAHI!!*";
    }elseif($kota == "bogor"){
        echo "*SELAMAT DATANG DI KOTA BOGOR!!*";
    }elseif($kota == "bekasi"){
        echo "*SELAMAT DATANG DI KOTA BEKASI!!*";
    }elseif($kota == "depok"){
        echo "*SELAMAT DATANG DI KOTA DEPOK!!*";
    }else{
        echo "KOTA TIDAK TERSEDIA";
    }

}elseif($provinsi == "jawa timur"){
    echo "*SELAMAT DATANG DI PROVINSI JAWA TIMUR!!*<br>";
    if($kota == "lamongan"){
        echo "*SELAMAT DATANG DI KOTA LAMONGAN!!*";
    }elseif($kota == "tuban"){
        echo "*SELAMAT DATANG DI KOTA TUBAN!!*";
    }elseif($kota == "nganjuk"){
        echo "*SELAMAT DATANG DI KOTA NGANJUK!!*";
    }elseif($kota == "malang"){
        echo "*SELAMAT DATANG DI KOTA MALANG!!*";
    }elseif($kota == "ngawi"){
        echo "*SELAMAT DATANG DI KOTA NGAWI!!*";
    }else{
        echo "KOTA TIDAK TERSEDIA";
    }

}elseif($provinsi == "jawa tengah"){
    echo "*SELAMAT DATANG DI PROVINSI JAWA TENGAH!!*<br>";
    if($kota == "semarang"){
        echo "*SELAMAT DATANG DI KOTA SEMARANG!!*";
    }elseif($kota == "tegal"){
        echo "*SELAMAT DATANG DI KOTA TEGAL!!*";
    }elseif($kota == "magelang"){
        echo "*SELAMAT DATANG DI KOTA MAGELANG!!*";
    }elseif($kota == "pekalogan"){
        echo "*SELAMAT DATANG DI KOTA PEKALONGAN!!*";
    }elseif($kota == "kendang"){
        echo "*SELAMAT DATANG DI KOTA KENDANG!!*";
    }else{
        echo "KOTA TIDAK TERSEDIA";
    }

}else{
    echo "TIDAK TERSEDIA";
}

?>