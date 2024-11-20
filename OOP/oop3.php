<?php

class bangun_datar{

    //property
    public $luaspersegi;
    public $luaslingkaran;
    public $luassegitiga;
    public $luaspersegipanjang;

    public function menghitungLuasPersegi($s1, $s2){
        echo"1. Sebuah persegi memiliki sisi 4 .<br>";
        echo" rumusnya adalah L = s x s.<br>";
        echo"Sisi pertama $s1 <br>";
        echo"Sisi kedua $s2 <br>";
        $this->luaspersegi = $s1 * $s2;
        echo"Luas persegi : $this->luaspersegi<br>";
    }

    public function menghitungLuasPersegiPanjang($P, $L){
        echo"2. Ridwan membeli kertas berbentuk persegi panjang dengan panjang 10  dan lebar 3 .<br>";
        echo"rumusnya adalah L = p x l.<br>";
        echo"Panjang: $P <br>";
        echo"Lebar: $L <br>";
        $this->luaspersegipanjang = $P * $L;
        echo"Luas persegi : $this->luaspersegipanjang<br>";
    }

    public function menghitungLuasSegitiga($alas, $tinggi){
        echo"3. Menghitung luas segitiga dengan alas 10  dan tinggi 3 .<br>";
        echo"rumusnya adalah 1/2 x a x t <br>";
        echo"Alas: $alas <br>";
        echo"Tinggi: $tinggi <br>";
        $this->luassegitiga = 0.5 * $alas * $tinggi;
        echo"Luas segitiga : $this->luassegitiga<br>";
    }

    function menghitungLuasLingkaran($jariJari){
        echo"4. Menghitung luas lingkaran dengan jari-jari 10 .<br>";
        echo"rumusnya adalah  L = π x r² <br>";
        echo"Jari-jari: $jariJari <br>";
        $this->luaslingkaran = 3.14 * $jariJari * $jariJari;
        echo"Luas lingkaran : $this->luaslingkaran<br>";
    }

}

$cetak = new bangun_datar();

$cetak->menghitungLuasPersegi(4,4);
echo"<br>";
$cetak->menghitungLuasPersegiPanjang(10,3);
echo"<br>";
$cetak->menghitungLuasSegitiga(10,3);
echo"<br>";
$cetak->menghitungLuasLingkaran(10);
?>