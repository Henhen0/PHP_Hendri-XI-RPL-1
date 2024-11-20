<?php

// data JSON
$data_json = '[
    {
        "nama" : "Hendri",
        "alamat" : "Bandung"
    },
    {
        "nama" : "Andrian",
        "alamat" : "Lampung"
    }
]';

// dikoversikan Ke JSON
   $list = json_decode($data_json);

// tampilkan datanya
    foreach ($list as $kunci) {
        echo"Nama : {$kunci->nama} <br>";
        echo"Alamat : {$kunci->alamat} <br>";
        echo"<hr>";
    }

?>