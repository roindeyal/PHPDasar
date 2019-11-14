<?php

	include '../koneksi/koneksi.php';

	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$kodejenis = $_POST['kodejenis'];
	$tanggal = date('Y-m-d');
	
	$result = $koneksi->query("INSERT INTO customer VALUES('','".$nama."','".$alamat."','".$tanggal."','".$telepon."','".$kodejenis."');");

	if($result){

		header("Location: http://localhost/AndikaKurniawan/PHPDasar/Hari-5/customer/main.php");

	}else {

		echo "Gagal";

	}


?>