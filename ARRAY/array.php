<?php

// membuat array
// $siswa = ["Hendri", "Dudi", "Sandi"];

// menampilkan isi array
// echo $siswa[0]."<br>";
// echo $siswa[1]."<br>";
// echo $siswa[2]."<br>";

$siswa = ["HENDRI", "NAFIS", "SANDI", "DUDI", "VIKA", "NAFIS", "FAHRI", "NABILLA", "KIKI", "SURYA"];
$jenis_kelamin = ["laki-laki", "perempuan"];
$hobi = ["Membaca", "Menari", "Menulis", "Main Bola", "Renang"];

// echo"Data Siswa :<br>";
// echo "[1] $siswa[0] - $jenis_kelamin[0] - $hobi[0] <br>";
// echo "[2] $siswa[1] - $jenis_kelamin[0] - $hobi[1] <br>";
// echo "[3] $siswa[2] - $jenis_kelamin[0] - $hobi[2] <br>";
// echo "[4] $siswa[3] - $jenis_kelamin[0] - $hobi[3] <br>";
// echo "[5] $siswa[4] - $jenis_kelamin[0] - $hobi[4] <br>";
// echo "[6] $siswa[5] - $jenis_kelamin[1] - $hobi[0] <br>";
// echo "[7] $siswa[6] - $jenis_kelamin[1] - $hobi[1] <br>";
// echo "[8] $siswa[7] - $jenis_kelamin[1] - $hobi[2] <br>";
// echo "[9] $siswa[8] - $jenis_kelamin[1] - $hobi[3] <br>";
// echo "[10] $siswa[9] - $jenis_kelamin[1] - $hobi[4] <br>";

foreach ($siswa as $data) {
    echo "$data <br>";
}

?>