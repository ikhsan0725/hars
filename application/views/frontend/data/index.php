<div class="row">
	<div class="col-md-12">
		<div class="card box-shadow-2">
		<?php
			if ($this->session->flashdata('alert') == 'login_sukses'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown"
					 style="position: absolute; width: 100%; z-index: 2" id="feedback"
					 role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Selamat datang di Website Tes Kecemasan, <?= $data['pasien_nama']; ?>
				</div>
			<?php
			endif;
			?>
			<div class="card-header">
				<h1 style="text-align: center">Data Diri Pasien</h1>
			</div>
			<hr>
			<div class="card-body">
				<table class="table">
					<tr>
						<td>Nama</td>
						<td>: <?php echo $data['pasien_nama']; ?></td>
					</tr>
					<tr>
						<td>Tempat dan Tanggal Lahir</td>
						<td>: <?php echo $data['pasien_tempat_lahir']; ?>, <?php echo date_indo($data['pasien_tanggal_lahir']); ?></td>
					</tr>
					<tr>
						<td>No Hp</td>
						<td>: <?php echo $data['pasien_nomor_hp']; ?></td>
					</tr>
					<tr>
						<td>Tanggal Tes</td>
						<td>: <?php echo date_indo($data['pasien_tanggal_pemeriksaan']); ?></td>
					</tr>
				</table>
			</div>
			<hr>
		</div>
	</div>
</div>