<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Siswa</title>
    <style>
        body {
    font-family: 'Courier New', Courier, monospace;
    background-color:#f8ff56;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.container {
    background-color: #aed6f1;
    border-radius: 5px;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
    padding: 40px;
    width: 90%;
    max-width: 700px;
}

h2 {
    color: #333;
    font-weight: 600;
    border-bottom: 3px solid #202020;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    font-size: 16px;
}

td {
    padding: 12px 8px;
    vertical-align: top;
}

select, input[type="text"], input[type="date"], input[type="number"], input[type="email"], textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #d1d9e6;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 15px;
}

select:focus, input[type="text"]:focus, input[type="date"]:focus, input[type="number"]:focus, input[type="email"]:focus, textarea:focus {
    border-color: #4CAF50;
    outline: none;
    box-shadow: 0 0 5px rgba(76, 175, 80, 0.2);
}

textarea {
    resize: vertical;
}

.submit-button {
    text-align: center;
    margin-top: 30px;
}

.submit-button input[type="submit"] {
    background-color: #202020;
    color: white;
    padding: 12px 30px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-size: 18px;
    font-weight: bold;
}

.submit-button input[type="submit"]:hover {
    background-color: blue#f8ff56;
}

.submit-button input[type="submit"]:active {
    transform: none;
}

    </style>
</head>
<body>
    <div class="container">
        <center>
            <img src="logo.png" alt="" width="400px">
            <h2>Data Diri Calon Pendaftar (Form yang bertanda * wajib di isi)</h2>
            <form action="latihan12validasi.php" method="post">
                <table>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select name="jurusan">
                                <option value="RPL">Rekayasa perangkat lunak (RPL)</option>
                                <option value="TKRO">Teknik kendaraan ringan otomotif (TKRO)</option>
                                <option value="TBSM">Teknik bisnis sepeda motor (TBSM)</option>
                                <td></td>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="namasiswa" placeholder="Nama Lengkap"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <select name="jk">
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                                <td></td>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tempatLahir" placeholder="Tempat Lahir"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" id="tanggal" name="tanggalL" required></td>
                    </tr>
                    <tr>
                        <td>No HP Siswa</td>
                        <td>:</td>
                        <td><input type="number" name="nohpsiswa" placeholder="HP"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><h2>Alamat Calon Pendaftar</h2></td>
                    </tr>
                    <tr>
                    <tr>
                <td>Provinsi</td>
                <td>:</td>
                        <td>
                        <select name="provinsi">
                            <option></option>
                            <option value="Aceh">Aceh</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                            <option value="Sumatera Barat">Sumatera Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                            <option value="Bangka Belitung">Bangka Belitung</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Lampung">Lampung</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Banten">Banten</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="DI Yogyakarta">DI Yogyakarta</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Bali">Bali</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Papua Barat">Papua Barat</option>
                            <option value="Papua">Papua</option>
                        </select>
                    </td>
                    </tr>

                    </tr>
                    <tr>
                        <td>Kab/Kota</td>
                        <td>:</td>
                        <td><input type="text" name="kab_kota" placeholder="Pilih Kota / Kabupaten"></td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td><input type="text" name="kecamatan" placeholder="Pilih Kota / Kabupaten Dahulu"></td>
                    </tr>
                    <tr>
                        <td>Desa/Kelurahan</td>
                        <td>:</td>
                        <td><input type="text" name="desa_kelurahan" placeholder="Pilih Kecamatan Dahulu"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat" rows="3" placeholder="Tidak Perlu lagi menulis provinsi, kota, kecamatan & kelurahan"></textarea></td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td>:</td>
                        <td><input type="number" name="kodepos" placeholder="Kode Pos"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><h2>Data Asal Sekolah</h2></td>
                    </tr>
                    <tr>
                        <td>Nama Asal Sekolah</td>
                        <td>:</td>
                        <td><input type="text" name="asalsekolah" placeholder="Nama Asal Sekolah"></td>
                    </tr>
                    <tr>
                        <td>Alamat Sekolah</td>
                        <td>:</td>
                        <td><textarea name="alamatsekolah" rows="3" placeholder="Tulis Alamat lengkap sekolah"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="3"><h2>Data Orang Tua</h2></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap Ayah/Ibu</td>
                        <td>:</td>
                        <td><input type="text" name="namaortu" placeholder="Nama Lengkap Ayah/Ibu"></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ayah/Ibu</td>
                        <td>:</td>
                        <td><input type="text" name="pekerjaanortu" placeholder="Pekerjaan Ayah/Ibu"></td>
                    </tr>
                    <tr>
                        <td>No HP Ortu</td>
                        <td>:</td>
                        <td><input type="number" name="noortu" placeholder="No HP"></td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td><textarea name="alamatortu" rows="3" placeholder="Alamat lengkap"></textarea></td>
                    </tr>
                </table>
                <div class="submit-button">
                    <input type="submit" name="submit" value="Kirim">
                </div>
            </form>
        </center>
    </div>
</body>
</html>
