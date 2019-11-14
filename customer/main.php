<?php

	include '../include/header.php';
	include '../koneksi/koneksi.php';
	include '../include/navbar.php';

	$result = $koneksi->query("SELECT * FROM customer");

	$jeniskode = array('-','Member','Umum');

?>


<div class="container-fluid" style="margin-top:60px;">
	<div class="row">
		<div class="col-sm-3" style="margin-top:40px;">
			<?php include '../include/sidebar.php'; ?>
		</div>
		<div class="col-sm-9">
			<p class="h5 mt-5 text-danger">DAFTAR CUSTOMER</p>
			<a href="../action/action_plus.php" class="btn btn-secondary btn-sm"><i class="fas fa-user-plus"></i> Tambah Customer</a>
			<form name="crud" method="GET">
				<table class="table table-sm">
				<tr>
					<th>Nomer</th>
					<th>Nama Customer</th>
					<th>Alamat</th>
					<th>Telepon</th>
					<th>Tanggal</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
				<?php $nomer = 1; ?>
				<?php foreach($result as $sult) : ?>
					<tr>
						<td><?= $nomer++; ?></td>
						<td><?= $sult["customer_nama"]; ?></td>
						<td><?= $sult["customer_alamat"]; ?></td>
						<td><?= $sult["telepon"]; ?></td>
						<td><?= $sult['customer_tgl']?></td>
						<td><?= $jeniskode[$sult['kode_jenis']]?></td>
						<td>
						 | <a class="btn btn-outline-secondary btn-sm" href="http://localhost/AndikaKurniawan/PHPDasar/Hari-5/action/action_update.php?id=<?= $sult['customer_id']; ?>"><i class="fas fa-edit"></i> Edit</a> | <a class="btn btn-secondary btn-sm" href="http://localhost/AndikaKurniawan/PHPDasar/Hari-5/action/action_delete.php?id=<?= $sult['customer_id']; ?>" onclick="return confirm('Benar Data dihapus ?')"><i class="fas fa-trash-alt"></i> hapus</a></td>
					</tr>

				<?php endforeach; ?>
				</table>
			</form>
		</div>
	</div>	
</div>


<?php include '../include/footer.php' ?>
