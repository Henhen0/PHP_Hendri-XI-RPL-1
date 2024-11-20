<?php
// membuat array asosiatif
$artikel = [
    "judul" => "Belajar Pemrograman PHP",
    "penulis" => "petanikode",
    "view" => 128,
    "tanggal" => "10 juni 2008"
];

// mencetak isi array asosiatif
echo "<h3>".$artikel["judul"]."</h3>";
echo "<p>oleh: ".$artikel["penulis"]."</p>";
echo "<p>View: ".$artikel["view"]."</p>";
echo "<p>Tanggal: ".$artikel['tanggal']."</p>";