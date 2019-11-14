<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
<?php
	include '../../koneksi/koneksi.php';
	include '../../include/navbar.php';

	$id = $_GET['id'];

	$result = $koneksi -> query("SELECT * FROM customer where customer_id=$id");

	$jeniskode = array('- Jenis Kode -','Member','Umum');

	foreach ($result as $key) {
		
		$nama = $key['customer_nama'];
		$alamat = $key['customer_alamat'];
		$telepon = $key['telepon'];
		$kodejenis = $key['kode_jenis'];

	}

 ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3" style="margin-top:80px;">
			<?php include '../../include/sidebar.php' ?>
		</div>
		<div class="col-sm-8" style="margin-top:50px;">
			<p class="h5 mt-5 text-danger">UPDATE CUSTOMER</p>
			<div class="container">
				<form name="form-action-update" action="../../function/customer/edit.php?id=<?= $id; ?>" method="POST">
				 	<div class="form-group">
				 		<label for="nama">Nama</label>
				 		<input type="text" class="form-control" name="nama" placeholder="Nama..." id="nama" value="<?= $nama ?>">
				 	</div>
				 	<div class="form-group">
				 		<label for="alamat">Alamat</label>
				 		<textarea type="text" class="form-control" name="alamat" placeholder="Alamat..." id="alamat"><?= $alamat ?></textarea>
				 	</div>
				 	<div class="form-group">
				 		<label for="telepon">Telepon</label>
				 		<input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon..." value="<?= $telepon ?>">
				 	</div>
				 	<div class="form-group">
				 		<label for="telepon">Kode Jenis</label>
						<select class="form-control" name="kode_customer">

							<?php for($i = 0; $i < count($jeniskode) ; $i++) :?>

								<?php if ($jeniskode[$kodejenis] == $jeniskode[$i]): ?>

									<option value="<?= $kodejenis ?>" selected><?= $jeniskode[$i] ?></option>

								<?php else : ?>

									<option value="<?= $i ?>"><?= $jeniskode[$i] ?></option>

								<?php endif; ?>

							<?php endfor; ?>

						</select>
				 	</div>
				 	<div class="form-group">
				 		<label for="tanggal">Tanggal</label>
				 		<input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= date('Y-m-d'); ?>">
				 	</div>
				 	<button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>