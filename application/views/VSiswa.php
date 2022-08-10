<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1px">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddSiswa'); ?>">Add</a>
		</td>
	</tr>
	<tr>
		<th>NIS</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataSiswa))
	{
		foreach($DataSiswa as $siswa)
		{
	?>

	<tr>
		<td><?php echo $siswa->nis; ?></td>
		<td><?php echo $siswa->nama; ?></td>
		<td><?php echo $siswa->alamat; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataSiswa/'.$siswa->nis.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataSiswa/'.$siswa->nis) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>    
</body>
</html>