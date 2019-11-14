<?php 

	include '../koneksi/koneksi.php';

	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$tanggal = date('Y-m-d');
	
	$result = $koneksi->query("update customer SET customer_nama='$nama', customer_alamat='$alamat',customer_tgl='$tanggal' ,telepon='$telepon' WHERE customer_id=$id ");

	var_dump($result);

	if($result){

		header("Location: http://localhost/AndikaKurniawan/PHPDasar/Hari-5/customer/main.php");

	}else {

		echo "Gagal";

	}