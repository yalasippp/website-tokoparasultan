<?php 

    $nama = "";
    $harga = "";
    $jumlah = "";
    $harga_total = "";
    $diskon = "";
    $total_bayar = "";
    $bonus = "";

    if (isset($_POST['proses'])) {

        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $jumlah = intval($jumlah);
        $harga_total = $harga * $jumlah;
        $bonus = "Gantungan kunci";

        switch ($jumlah) {
            case $jumlah>=4 && $jumlah<5:
                $diskon = 5/100 * $harga_total;
                $bonus = "Mouse pad";
                break;
            case $jumlah>=6 && $jumlah<7:
                $diskon = 10/100 * $harga_total;
                $bonus = "Tongsis";
                break;    
            case $jumlah>=8 && $jumlah<9:
                $diskon = 10/100 * $harga_total;
                $bonus = "Casing HP";
                break;
            case $jumlah>=10:
                $diskon = 15/100 * $harga_total;
                $bonus = "HP Xiomi";
                break;

            default:
                $diskon = 0;
                break;
        }
        
        $total_bayar = $harga_total - $diskon;
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #up {
            background-color: aqua;
        }

        #up1 {
            background-color: chartreuse;
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 1000px;
            text-align: center;
            position: absolute;
            width: 40%;
            height: 50%;
        }

        #up2 {
            background-color: chartreuse;
            position: absolute;
            margin-top: 0px;
            margin-left: 800px;
            margin-right: 10px;
            text-align: center;
            width: 40%;
            height: 50%;
        }
        
    </style> 

</head>
<body>
    <div id="up">
        <h1 align="center"> WELCOME TO </h1>
        <p style="font-family: Brush Script MT; font-size:30px" align="center"> 👜YALASIP STORE👜 </p>
        <p style="font-family: Brush Script MT; font-size:30px" align="center"> TOKO PARA SULTAN </p>
    </div>

    <div id="up1">
        <h1> Daftar Harga Barang </h1>
        <table border="1" align="center">
            <th> Nama Barang </th>
            <th> Harga Barang </th>

            <tr>
                <td> Komputer </td>
                <td> Rp3.000.000</td>
            </tr>

            <tr>
                <td> Handphone </td>
                <td> Rp2.000.000</td>
            </tr>

            <tr>
                <td> Keyboard </td>
                <td> Rp500.000</td>
            </tr>

            <tr>
                <td> Mouse </td>
                <td> Rp100.000</td>
            </tr>

            <tr>
                <td> Earphone </td>
                <td> Rp150.000</td>
            </tr>
        </table>

        <br>

        <b> SEMAKIN BANYAK JUMLAH YANG DIBELI SEMAKIN BANYAK JUGA DISKON YANG DI DAPAT <br>

    </div>

    <div id="up2">
        <h1> Form Pembelian </h1>

        <form action="" method="post"> 
            <table align="center">
                <tr>
                    <td> Nama Barang </td>
                    <td> : </td>
                    <td> <select name="nama" id="nama"> 
                            <option> Komputer
                                <option> Earphone
                                    <option> Handphone
                                        <option> Keyboard
                                            <option> Mouse</select></td>
                </tr>

                <tr>
                    <td> Harga Barang </td>
                    <td> : </td>
                    <td> <input type="text" name="harga" size="10" value="<?=$harga; ?>" required> </td>
                </tr>

                <tr>
                    <td> Jumlah </td>
                    <td> : </td>
                    <td> <input type="text" name="jumlah" size="10" value="<?=$jumlah; ?>" required> </td>
                </tr>
            </table>

            <button type="submit" name="proses"> Beli </button>
            <button type="submit" name="hilang"> Reset </button>

        </form>

        <table align="center">
            <tr>
                <td>Total Harga</td>
                <td><input type="text" name="total" size="27" value="<?= $harga_total; ?>"></td>
            </tr>
            <tr>
                <td>Diskon</td>
                <td><input type="text" name="diskon" size="27" value="<?= $diskon; ?>"></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td><input type="text" name="total_bayar" size="27" value="<?= $total_bayar; ?>"></td>
            </tr>
            <tr>
                <td>Bonus</td>
                <td>
                <textarea name="bonus" id="bonus" cols="27"><?= $bonus; ?></textarea>
                </td>
            </tr>
        </table>

    </div>
</body>
</html>