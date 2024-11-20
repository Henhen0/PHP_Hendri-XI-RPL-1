<?php
class ppdb{

    public function data_diri($jurusan,$nama,$jk,$tmpatlahir,$tgl_lahir){
        echo"Jurusan : $jurusan <br>";
        echo"Nama Lengkap : $nama <br>";
        echo"Jenis Kelamin : $jk <br>";
        echo"Tempat Lahir : $tmpatlahir <br>";
        echo"Tanggal Lahir : $tgl_lahir <br>";
    }

    public function calon($provinsi,$Kab,$kecamatan,$desa,$alamat){
        echo"Provinsi : $provinsi <br>";
        echo"Kab / Kota : $Kab <br>";
        echo"Kecamatan : $kecamatan <br>";
        echo"Desa / Kelurahan : $desa <br>";
        echo"Alamat : $alamat <br>";
    }

     public function alamat($asal,$alamat_sekolah){
        echo"Asal Sekolah : $asal <br>";
        echo"Alamat Sekolah : $alamat_sekolah <br>";
    }

    public function ortu($nama,$pekerjaan,$no,$alamat){
        echo"Nama Lengkap Ayah / Ibu / Wali : $nama <br>";
        echo"Pekerjaan Ayah / Ibu / Wali : $pekerjaan <br>";
        echo"Nomor HP Yang Bisa Di Hubungi : $no <br>";
        echo"Alamat Lengkap : $alamat <br>";
    }
    
}

$cetak = new ppdb();

echo "<h2>Data Diri Calon Pendaftar</h2>";
echo $cetak->data_diri("Rekasa Perangkat Lunak","Faza","Laki-laki","Bandung","13 April 2007");
echo "<h2>Alamat Calon Pendaftar</h2>";
echo $cetak->calon("Jawa Barat","Kab Bandung","Dayeuhkolot","Cangkuang Kulon","Jl.Situtarate 02");
echo "<h2>Data Asal Sekolah</h2>";
echo $cetak->alamat("SMPN 38 BANDUNG","Jl.Ciparay Tengah");
echo "<h2>Data Orang Tua</h2>";
echo $cetak->ortu("Dedi Kusnandar","Wirausaha","+62 873-3321-2025","Gg.Panorama Babakan Asih Rt.08 / 02");

?>