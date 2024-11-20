<?php

$jurusan = "RPL";
$kelas = "10";

if($jurusan == "RPL"){
    
    if($kelas == "10"){
        echo "INI KELAS 10 RPL";
    }elseif($kelas == "11"){
        echo "INI KELAS 11 RPL";
    }elseif($kelas == "12"){
        echo "INI KELAS 12 RPL";
    }else{
        echo "KELAS TIDAK TERSEDIA";
    }

}elseif($jurusan == "TKRO"){

    if($kelas == "10"){
        echo "INI KELAS 10 TKRO";
    }elseif($kelas == "11"){
        echo "INI KELAS 11 TKRO";
    }elseif($kelas == "12"){
        echo "INI KELAS 12 TKRO";
    }else{
        echo "KELAS TIDAK TERSEDIA";
    }

}elseif($jurusan == "TBSM"){

    if($kelas == "10"){
        echo "INI KELAS 10 TBSM";
    }elseif($kelas == "11"){
        echo "INI KELAS 11 TBSM";
    }elseif($kelas == "12"){
        echo "INI KELAS 12 TBSM";
    }else{
        echo "KELAS TIDAK TERSEDIA";
    }
}else{
    echo "KELAS TIDAK TERSEDIA";
}

?>