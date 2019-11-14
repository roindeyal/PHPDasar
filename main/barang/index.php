<?php

	include '../../include/header.php';
	include '../../koneksi/koneksi.php';
	include '../../include/navbar.php';

	$result = $koneksi->query("SELECT * FROM barang");

	$produsenKode = array('-','PT.Mayora Perkasa','PT.ABC Sejahtera','PT.Makmur Bersama');

?>


<div class="container-fluid" style="margin-top:60px;">
	<div class="row">
		<div class="col-sm-3" style="margin-top:40px;">
			<?php include '../../include/sidebar.php'; ?>
		</div>
		<div class="col-sm-9">
			<p class="h5 mt-5 text-danger">DAFTAR BARANG</p>
			<a class="btn btn-secondary btn-sm" href="../../action/barang/action_plus.php"><i class="fas fa-user-plus"></i> Tambah Barang</a>
			<form name="crud" method="GET">
				<table class="table table-sm">
				<tr>
					<th>Nomer</th>
					<th>Nama Barang</th>
					<th>Harga Jual</th>
					<th>Stok</th>
					<th>Kode Produsen</th>
				</tr>
				<?php $nomer = 1; ?>
				<?php foreach($result as $sult) : ?>
					<tr>
						<td><?= $nomer++; ?></td>
						<td><?= $sult["nama_barang"]; ?></td>
						<td><?= $sult["harga_jual"]; ?></td>
						<td><?= $sult["stok"]; ?></td>
						<td><?= $produsenKode[$sult['kode_produsen']];?></td>

						<td> | <a class="btn btn-outline-secondary btn-sm" href="../../action/barang/action_update.php?id=<?= $sult['kode_barang']; ?>"><i class="fas fa-edit"></i> Edit</a> | <a  class="btn btn-secondary btn-sm" href="../../action/barang/action_delete.php?id=<?= $sult['kode_barang']; ?>" onclick="return confirm('Benar Data dihapus ?')"><i class="fas fa-trash-alt"></i> hapus</a></td>
					</tr>

				<?php endforeach; ?>
				</table>
			</form>
		</div>
	</div>	
</div>


<?php include '../../include/footer.php' ?>
