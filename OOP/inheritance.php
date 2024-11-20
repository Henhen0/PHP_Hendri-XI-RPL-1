<?php
//class induk
class kendaraan{

    public $warna = "Merah";
    public $merk = "Honda";

    public function a(){
        echo "Saya Adalah Kendaraan";
    }

    public function c(){
        echo "Saya Adalah makanan";
    }
}

    // class anak
    class mobil extends kendaraan{
        
        public function b(){
            echo $this->a();
            echo "<br>";
            echo "Warna Saya Adalah $this->warna";
            echo "<br>";
            echo "Merk Saya Adalah $this->merk";
        }
    }

    $print = new mobil();
    echo $print->b();

?>