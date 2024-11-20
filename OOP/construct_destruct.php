<?php

class babi{

    //method / function
    public function __construct(){
        echo "hallo babi <br>";
    }

    public function makan(){
        echo "babi makan sosis<br>";
    }

    public function minum(){
        echo "babi minum beer<br>";
    }

    public function __destruct(){
        echo "babi tidur 'ZZZZZZ<br>";
    }

}

$cetak = new babi();
$cetak->makan();
$cetak->minum();

?>