<?php 

	include '../../koneksi/koneksi.php';

	$id = $_GET['id'];
	$namaBarang = $_POST['nama_barang'];
	$hargaJual = $_POST['harga_jual'];
	$stok = $_POST['stok'];
	$kodeProdusen = $_POST['kode_produsen'];
	

	$result = $koneksi->query("update barang SET nama_barang='$namaBarang', harga_jual='$hargaJual',stok='$stok' ,kode_produsen='$kodeProdusen' WHERE kode_barang='$id' ");

	var_dump($result);

	if($result){

		header("Location: http://localhost/AndikaKurniawan/PHPDasar/Hari-5/main/barang/index.php");

	}else {

		echo "Gagal";

	}