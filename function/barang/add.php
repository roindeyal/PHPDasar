<?php

	include '../../koneksi/koneksi.php';

	$kodeBarang = $_POST['kode_barang'];
	$namaBarang = $_POST['nama_barang'];
	$hargaJual = $_POST['harga_jual'];
	$stok = $_POST['stok'];
	$kodeProdusen = $_POST['kode_produsen'];
	
	$result = $koneksi->query("INSERT INTO barang VALUES('".$kodeBarang."','".$namaBarang."','".$hargaJual."','".$stok."','".$kodeProdusen."');");

	echo $result;

	if($result){

		header("Location: http://localhost/AndikaKurniawan/PHPDasar/Hari-5/main/barang/index.php");

	}else {

		echo "Gagal";

	}


?>