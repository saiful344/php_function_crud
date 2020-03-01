<?php
	$conn = mysqli_connect("localhost","root","root","db_payment");

	function query($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result) ){
			$rows[] = $row;
		}
		return $rows;
	}
	function tambah($data){
		global $conn;

		$nis = htmlspecialchars($data['nis']);
		$jenis_bayar = htmlspecialchars($data['jenis_bayar']);
		$tanggal = htmlspecialchars($data['tanggal']);
		$nominal = htmlspecialchars($data['nominal']);

		$query = "INSERT INTO rb_pembayaran (nis,tgl_pembayaran,id_jenispembayaran,nominal_pembayaran) VALUES ($nis,'$tanggal',$jenis_bayar,$nominal)";
		mysqli_query($conn,$query);

		return mysqli_affected_rows($conn);
	}
	function ubah($data){
		global $conn;

		$id = $data['id'];
		$nis = htmlspecialchars($data['nis']);
		$jenis_bayar = htmlspecialchars($data['jenis_bayar']);
		$tanggal = htmlspecialchars($data['tanggal']);
		$nominal = htmlspecialchars($data['nominal']);

		$query = "UPDATE rb_pembayaran SET  
					nis = $nis,
					tgl_pembayaran = '$tanggal',
					id_jenispembayaran = $jenis_bayar,
					nominal_pembayaran = $nominal WHERE id_pembayaran = $id";
		mysqli_query($conn,$query);

		return mysqli_affected_rows($conn);
	}

	

	function hapus($id){
		global $conn;

		mysqli_query($conn,"DELETE FROM rb_pembayaran WHERE id_pembayaran = $id");

		return mysqli_affected_rows($conn);
	}
?>