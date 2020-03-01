<?php
require "backend.php";

$id = $_GET['id'];

if( hapus($id) > 0 ) {
	header("Location: http://localhost/payment-school/index.php");
}


?>