<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="<?php echo base_urL('catatan/tambah'); ?>">Tambah Catatan</a>
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Catatan</th>
				<th>Status</th>
				<th>Proses</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($result as $item) {
			?>
				<tr>
					<td><?php echo $item->id; ?></td>
					<td><?php echo $item->catatan; ?></td>
					<td><?php echo $item->status; ?></td>
					<td>
						<a href="<?php echo base_url('catatan/ubah/' . $item->id); ?>">Ubah</a>
						<a href="<?php echo base_url('catatan/hapus/' . $item->id); ?>">Hapus</a>
					</td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	<a href="<?php echo base_url("logout"); ?>">Logout</a>
</body>
</html>