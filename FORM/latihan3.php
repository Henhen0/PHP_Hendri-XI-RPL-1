<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <img src="smk.png" style="width: 200px;">
            <h2>Form Biodata Diri</h2>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" required></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki 
                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" id=""></textarea></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name="agama" id="">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
            </select></td>
        </tr>
        <tr>
            <td>Terakhir Pendidikan</td>
            <td>:</td>
            <td><select name="terakhir_pendidikan" id="">
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMK / SMA">SMK / SMA</option>
            </select></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><select name="status" id="">
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Sudah Menikah">Sudah Menikah</option>
            </select></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="checkbox" name="hobi" value="Membaca">Membaca 
                <input type="checkbox" name="hobi" value="Menulis">Menulis
                <input type="checkbox" name="hobi" value="Nge push">Nge push</td>
        </tr>
        <tr>
            <td>Cita-Cita</td>
            <td>:</td>
            <td><select name="cita-cita" id="">
                <option value="Progaramer">Progaramer</option>
                <option value="Pengusaha">Pengusaha</option>
            </select></td>
        </tr>
        <tr>
            <td>Kata-Kata Bijak</td>
            <td>:</td>
            <td><textarea name="kata2" id=""></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="kirim"></td>
        </tr>
    </table>
    </form>
    </center>
</body>
</html>

<center>
<?php
if (isset($_POST['submit'])) {

    $nama1 = $_POST['nama'];
    $tmpat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tanggal_lahir'];
    $jenis_klmn = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['terakhir_pendidikan'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita2 = $_POST['cita-cita'];
    $kata2 = $_POST['kata2'];

    echo"=============== <br>";
    echo "Nama : $nama1 <br>";
    echo "Tempat Lahir : $tmpat_lahir <br>";
    echo "Tanggal Lahir : $tgl_lahir <br>";
    echo "Jenis Kelamin : $jenis_klmn <br>";
    echo "Alamat : $alamat <br>";
    echo "Agama : $agama <br>";
    echo "Pendidikan Terakhir : $pendidikan <br>";
    echo "Status : $status <br>";
    echo "Hobi : $hobi <br>";
    echo "Cita-Cita : $cita2 <br>";
    echo "Kata-Kata Bijak : $kata2 <br>";
}

?>
</center>