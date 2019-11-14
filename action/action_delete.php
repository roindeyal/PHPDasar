<?php 
	
	include '../koneksi/koneksi.php';

	$id = $_GET['id'];
	$result = $koneksi -> query("DELETE FROM customer where customer_id=$id");
	if($result){

		header("Location: http://localhost/AndikaKurniawan/PHPDasar/Hari-5/customer/main.php");

	}else {

		echo "Data Gagal DiHapus";

	}


?>