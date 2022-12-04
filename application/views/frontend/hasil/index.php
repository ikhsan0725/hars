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
								<label for="basicInput" style="font-size: 24px;">Berdasarkan Acuan Hammilton Anxiety Rating Scale (HARS) Maka :</label>
							</div>
						</div>
						<div class="row">
							<div class="col-3">
								<img class="brand-logo" style="width: 200px;" src="<?= base_url() ?>assets/images/tes/test.png" alt="">
							</div>	
							<div class="col-9 mt-2">
								<table class="table">
									<tr>
										<td width='15%'>Nama</td>
										<td width='5%'>: </td>
										<td width='80%'><?= $data['pasien_nama']; ?></td>
									</tr>
									<tr>
										<td>Skor</td>
										<td>: </td>
										<td><?= $nilai['nilai_total'] ?></td>
									</tr>
									<tr>
										<td>Tingkat Kecemasan</td>
										<td>: </td>
										<td><label for=""><?php 
											if($nilai['nilai_total'] <= 14){
												echo "Tidak Cemas";
											}else if($nilai['nilai_total'] >= 15 and $nilai['nilai_total'] <= 20){
												echo "Tingkat Cemas Ringan";
											}else if($nilai['nilai_total'] >= 21 and $nilai['nilai_total'] <= 27){
												echo "Tingkat Cemas Sedang";
											}else if($nilai['nilai_total'] >= 28 and $nilai['nilai_total'] <= 41){
												echo "Tingkat Cemas Berat";
											}else if($nilai['nilai_total'] >= 42 and $nilai['nilai_total'] <= 80){
												echo "Tingkat Cemas Sangat Berat";
											}
										?></label></td>
									</tr>
									<tr>
										<td>Penanganan</td>
										<td>: </td>
										<td></td>
									</tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-5">
								<!-- <input for="" value="<?php 
								if($nilai['nilai_total'] <= 14){ 
									echo "Tidak Cemas";
									}else if($nilai['nilai_total'] >= 15 and $nilai['nilai_total'] <= 20){
										echo "Tingkat Cemas Ringan";
										}else if($nilai['nilai_total'] >= 21 and $nilai['nilai_total'] <= 27){
											echo "Tingkat Cemas Sedang";
											}else if($nilai['nilai_total'] >= 28 and $nilai['nilai_total'] <= 41){
												echo "Tingkat Cemas Berat";
												}else if($nilai['nilai_total'] >= 42 and $nilai['nilai_total'] <= 80){
													echo "Tingkat Cemas Sangat Berat";
													}
													?>"></input> -->
							</div>
							<div class="col-2 mt-3">
								<button class="btn btn-primary btn-block btn-bg-gradient-x-blue-cyan" id="laporan-btn-lihat">Selesai</button>
							</div>
						</div>
					</fieldset>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>