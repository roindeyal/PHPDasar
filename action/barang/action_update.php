<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
<?php

	include '../../koneksi/koneksi.php';
	include '../../include/navbar.php';

	$id = $_GET['id'];

	$result = $koneksi->query("SELECT * FROM barang where kode_barang='$id'");

	$produsenKode = array('- Produsen Kode -','PT. Mayora Perkasa','PT. ABC Sejahtera', 'PT. Makmur Bersama');

	foreach ($result as $key) {
		
		$namaBarang = $key['nama_barang'];
		$hargaJual = $key['harga_jual'];
		$stok = $key['stok'];
		$kodeProdusen = $key['kode_produsen'];

	}

 ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3" style="margin-top:80px;">
			<?php include '../../include/sidebar.php' ?>
		</div>
		<div class="col-sm-8" style="margin-top:50px;">
			<p class="h5 mt-5 text-danger">UPDATE BARANG</p>
			<div class="container">
				<form name="form-action-update" action="../../function/barang/edit.php?id=<?= $id; ?>" method="POST">
				 	<div class="form-group">
				 		<label for="Nama Barang">Nama Barang</label>
				 		<input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang..." id="Nama Barang" value="<?= $namaBarang ?>">
				 	</div>
				 	<div class="form-group">
				 		<label for="hargaJual">Harga Jual</label>
				 		<input type="text" class="form-control" name="harga_jual" id="hargaJual" placeholder="Harga Jual..." value="<?= $hargaJual ?>">
				 	</div>
				 	<div class="form-group">
				 		<label for="Stok">Stok</label>
				 		<input type="text" class="form-control" name="stok" id="Stok" placeholder="Stok..." value="<?= $stok ?>">
				 	</div>
				 	<div class="form-group">
				 		<label for="telepon">Kode Produsen</label>
						<select class="form-control" name="kode_produsen">

							<?php for($i = 0; $i < count($produsenKode) ; $i++) :?>

								<?php if ($produsenKode[$kodeProdusen] == $produsenKode[$i]): ?>

									<option value="<?= $i ?>" selected><?= $produsenKode[$i] ?></option>

								<?php else : ?>

									<option value="<?= $i ?>"><?= $produsenKode[$i] ?></option>

								<?php endif; ?>

							<?php endfor; ?>

						</select>
				 	</div>
				 	<button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>