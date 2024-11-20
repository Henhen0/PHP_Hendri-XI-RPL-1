<?php

 class bangun_datar{

    public $luaspersegi;
    public $luaspersegipanjang;
    public $luassegitiga;
    public $luaslingkaran;

    public $Kelilingpersegi;
    public $Kelilingpersegipanjang;
    public $Kelilingsegitiga;
    public $Kelilinglingkaran;

}

 class luas extends bangun_datar{

    public function persegi($s1, $s2){
        echo"<h3>Luas Persegi</h3>";
        echo"Sisi pertama : $s1 <br>";
        echo"Sisi kedua : $s2 <br>";
        $this->luaspersegi = $s1 * $s2;
        echo"Luas persegi : $this->luaspersegi<br>";
    }

    public function persegipanjang($p, $l){
        echo"<h3>Luas Persegi</h3>";
        echo"Panjang : $p <br>";
        echo"Lebar : $l <br>";
        $this->luaspersegipanjang = $p * $l;
        echo"Luas persegi : $this->luaspersegipanjang<br>";
    }

    public function segitiga($alas, $tinggi){
        echo"<h3>Luas Segitiga</h3>";
        echo"Alas: $alas <br>";
        echo"Tinggi: $tinggi <br>";
        $this->luassegitiga = 0.5 * $alas * $tinggi;
        echo"Luas segitiga : $this->luassegitiga<br>";
    }

    function Lingkaran($jariJari){
        echo"<h3>Luas lingkaran</h3>";
        echo"Jari-jari: $jariJari <br>";
        $this->luaslingkaran = 3.14 * $jariJari * $jariJari;
        echo"Luas lingkaran : $this->luaslingkaran<br>";
        echo "<hr>";
 }
}


    class keliling extends bangun_datar{

    public function persegi($s1, $s2, $s3, $s4){
        echo"<h3>Keliling Persegi</h3>";
        echo"Sisi pertama : $s1 <br>";
        echo"Sisi kedua : $s2 <br>";
        $this->Kelilingpersegi = $s1 + $s2 + $s3 + $s4;
        echo"Luas persegi : $this->Kelilingpersegi<br>";
    }

    public function persegipanjang($p, $l){
        echo"<h3>Keliling Persegi Panjang</h3>";
        echo"Panjang : $p <br>";
        echo"Lebar : $l <br>";
        $this->Kelilingpersegipanjang = 2 * ($p + $l);
        echo"Luas persegi : $this->Kelilingpersegipanjang<br>";
    }

    public function segitiga($a, $b, $c){
        echo"<h3>Keliling Segitiga</h3>";
        echo"sisi1: $a <br>";
        echo"sisi2: $b <br>";
        echo"sisi3: $c <br>";
        $this->Kelilingsegitiga = $a + $b + $c;
        echo"Luas segitiga : $this->Kelilingsegitiga<br>";
    }

    function Lingkaran($jariJari){
        echo"<h3>Keliling lingkaran</h3>";
        echo"Jari-jari: $jariJari <br>";
        $this->luaslingkaran = 2 *3.14 * $jariJari;
        echo"Luas lingkaran : $this->luaslingkaran<br>";
 }
}

  $print = new luas();

  echo "<h2 align='center'>Menghitung Luas</h2>";
  echo $print->persegi(10,5);
  echo $print->persegipanjang(10,5);
  echo $print->segitiga(10,5);
  echo $print->Lingkaran(7);

  $cetak = new keliling();

  echo "<h2 align='center'>Menghitung Kelling</h2>";
  echo $cetak->persegi(10,5,5,5);
  echo $cetak->persegipanjang(10,5);
  echo $cetak->segitiga(3,4,5);
  echo $cetak->Lingkaran(5);
?>