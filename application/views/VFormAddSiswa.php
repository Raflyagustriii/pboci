<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('Welcome/AddDataSiswa'); ?>" method="post">
    <div class="nis">
        <label for="nis">NIS</label><br>
        <input type="text" name="nis">
    </div>
    <div class="nama">
        <label for="nama">Nama Siswa</label><br>
        <input type="text" name="nama">
    </div>
    <div class="alamat">
        <label for="alamat">Alamat Siswa</label> <br>
        <textarea name="alamat" id="alamat" cols="70" rows="10" style="resize: none;"></textarea>
    </div>
        <input type="submit" name="simpan" value="Simpan">
    </form>
</body>
</html>