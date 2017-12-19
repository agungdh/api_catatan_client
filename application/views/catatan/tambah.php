<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Tambah Catatan</h3>
	<form action="<?php echo base_url("catatan/aksi_tambah"); ?>" method="post">
		Catatan
		<input type="text" name="catatan">
		<br>
		Status
		<input type="text" name="status">
		<br>
		<a href="<?php echo base_url(); ?>">Kembali</a>
		<input type="submit" name="submit" value="Kirim">
	</form>
</body>
</html>