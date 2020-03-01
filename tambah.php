<?php 

require "backend.php";

if (isset($_POST["submit"])) {
	if (tambah($_POST) > 0) {
		echo "
		<script>
			alert('Data berhasil ditambah!');
			document.location.href = 'index.php';
		</script>
			";
		}
		else{
		echo "
			<script>
				alert('Data gagal ditambah');
				document.location.href = 'index.php';
			</script>
			";
		}
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tmbah Data</title>
</head>
<body>
	<style type="text/css">
		.forms{
			display: inline-block;
			border-radius: 5px;
			border: 1px solid black;
			margin: auto;
			width: 400px;
			padding: 0px 30px 30px 30px ;
			text-align: left;
			margin-top: 15%;
			 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		.forms label{
			width:200px;
			display: inline-block;
		}
		.forms div{
			margin-top: 10px;
		}
		.forms h3{
			text-align: center;
		}
	</style>
<div class="container" style="text-align: center;width: 80%;margin: auto;">

<form class="forms" method="post" action="">
	<h3>Tambah data pembayaran</h3>
	<div>
			<label>NIS</label>
			<input type="number" name="nis" id="nis">
		</div>
	<div>
			<label>Jenis Bayar</label>
			<select name="jenis_bayar">
				<option>--Pilih Satu--</option>
				<option value="1">SPP</option>
				<option value="2">Infak</option>
			</select>
		</div>
	<div>
			<label>Tanggal Pembayaran</label>
			<input type="date" name="tanggal">
		</div>
	<div>
			<label>Nominal</label>
			<input type="number" name="nominal">
		</div>
		<div class="btn">
			<button type="submit" name="submit">Tambah</button>
			<button type="button" name="submit">Reset </button>
		</div>
</form>
</div>
</body>
</html>