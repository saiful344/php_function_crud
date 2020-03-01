<?php 

require "backend.php";
$id = $_GET['id'];

$query = query("SELECT * FROM rb_pembayaran WHERE id_pembayaran=$id")[0];
if (isset($_POST["submit"])) {
	if (ubah($_POST) > 0) {
	header("Location: http://localhost/payment-school/index.php");
	
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
	<input type="hidden" name="id" value="<?= $query['id_pembayaran'] ?>">
	<h3>Ubah data pembayaran</h3>
	<div>
			<label>NIS</label>
			<input type="number" name="nis" id="nis" value="<?= $query['nis'] ?>">
		</div>
	<div>
			<label>Jenis Bayar</label>
			<select name="jenis_bayar">
				<?php if ($query['id_jenispembayaran'] == 1){ ?>
					<option value="1" selected>SPP</option>
				<?php } elseif($query['id_jenispembayaran'] == 2) {?>
					<option value="2">Infak</option>
			<?php }?>
			</select>
		</div>
	<div>
			<label>Tanggal Pembayaran</label>
			<input type="date" name="tanggal" value="<?= $query['tgl_pembayaran'] ?>">
		</div>
	<div>
			<label>Nominal</label>
			<input type="number" name="nominal" value="<?= $query['nominal_pembayaran'] ?>">
		</div>
		<div class="btn">
			<button type="submit" name="submit">Tambah</button>
			<button type="reset" name="submit">Reset </button>
		</div>
</form>
</div>
</body>
</html>