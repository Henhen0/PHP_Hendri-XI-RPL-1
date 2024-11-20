<html>
    <body style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: 5583d0;">
<center>
    <fieldset style="width: 30%;"> 
    <table>
    <?php

    if (isset($_POST['proses'])) {
        
        $no = $_POST['no'];
        $nama = $_POST['nama'];
        $unit_pendidikan = $_POST['unit'];
        $tgl_gaji = $_POST['date'];
        $jabatan = $_POST['jabatan'];
        $lamakerja = $_POST['lamakerja'];
        $status_kerja = $_POST['Status'];
        $bpjs = $_POST['bpjs'];
        $pinjaman = $_POST['pinjaman'];
        $tabungan = $_POST['tabungan'];
        $lainnya = $_POST['lainnya'];

        switch ($jabatan) {
            case 'Kepala Sekolah':
                $gaji = 10000000;
                break;
            case 'Wakasek':
                $gaji = 7500000;
                break;
            case 'Guru':
                $gaji = 5000000;
                break;
            case 'OB':
                $gaji = 2500000;
                break;
            default:
                $gaji = 0;
                break;
        }

        if ($lamakerja >= 5) {
            $tunjangan = 1000000;
        } else {
            $tunjangan = 0;
        }

        if ($status_kerja == "Tetap") {
            $bonus = 500000;
        } else {
            $bonus = 0;      
        }

        $gajikotor = $gaji + $tunjangan + $bonus;

        $totalpotongan = $bpjs + $pinjaman + $tabungan + $lainnya;

        $gajibersih = $gajikotor - $totalpotongan;

        echo "<table>
                <tr>
                    <td align='center' colspan='3'><h3>Struk Gaji</h3></td>
                </tr>
            <tr>
                    <td align='center' colspan='3' style='background-color: E8EBEA;''>$nama</td>
                </tr>
                 <tr>
                    <td align='center' colspan='3' style='background-color: E8EBEA;''>Primary Card Title</td>
                </tr>
                <tr><td></td></tr>

                <tr>
                    <td>Nomer</td>
                    <td>:</td>
                    <td>$no</td>
                </tr>

                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>$nama</td>
                </tr>

                <tr>
                    <td>Unit Pendidikan</td>
                    <td>:</td>
                    <td>$unit_pendidikan</td>
                </tr>

                <tr>
                    <td>Tanggal Gaji</td>
                    <td>:</td>
                    <td>$tgl_gaji</td>
                </tr>

                 <tr>
                    <td colspan='3'><h2 align='center'>GAJI</h2></td>
                </tr>

                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>$jabatan</td>
                </tr>

                <tr>
                    <td>Gaji</td>
                    <td>:</td>
                    <td>$gaji</td>
                </tr>
                
                <tr>
                    <td>Lama Kerja</td>
                    <td>:</td>
                    <td>$tunjangan</td>
                </tr>

                <tr>
                    <td>Status Kerja</td>
                    <td>:</td>
                    <td>$status_kerja</td>
                </tr>

                <tr>
                    <td>Bonus</td>
                    <td>:</td>
                    <td>$bonus</td>
                </tr>

                <tr>
                    <td>Gaji Kotor</td>
                    <td>:</td>
                    <td>$gajikotor</td>
                </tr>

                <tr>
                    <td colspan='3'><h2 align='center'>POTONGAN</h2></td>
                </tr>

                <tr>
                    <td>BPJS</td>
                    <td>:</td>
                    <td>$bpjs</td>
                </tr>

                <tr>
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td>$pinjaman</td>
                </tr>
                
                <tr>
                    <td>Tabungan</td>
                    <td>:</td>
                    <td>$tabungan</td>
                </tr>

                <tr>
                    <td>Lainnya</td>
                    <td>:</td>
                    <td>$lainnya</td>
                </tr>

                <tr>
                    <td>Total Potongan</td>
                    <td>:</td>
                    <td>$totalpotongan</td>
                </tr>

                <tr>
                    <td colspan='3'><h2 align='center'>TOTAL</h2></td>
                </tr>

                <tr>
                    <td>Gaji Bersih</td>
                    <td>:</td>
                    <td>$gajibersih</td>
                </tr>

                
            </table>";
        
    }

    ?>
    </table>
    </fieldset>
</center>
</body>
</html>