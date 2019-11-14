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
				<form name="form-action-plus" action="../../function/customer/add.php" method="POST">
				 	<div class="form-group">
				 		<label for="nama">Nama</label>
				 		<input type="text" class="form-control" name="nama" placeholder="Nama..." id="nama">
				 	</div>
				 	<div class="form-group">
				 		<label for="alamat">Alamat</label>
				 		<textarea type="text" class="form-control" name="alamat" placeholder="Alamat..." id="alamat"></textarea>
				 	</div>
				 	<div class="form-group">
				 		<label for="telepon">Telepon</label>
				 		<input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon...">
				 	</div>
				 	<div class="form-group">
				 		<label for="kodejenis">Kode Jenis</label>
				 		<select class="form-control" name="kodejenis" id="kodejenis">
				 			<option value="0">-- Pilih Kode Jenis --</option>
				 			<option value="1">Member</option>
				 			<option value="2">Umum</option>
				 		</select>
				 	</div>
				 	<div class="form-group">
				 		<label for="tanggal">Tanggal</label>
				 		<input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= date('Y-m-d'); ?>">
				 	</div>
				 	<button type="submit" class="btn btn-primary">Tambahkan</button>
				</form>
			</div>
		</div>
	</div>
</div>