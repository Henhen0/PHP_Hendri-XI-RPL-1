<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Menghitung Luas Persegi Panjang</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>panjang</td>
                    <td>:</td>
                    <td><input type="number" name="panjang"></td>
                </tr>
                <tr>
                    <td>lebar</td>
                    <td>:</td>
                    <td><input type="number" name="lebar"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="hitung" value="HITUNG"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['hitung'])) {
    //deklarasi variabel
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];

class persegipanjang{

    public $luas;

    public function luaspersegipanjang($panjang1,$lebar1){

        $this->luas = $panjang1 * $lebar1;

        echo "Panjang : ".$panjang1."<br>";
        echo "Lebar : ".$lebar1."<br>";
        echo "Luas Nya : ".$this ->luas."<br>";
    }
}

$cetak = new persegipanjang();
echo $cetak->luaspersegipanjang($panjang,$lebar);

}

?>