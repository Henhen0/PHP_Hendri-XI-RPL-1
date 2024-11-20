<?php

class gaji{
    public $gaji;
    public $potongan;
    public $tunjangan;
    public $totalgaji;

    public function gaji_pokok($nama,$jabatan){
        echo "Nama Karyawan : $nama <br>";
        echo "Jabatan : $jabatan <br>";
        if ($jabatan == "direktur"){
            $this->gaji = 10000000;
        echo "Gaji Pokok : $this->gaji <br>";
    } elseif 
        ($jabatan == "manager"){
            $this->gaji = 7500000;
    } elseif
        ($jabatan == "karyawan"){
            $this->gaji = 5000000;
    } elseif
        ($jabatan == "ob"){
            $this->gaji = 2500000;
        }
}
    public function potongan($tabungan,$pinjaman){
        echo "Tabungan : $tabungan <br>";
        echo "Pinjaman : $pinjaman <br>";
        $this->potongan = $tabungan + $pinjaman;
        echo "Potongan : $this->potongan <br>";
    }

    public function tunjangan($pendidikan,$tunjangan){
        echo "Pendidikan : $pendidikan <br>";
        echo "Tunjangan : $tunjangan <br>";
        if ($pendidikan == "s1"){
            $this->tunjangan = 1000000;
        echo "Gaji Pokok : $this->gaji <br>";
    } elseif 
        ($pendidikan == "sma"){
            $this->tunjangan = 750000;
    } elseif
        ($pendidikan == "smp"){
            $this->tunjangan = 500000;
    } elseif
        ($pendidikan == "sd"){
            $this->tunjangan = 250000;
        }
    }

    public function gajitotal(){
        $gajibersih = $this->gaji + $this->tunjangan - $this->potongan ;
        echo "Total Gaji Bersih : $gajibersih";
    }

}


$cetak = new gaji();

echo"<h2 align='center'>Penggajihan Karyawan</h2> <br>";
echo"<h2>Gaji Pokok</h2>";
$cetak->gaji_pokok("Rizky","ob");
echo"<hr>";
echo"<h2>Tunjangan</h2>";
$cetak->tunjangan("sd",250000);
echo"<hr>";
echo"<h2>Potongan</h2>";
$cetak->potongan(1000000,500000);
echo"<hr>";
echo"<h2>Total Gaji Bersih</h2>";
$cetak->gajitotal();






?>