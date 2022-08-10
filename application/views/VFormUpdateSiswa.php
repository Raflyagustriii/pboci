<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="hidden" name="nis" value="<?php echo $detail['nis']; ?>">
                    <input type="text" name="nama" value="<?php echo $detail['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" value="<?php echo $detail['alamat']; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <input type="submit" name="btn_simpan" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>