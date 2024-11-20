<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <div style="text-align: center;">
<?php

$nama = "SURIPTO";
$jk = "laki-laki";
$jenis = "Makanan";
$menu = "nasi goreng";
$jumlah = 7;
$harga = 0;

if($jenis == "Makanan"){
    if ($menu == "nasi goreng") {
        $harga = 10000;
    } elseif ( $menu == "mie Goreng") {
        $harga = 15000;
    } elseif ($menu == "ayam goreng") {
        $harga = 20000;
    } else {
        $harga = 0;
    }
} elseif ($jenis == "Minuman") {
    if ($menu == "Air mineral") {
        $harga = 5000;
    } elseif ($menu == "Fresh tea") {
        $harga = 7000;
    } elseif ($menu == "Jus") {
        $harga = 12000;
    } else {
        $harga = 0;
    }
}

$total = $jumlah * $harga;

if ($total >= 50000) {
    $diskon = $total / 100 * 20; 
    $total1 = $total - $diskon ;
} else {
    $diskon = "Tidak ada diskon!";
    $total1 = $total;
}




echo "----- RESTORAN SELALU RAME ----- <br>";
echo "------------------------------------------------------- <br>";
echo "Nama : $nama <br>";
echo "Jenis Kelamin : $jk <br>";
echo "Jenis : $jenis <br>";
echo "Menu : $menu <br>";
echo "Harga : $harga <br>";
echo "Jumlah : $jumlah <br>";
echo "------------------------------------------------------- <br>";
echo "Total : $total <br>";
echo "Diskon 20% : $diskon <br>";
echo "------------------------------------------------------- <br>";
echo "Total Bayar : $total1";

?>
</div>
</body>