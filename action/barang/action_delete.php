<?php 
	
	include '../../koneksi/koneksi.php';

	$id = $_GET['id'];
	$result = $koneksi -> query("DELETE FROM barang where kode_barang='$id'");
	if($result){

		header("Location: http://localhost/AndikaKurniawan/PHPDasar/Hari-5/main/barang/index.php");

	}else {

		echo "Data Gagal DiHapus";

	}


?>