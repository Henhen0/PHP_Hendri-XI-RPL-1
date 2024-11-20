<?php
// membuat array 2 dimensi yang berisi array asosiatif
$siswa = [
    [
        "nama" => "Hendri Julhaeri",
        "jk" => "laki-laki",
        "kelas" => "XI RPL 1"
    ],
    [
        "nama" => "Dudi Julhaeri",
        "jk" => "laki-laki",
        "kelas" => "XI RPL 1"
    ],
];

// menampilkan array
foreach($siswa as $murid){
    echo "Nama : ".$murid["nama"]."<br>";
    echo "Jenis Kelamin : ".$murid["nama"]."<br>";
    echo "Kelas : ".$murid["nama"]."<br>";
    
    echo "<hr>";
}

?>