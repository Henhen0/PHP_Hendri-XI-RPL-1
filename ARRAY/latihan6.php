<html style="background-color: black; color: white; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
<?php

$novel = [
    [
        "Judul" => "Dilan 1990",
        "penulis" => "Pidi Baiq",
        "Tgl_rilis" => "20 November 2014",
        "Penerbit" => "Aierlangga"
    ],

    [
        "Judul" => "Matahari Ceria",
        "penulis" => "Novi Asih",
        "Tgl_rilis" => "19 Juni 2006",
        "Penerbit" => "Dewi Kurnia"
    ],

    [
        "Judul" => "Kereta Cepat",
        "penulis" => "Ridwan Nasrulloh",
        "Tgl_rilis" => "09 April 2023",
        "Penerbit" => "Siti Dermawan"
    ],

    [
        "Judul" => "Bunga Angrek",
        "penulis" => "Melani Fitri",
        "Tgl_rilis" => "27 Oktober 2012",
        "Penerbit" => "Angga Meliana"
    ],

    [
        "Judul" => "Jendela Kaca",
        "penulis" => "Bima Nugroho",
        "Tgl_rilis" => "23 Januari 2001",
        "Penerbit" => "Krisna Agung"
    ],
];

foreach ($novel as $buku) {
    echo "Nama : " . $buku ["Judul"]."<br>";
    echo "Penulis : ".$buku["penulis"]."<br>";
    echo "Tanggal Rilis : ".$buku["Tgl_rilis"]."<br>";
    echo "Penerbit : ".$buku["Penerbit"]."<br>";
    echo "<hr>";
}

?>
</html>