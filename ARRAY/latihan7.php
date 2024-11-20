<html style="background-color: black; color: white; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">

<?php

$data = [
    [
        "Nama" => "Hendri",
        "buah" => [
            [
                "Nama Buah"  => "Anggur",
                "budak Buah" => [
                    "jenis1" =>"Anggur Hijau",
                    "jenis2" => "Anggur Putih"
                    ]
            ]
        ]
    ],
    [
        "Nama" => "Sandi",
        "buah" => [
            [
                "Nama Buah"  => "Alpukat",
                "budak Buah" => [
                    "jenis1" =>"Alpukat Mentega",
                    "jenis2" => "Alpukat Biasa"]
            ],
            [
                "Nama Buah"  => "Apel",
                "budak Buah" => [
                    "jenis1" => "Apel Merah", 
                    "jenis2" => "Apel Hijau"
                ]
            ]
        ]
    ],
];

foreach ($data as $anomali) {
    echo "Nama Pemilik : " . $anomali["Nama"] . "<br>";
    echo "Daftar Buah Kesukaan : <ul>";

    foreach ($anomali["buah"] as $buah) {
        echo "<li>" . $buah["Nama Buah"] . "</li>";
            echo "<ul>";

            foreach ($buah["budak Buah"] as $ankbuah) {
                echo "<li>" . $ankbuah . "</li>";

            }
            echo "</ul>";
        
    }
    echo "</ul>";
    echo "<hr>";
 }


?>   

</html>