<?php
require 'backend.php';
$data = query("SELECT rb_pembayaran.*,tb_siswa.*,tb_jenispembayaran.* FROM rb_pembayaran LEFT JOIN tb_siswa ON rb_pembayaran.nis = tb_siswa.nis LEFT JOIN tb_jenispembayaran ON rb_pembayaran.id_jenispembayaran = tb_jenispembayaran.id_jenispembayaran");
// var_dump($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment School</title>
</head>
<body>
	<a href="tambah.php">Tambah Data</a>
	<br>
	<br>

	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th>No</th>
			<th>Kode Pembayaran</th>
			<th>NIS</th>
			<th>Nama Siswa</th>
			<th>Tanggal Pembayaran</th>
			<th>Jenis Pembayaran</th>
			<th>Nominal Pembayaran</th>
			<th>Opsi</th>
		</tr>
 		<?php $i = 1; ?>
		<?php foreach ($data as $row) {?>
			<tr>
				<td><?= $i++ ?></td>
				<td><?= $row['id_pembayaran'] ?></td>
				<td><?= $row['nis'] ?></td>
				<td><?= $row['nama_siswa'] ?></td>
				<td><?= $row['tgl_pembayaran'] ?></td>
				<td><?= $row['nama_jenispembayaran'] ?></td>
				<td><?= $row['nominal_pembayaran'] ?></td>
				<td>
					<a href="hapus.php/?id=<?= $row['id_pembayaran'] ?>" onclick="return confirm('Data akan di hapus permanen ? ')">Hapus</a>	|
					<a href="ubah.php/?id=<?= $row['id_pembayaran'] ?>">Edit</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>