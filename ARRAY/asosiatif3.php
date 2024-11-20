<html style="background-color: black; color: white; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
<?php

$siswa = [
    [
        "nis" => "1001",
        "nama" => "Hendri",
        "kelas" => "XI RPL 1",
        "eskul" => ["Futsal","Basket","Renang"]
    ],
    [
        "nis" => "1002",
        "nama" => "Sandi",
        "kelas" => "XI RPL 2",
        "eskul" => ["Futsal","Menulis"]
    ],
];

foreach($siswa as $murid){
    echo "NIS : ".$murid["nis"]."<br>";
    echo "Nama : ".$murid["nama"]."<br>";
    echo "Kelas : ".$murid["kelas"]."<br>";
    echo "Eskul : <ul>";
    foreach ($murid ["eskul"] as $lol) {
        echo "<li>" .$lol ."</li>";
    }
    echo "</ul>";
    echo "<hr>";
}

?>
</html>