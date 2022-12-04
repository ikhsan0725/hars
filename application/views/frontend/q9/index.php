<div class="row">
	<div class="col-md-12">
		<div class="card box-shadow-2">
		<?php
			if ($this->session->flashdata('alert') == 'update_pasien'):
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
				<h1 style="text-align: left"><?= $title; ?></h1>
			</div>
			<hr>
			<div class="card-body">
			<div>
					<fieldset class="form-group floating-label-form-group">
						<div class="row">
							<div class="col-md-3">
								
							</div>
							<div class="col-md-8">
								<label for="basicInput" style="font-size: 24px;">Berapa banyak gejala yang anda alami sesuai pilihan dibawah? <br>Tuliskan pada kolom menggunakan angka!</label>
							</div>
						</div>
						<div class="row">
							<div class="col-3">
								<img class="brand-logo" style="width: 200px;" src="<?= base_url() ?>assets/images/tes/test.png" alt="">
							</div>	
							<div class="col-4 mt-2">
								<label for="laporan-tahun" style="font-size: 16px; font-weight: bold;">1. Berdebar</label>
								<br>
								<label for="laporan-tahun" style="font-size: 16px; font-weight: bold;">2. Nyeri di Dada</label>
								<br>
								<label for="laporan-tahun" style="font-size: 16px; font-weight: bold;">3. Denyut Nadi Mengeras</label>
								<br>
								<label for="laporan-tahun" style="font-size: 16px; font-weight: bold;">4. Perasaan Lesu Lemas Seperti Mau Pingsan</label>
								<br>
								<label for="laporan-tahun" style="font-size: 16px; font-weight: bold;">5. Detak Jantung Hilang Sekejap</label>
							</div>
							<!-- <div class="col-3"></div> -->
							<div class="col-4 mt-4">								
							<?= form_open('q9/update') ?>
								<fieldset class="form-group floating-label-form-group">
									<input type="text" name="nama_autocomplete" id="nama_pasien" class="form-control"
										placeholder="Nama Pasien" value="<?= $data['pasien_nama'] ?>" readonly>
									<!-- <input type="text" name="nama_autocomplete" id="nama_pasien" class="form-control"
										placeholder="Nama Pasien" value="<?= $nilai['nilai_total'] ?>" readonly> -->
									<input type="hidden" id="id_pasien" name="nama" value="<?= $data['pasien_id'] ?>">
								</fieldset>								
								<fieldset class="form-group floating-label-form-group">								
										<input type="hidden" name="id_nilai" id="id_nilai" class="form-control"
										placeholder="Nilai" value="<?= $nilai['nilai_id'] ?>" readonly>						
										<input type="hidden" id="item_satu" name="item_satu" value="<?= $nilai['nilai_item_satu'] ?>">
										<input type="hidden" id="item_dua" name="item_dua" value="<?= $nilai['nilai_item_dua'] ?>">
										<input type="hidden" id="item_tiga" name="item_tiga" value="<?= $nilai['nilai_item_tiga'] ?>">
										<input type="hidden" id="item_empat" name="item_empat" value="<?= $nilai['nilai_item_empat'] ?>">
										<input type="hidden" id="item_lima" name="item_lima" value="<?= $nilai['nilai_item_lima'] ?>">
										<input type="hidden" id="item_enam" name="item_enam" value="<?= $nilai['nilai_item_enam'] ?>">
										<input type="hidden" id="item_tujuh" name="item_tujuh" value="<?= $nilai['nilai_item_tujuh'] ?>">
										<input type="hidden" id="item_delapan" name="item_delapan" value="<?= $nilai['nilai_item_delapan'] ?>">
									<input type="number" class="form-control" id="item_sembilan" name="item_sembilan" placeholder="Masukkan Jumlah Gejala yang Anda Rasakan" autocomplete="off" required>
									<input type="hidden" id="item_sepuluh" name="item_sepuluh">
									<input type="hidden" id="item_sebelas" name="item_sebelas">
									<input type="hidden" id="item_duabelas" name="item_duabelas">
									<input type="hidden" id="item_tigabelas" name="item_tigabelas">
									<input type="hidden" id="item_empatbelas" name="item_empatbelas">
								</fieldset>
							</div>
						</div>
						<div class="row">
							<div class="col-2">
								<button onclick="goBack()" class="btn btn-danger btn-block btn-bg-gradient-x-red-pink" id="laporan-btn-lihat">Kembali</button>
							</div>
							<div class="col-8"></div>
							<div class="col-2">
								<input type="submit" class="btn btn-primary btn-block btn-bg-gradient-x-blue-cyan" name="update" value="Selanjutnya">
							</div>
						</div>
						<?= form_close() ?>
					</fieldset>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>