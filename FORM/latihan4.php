<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <table>
            <h2>National Exam Scores</h2>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" required></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                        <option>Pilih Jurusan</option>
                        <option value="RPL">RPL</option>
                        <option value="TBSM">TBSM</option>
                        <option value="TKRO">TKRO</option>
                    </select></td>
                </tr>

                <tr>
                    <td><h2>Test Scores</h2></td>
                </tr>

                <tr>
                    <td><b>Nilai</b> B.Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="b_indonesia" required></td>
                </tr>
                <tr>
                    <td>Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="inggris" required></td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="mtk" required></td>
                </tr>
                <tr>
                    <td>Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="pro" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="Send"></td>
                </tr>
            </table>
            

        </form>
    </center>
</body>
</html>


<center>
<?php
if (isset($_POST['proses'])) {

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $nilai_indo = $_POST['b_indonesia'];
    $nilai_inggris = $_POST['inggris'];
    $nilai_mtk = $_POST['mtk'];
    $nilai_produktif = $_POST['pro'];
    $nilai_akhir = ($nilai_indo + $nilai_inggris + $nilai_mtk + $nilai_produktif);
    $nilai_akhir /= 4;

    echo"=============== <br>";
    echo "Nama Siswa : $nama <br>";
    echo "Kelas : $kelas <br>";
    echo "Jurusan : $jurusan <br>";
    echo "Nilai B.Indonesia : $nilai_indo <br>";
    echo "Nilai Inggris : $nilai_inggris <br>";
    echo "Nilai Matematika : $nilai_mtk <br>";
    echo "Nilai Produktif : $nilai_produktif <br>";
    echo "Rata-Rata : $nilai_akhir <br>";

    if ($nilai_akhir >= 75){
    echo "Status : <i>*Tuntas!*</i>";
} else {
    echo "Status : *Belum Tuntas!*";

}

}

?>
</center>