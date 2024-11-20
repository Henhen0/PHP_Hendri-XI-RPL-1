<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapot Siswa</title>
</head>
<body>
    <form action="latihan11validasi.php" method="post">
    <center>
        <h2>Rapot Siswa</h2>
        <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas"></td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><select name="jurusan">
                <option>Rekayasa Perangkat Lunak</option>
                <option>Teknik Kendaraan Ringan Otomotif</option>
                <option>Teknik Sepeda Motor</option>
            </select></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><h3>Nilai Matematika</h3></td>
        </tr>
        
        <tr>
            <td>Nilai Harian</td>
            <td>:</td>
            <td><input type="number" name="nilaiharianmtk"></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><input type="number" name="nilaitugasmtk"></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><input type="number" name="nilaiutsmtk"></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><input type="number" name="nilaiuasmtk"></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td> <h3>Nilai Bahasa  Indonesia</h3></td>
        </tr>

        <tr>
            <td>Nilai Harian</td>
            <td>:</td>
            <td><input type="number" name="nilaiharianindo"></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><input type="number" name="nilaitugasindo"></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><input type="number" name="nilaiutsindo"></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><input type="number" name="nilaiuasindo"></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><h3>Nilai Bahasa Inggris</h3></td>
        </tr>
        
        <tr>
            <td>Nilai Harian</td>
            <td>:</td>
            <td><input type="number" name="nilaiharianinggris"></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><input type="number" name="nilaitugasinggris"></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><input type="number" name="nilaiutsinggris"></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><input type="number" name="nilaiuasinggris"></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><h3>Nilai Produktif</h3></td>
        </tr>

        <tr>
            <td>Nilai Harian</td>
            <td>:</td>
            <td><input type="number" name="nilaiharianpro"></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><input type="number" name="nilaitugaspro"></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><input type="number" name="nilaiutspro"></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><input type="number" name="nilaiuaspro"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="hitung" value="HITUNG" ></td>
        </tr>
    </table>
    </center>
    </form>
</body>
</html>