<?php
if (isset($_POST['hitung'])) {
    $nama = $_POST ['nama'];
    $kelas = $_POST ['kelas'];
    $jurusan = $_POST ['jurusan'];

    $hmtk = $_POST ['nilaiharianmtk'];
    $tmtk = $_POST ['nilaitugasmtk'];
    $umtk = $_POST ['nilaiutsmtk'];
    $amtk = $_POST ['nilaiuasmtk'];

    $hindo = $_POST ['nilaiharianindo'];
    $tindo = $_POST ['nilaitugasindo'];
    $uindo = $_POST ['nilaiutsindo'];
    $aindo = $_POST ['nilaiuasindo'];

    $hing = $_POST ['nilaiharianinggris'];
    $ting = $_POST ['nilaitugasinggris'];
    $uing = $_POST ['nilaiutsinggris'];
    $aing = $_POST ['nilaiuasinggris'];

    $hpro = $_POST ['nilaiharianpro'];
    $tpro = $_POST ['nilaitugaspro'];
    $upro = $_POST ['nilaiutspro'];
    $apro = $_POST ['nilaiuaspro'];

    class rapot{
        public $rata_mtk;
        public $rata_indo;
        public $rata_inggris;
        public $rata_pro;
        public $grade_mtk;
        public $grade_indo;
        public $grade_inggris;
        public $grade_pro;


        public function hasil_rapot($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,){
            ?>
            
            <center><?php
            echo "Nama : $a <br>
            Kelas : $b <br>
            Jurusan : $c";?>
            </center><?php

            $this->rata_mtk = ($d + $e + $f + $g) / 4;
            $this->rata_indo = ($h + $i + $j + $k) / 4;
            $this->rata_inggris = ($l + $m + $n + $o) / 4;
            $this->rata_pro = ($p + $q + $r + $s) / 4;

        if ($this->rata_mtk > 75) {
            $this->grade_mtk = 'Tuntas';
        } else {
            $this->grade_mtk = 'Belum Tuntas';
        }

        if ($this->rata_indo > 75) {
            $this->grade_indo = 'Tuntas';
        } else {
            $this->grade_indo = 'Belum Tuntas';
        }

        if ($this->rata_inggris > 75) {
            $this->grade_inggris = 'Tuntas';
        } else {
            $this->grade_inggris = 'Belum Tuntas';
        }

        if ($this->rata_pro > 75) {
            $this->grade_pro = 'Tuntas';
        } else {
            $this->grade_pro = 'Belum Tuntas';
        }


        echo "<br>";
        echo "<table border='1' align='center'>
        <tr>
        <th>Mata Pelajaran</th>
        <th>Harian</th>
        <th>Tugas</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Rata-Rata</th>
        <th>Grade</th>
        </tr>

        <tr>
        <td>Matematika</td>
        <td>$d</td>
        <td>$e</td>
        <td>$f</td>
        <td>$g</td>
        <td>$this->rata_mtk</td>
        <td>$this->grade_mtk</td>
        </tr>

        <tr>
        <td>Indonesia</td>
        <td>$h</td>
        <td>$i</td>
        <td>$j</td>
        <td>$k</td>
        <td>$this->rata_indo</td>
        <td>$this->grade_indo</td>
        </tr>

        <tr>
        <td>Inggris</td>
        <td>$l</td>
        <td>$m</td>
        <td>$n</td>
        <td>$o</td>
        <td>$this->rata_inggris</td>
        <td>$this->grade_inggris</td>
        </tr>

        <tr>
        <td>Produktif</td>
        <td>$p</td>
        <td>$q</td>
        <td>$r</td>
        <td>$s</td>
        <td>$this->rata_pro</td>
        <td>$this->grade_pro</td>
        </tr>
        </table>
        ";
        }
        
    }

    $print = new rapot();
    echo $print->hasil_rapot($nama,$kelas,$jurusan,$hmtk,$tmtk,$umtk,$amtk,
    $hindo,$tindo,$uindo,$aindo,$hing,$ting,$uing,$aing,$hpro,$tpro,$upro,$apro);
}

?>