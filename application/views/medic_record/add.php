<section class="content-header">
	<h1>
		Daftar Rawat Jalan
	</h1>
</section>

<section class="content">
	<div class="row">
		<form class="form-horizontal" id="patient_form" role="form" action="add_process" method="post" enctype="multipart/form-data">
			<div class="col-xs-6">
			</div>
			<div class="col-xs-6">
				<div class="box box-success">
					<div class="box-body">
						<div class="form-group">
							<label class="col-sm-4 control-label">Tanggal *</label>
							<div class="col-sm-8">
								<input type="date" class="form-control" name="rawat_tanggal" id="rawat_tanggal">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Jam *</label>
							<div class="col-sm-8">
								<input class="form-control" name="rawat_jam" id="rawat_jam">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Pembayaran *</label>
							<div class="col-md-8">
								<select class="form-control" name="rawat_bayar" id="rawat_bayar">
									<option value="1">JKN / BPJS PBI</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">No. Asuransi *</label>
							<div class="col-md-8">
								<input class="form-control" name="rawat_asuransi" id="rawat_asuransi">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Penanggung *</label>
							<div class="col-md-8">
								<select class="form-control" name="rawat_penanggung" id="rawat_penanggung">
									<option value="1">Pemerintah Kota</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Kadaluarsa</label>
							<div class="col-sm-8">
								<input type="date" class="form-control" name="rawat_kadaluarsa" id="rawat_kadaluarsa">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Kelas *</label>
							<div class="col-md-8">
								<select class="form-control" name="rawat_kelas" id="rawat_kelas">
									<option value="1">Kelas I</option>
									<option value="2">Kelas II</option>
									<option value="3">Kelas III</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Unit / Klinik</label>
							<div class="col-md-8">
								<select class="form-control" name="rawat_unit" id="rawat_unit">
									<option value="1">Napza</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Dokter</label>
							<div class="col-md-8">
								<select class="form-control" name="rawat_dokter" id="rawat_dokter">
									<option value="1">Dr. Budi Darmawan</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Paket</label>
							<div class="col-md-8">
								<select class="form-control" name="rawat_paket" id="rawat_paket">
									<option value="1">Paket 1B</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Cara Masuk</label>
							<div class="col-md-8">
								<select class="form-control" name="rawat_cara_masuk" id="rawat_cara_masuk">
									<option value="1">Datang Sendiri</option>
									<option value="2">Diantar</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<center>
					<button type="submit" class="btn btn-success">Tambah</button>
				</center>
			</div>
		</form>
	</div>
</section>