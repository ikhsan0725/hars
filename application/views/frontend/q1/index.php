<div class="row">
	<div class="col-md-12">
		<div class="card box-shadow-2">
			<div class="card-header">
				<h1 style="text-align: left"><?= $title; ?></h1>
			</div>
			<!-- Akhir Card Header -->
			
			<hr>
			<div class="card-body">
			
			<div>
					<!-- <fieldset class="form-group floating-label-form-group"> -->
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
								<label for="laporan-tahun" style="font-size: 16px; font-weight: bold;">1. Firasat Buruk</label>
								<br>
								<label for="laporan-tahun" style="font-size: 16px; font-weight: bold;">2. Takut Akan Pikiran Sendiri</label>
								<br>
								<label for="laporan-tahun" style="font-size: 16px; font-weight: bold;">3. Mudah tersinggung</label>
							</div>
							<!-- <div class="col-3"></div> -->
							<div class="col-4 mt-1">
							<?= form_open('q1/tambah') ?>
								<fieldset class="form-group floating-label-form-group">
									<input type="text" name="nama_autocomplete" id="nama_pasien" class="form-control"
										placeholder="Nama Pasien" value="<?= $data['pasien_nama'] ?>" readonly>
									<input type="hidden" id="id_pasien" name="nama" value="<?= $data['pasien_id'] ?>">
								</fieldset>								
								<fieldset class="form-group floating-label-form-group">								
									<input type="number" class="form-control" id="item_satu" name="item_satu" placeholder="Masukkan Jumlah Gejala yang Anda Rasakan" autocomplete="off" required>
									<input type="hidden" id="item_dua" name="item_dua">
									<input type="hidden" id="item_tiga" name="item_tiga">
									<input type="hidden" id="item_empat" name="item_empat">
									<input type="hidden" id="item_lima" name="item_lima">
									<input type="hidden" id="item_enam" name="item_enam">
									<input type="hidden" id="item_tujuh" name="item_tujuh">
									<input type="hidden" id="item_delapan" name="item_delapan">
									<input type="hidden" id="item_sembilan" name="item_sembilan">
									<input type="hidden" id="item_sepuluh" name="item_sepuluh">
									<input type="hidden" id="item_sebelas" name="item_sebelas">
									<input type="hidden" id="item_duabelas" name="item_duabelas">
									<input type="hidden" id="item_tigabelas" name="item_tigabelas">
									<input type="hidden" id="item_empatbelas" name="item_empatbelas">
								</fieldset>
							</div>
						</div>
						<div class="row">
							<div class="col-9"></div>
							<div class="col-2">
								<input type="submit" class="btn btn-primary btn-block btn-bg-gradient-x-blue-cyan" name="simpan" value="Selanjutnya">
							</div>
							<?= form_close() ?>
						</div>
					<!-- </fieldset> -->
				</div>
				<hr>
			</div>
			
		</div>
	</div>
</div>
