<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
<?php

	include '../../include/navbar.php';
 ?>


<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3" style="margin-top:100px;">
			<?php include '../../include/sidebar.php' ?>
		</div>
		<div class="col-sm-8" style="margin-top:70px;">
			<p class="h5 mt-5 text-danger">TAMBAH CUSTOMER</p>
			<br>
			<div class="container">
				<form name="form-action-plus" action="../../function/barang/add.php" method="POST">
				 	<div class="form-group">
				 		<label for="kode_barang">Kode Barang</label>
				 		<input type="text" class="form-control" name="kode_barang" placeholder="Kode Barang..." id="kode_barang">
				 	</div>
				 	<div class="form-group">
				 		<label for="nama_barang">Nama Barang</label>
				 		<input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang..." id="nama_barang">
				 	</div>
				 	<div class="form-group">
				 		<label for="harga_jual">Harga Jual</label>
				 		<input type="text" class="form-control" name="harga_jual" placeholder="Harga Jual..." id="harga_jual">
				 	</div>
				 	<div class="form-group">
				 		<label for="stok">Stok</label>
				 		<input type="text" class="form-control" name="stok" id="stok" placeholder="Stok...">
				 	</div>
				 	<div class="form-group">
				 		<label for="kodejenis">Kode Produsen</label>
				 		<select class="form-control" name="kode_produsen" id="kodejenis">
				 			<option value="0">-- Pilih Kode Jenis --</option>
				 			<option value="1">PT. Mayora Perkasa</option>
				 			<option value="2">PT. ABC Sejahtera</option>
				 			<option value="3">PT. Makmur Bersama</option>
				 		</select>
				 	</div>
				 	<button type="submit" class="btn btn-primary">Tambahkan</button>
				</form>
			</div>
		</div>
	</div>
</div>