<?php

	$koneksi = mysqli_connect("localhost","root","","penjualan");

	if($koneksi){

		// echo "Koneksi Berhasil";

	}else {

		die("Koneksi Gagal :" . mysqli_connect_error());

	}