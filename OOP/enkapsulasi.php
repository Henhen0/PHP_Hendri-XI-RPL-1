<?php

class contoh{

    public $nama = "Hendri";

    protected function perkenalan(){
        echo "Assalaamulaikuum <br>";
    }

    public function muncul(){
        echo $this->perkenalan();
    }
}

$cetak = new contoh();

echo $cetak->muncul();
echo $cetak->nama;

?>