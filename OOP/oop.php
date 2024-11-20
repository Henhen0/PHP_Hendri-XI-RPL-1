<?php

class kucing{
    //buat property / atribut
var $warna ;
var $jenis ;

    //method / function
    public function makan(){
        echo "Kucing Suka Makan Ikan";
    }
        public function minum(){
        echo "Kucing Suka Minum teh botol";
    }
}

//buat object
$cetak = new kucing(); //intensiasi

//memanggil method
echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";

//memanggil property
echo $cetak->warna = "kuning";
echo "<br>";
echo $cetak->jenis = "persia";

?>