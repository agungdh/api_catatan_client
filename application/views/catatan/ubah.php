<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Ubah Catatan</h3>
	<form action="<?php echo base_url("catatan/aksi_ubah"); ?>" method="post">
		<input type="hidden" name="id" value="<?php echo $catatan->id; ?>">
		Catatan
		<input type="text" name="catatan" value="<?php echo $catatan->catatan; ?>">
		<br>
		Status
		<input type="text" name="status" value="<?php echo $catatan->status; ?>">
		<br>
		<a href="<?php echo base_url(); ?>">Kembali</a>
		<input type="submit" name="submit" value="Kirim">
	</form>
</body>
</html>