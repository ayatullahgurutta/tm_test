<section class="content-header">
	<h1>
		Tambah Pasien
	</h1>
</section>

<section class="content">
	<div class="row">
		<form class="form-horizontal" id="patient_form" role="form" action="add_process" method="post" enctype="multipart/form-data">
			<div class="col-xs-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h5 class="box-title">Data Pribadi</h5>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label class="col-sm-2 control-label">RFID Smart Card</label>
							<div class="col-md-4">
								<input class="form-control" name="pasien_rfid" id="pasien_rfid">
							</div>
							<label class="col-sm-2 control-label">Email</label>
							<div class="col-md-4">
								<input type="email" class="form-control" name="pasien_email" id="pasien_email">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">No. KK</label>
							<div class="col-md-4">
								<input class="form-control" name="pasien_kk" id="pasien_kk">
							</div>
							<label class="col-sm-2 control-label">Negara</label>
							<div class="col-md-4">
								<select class="form-control" name="pasien_negara" id="pasien_negara">
									<option value="1">Indonesia</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">No. Identitas</label>
							<div class="col-md-2">
								<select class="form-control" name="pasien_nid_tipe" id="pasien_nid_tipe">
									<option value="1">KTP</option>
									<option value="2">SIM</option>
								</select>
							</div>
							<div class="col-md-2">
								<input class="form-control" name="pasien_nid_no" id="pasien_nid_no">
							</div>
							<label class="col-sm-2 control-label">Kota</label>
							<div class="col-md-4">
								<select class="form-control" name="pasien_kota" id="pasien_kota">
									<option value="1">Surabaya</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama Lengkap *</label>
							<div class="col-md-4">
								<input class="form-control" name="pasien_nama" id="pasien_nama" required>
							</div>
							<label class="col-sm-2 control-label">Kecamatan</label>
							<div class="col-md-4">
								<select class="form-control" name="pasien_kecamatan" id="pasien_kecamatan">
									<option value="1">Sukolilo</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Jenis Kelamin</label>
							<div class="col-md-4">
								<select class="form-control" name="pasien_jenis_kelamin" id="pasien_jenis_kelamin">
									<option value="1">Laki-laki</option>
									<option value="2">Perempuan</option>
								</select>
							</div>
							<label class="col-sm-2 control-label">Kelurahan</label>
							<div class="col-md-4">
								<select class="form-control" name="pasien_kelurahan" id="pasien_kelurahan">
									<option value="1">Keputih</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Golongan Darah</label>
							<div class="col-md-4">
								<select class="form-control" name="pasien_gol_darah" id="pasien_gol_darah">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="AB">AB</option>
									<option value="O">O</option>
								</select>
							</div>
							<label class="col-sm-2 control-label">RT / RW</label>
							<div class="col-md-2">
								<input class="form-control" name="pasien_rt" id="pasien_rt">
							</div>
							<div class="col-md-2">
								<input class="form-control" name="pasien_rw" id="pasien_rw">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Tempat Lahir</label>
							<div class="col-md-4">
								<input class="form-control" name="pasien_tempat_lahir" id="pasien_tempat_lahir">
							</div>
							<label class="col-sm-2 control-label">Domisili</label>
							<div class="col-md-4">
								<input class="form-control" name="pasien_domisili" id="pasien_domisili">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Tanggal Lahir / Umur *</label>
							<div class="col-md-3">
								<input type="date" class="form-control" name="pasien_tanggal_lahir" id="pasien_tanggal_lahir" onchange="get_age('pasien_tanggal_lahir', 'pasien_umur', 'pasien_umur_tampil')" required>
								<input type="hidden" name="pasien_umur" id="pasien_umur">
							</div>
							<div class="col-md-1" id="pasien_umur_tampil">
							</div>
							<label class="col-sm-2 control-label">Agama</label>
							<div class="col-md-4">
								<input class="form-control" name="pasien_domisili" id="pasien_domisili">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Jenis Pasien</label>
							<div class="col-md-4">
								<select class="form-control" name="pasien_jenis" id="pasien_jenis">
									<option value="1">Pasien Inhealth</option>
								</select>
							</div>
							<label class="col-sm-2 control-label">Suku</label>
							<div class="col-md-4 col-sm-10">
								<input class="form-control" name="pasien_suku" id="pasien_suku">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">No. Telp</label>
							<div class="col-md-4 col-sm-10">
								<input class="form-control" name="pasien_no_telp" id="pasien_no_telp">
							</div>
							<label class="col-sm-2 control-label">Pendidikan</label>
							<div class="col-md-4 col-sm-10">
								<select class="form-control" name="pasien_pendidikan" id="pasien_pendidikan">
									<option value="SD">SD</option>
									<option value="SMP">SMP</option>
									<option value="SMA">SMA</option>
									<option value="D">Diploma</option>
									<option value="S">Sarjana</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">No. HP</label>
							<div class="col-md-4 col-sm-10">
								<input class="form-control" name="pasien_no_hp" id="pasien_no_hp">
							</div>
							<label class="col-sm-2 control-label">Pekerjaan</label>
							<div class="col-md-4 col-sm-10">
								<select class="form-control" name="pasien_pekerjaan" id="pasien_pekerjaan">
									<option value="1">Bekerja</option>
									<option value="0">Tidak</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Alamat *</label>
							<div class="col-md-4 col-sm-10">
								<input class="form-control" name="pasien_alamat" id="pasien_alamat" required>
							</div>
							<label class="col-sm-2 control-label">Status Nikah</label>
							<div class="col-md-4 col-sm-10">
								<select class="form-control" name="pasien_nikah" id="pasien_nikah">
									<option value="1">Sudah</option>
									<option value="0">Belum</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Valid</label>
							<div class="col-md-4 col-sm-10">
								<select class="form-control" name="pasien_valid" id="pasien_valid">
									<option value="1">Valid</option>
									<option value="0">Tidak</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Catatan</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="pasien_catatan" id="pasien_catatan"></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h5 class="box-title">Data Wali</h5>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama Lengkap</label>
							<div class="col-sm-10">
								<input class="form-control" name="pasien_wali_nama" id="pasien_wali_nama">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Tanggal Lahir / Umur</label>
							<div class="col-md-3">
								<input type="date" class="form-control" name="pasien_wali_tgl_lahir" id="pasien_wali_tgl_lahir" onchange="get_age('pasien_wali_tgl_lahir', 'pasien_wali_umur', 'pasien_wali_umur_tampil')">
								<!-- <input type="hidden" name="pasien_wali_umur" id="pasien_wali_umur"> -->
							</div>
							<div class="col-md-1" id="pasien_wali_umur_tampil">
							</div>
							<label class="col-sm-2 control-label">Jenis Kelamin</label>
							<div class="col-md-4">
								<select class="form-control" name="pasien_jenis_kelamin" id="pasien_jenis_kelamin">
									<option value="1">Laki-laki</option>
									<option value="2">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-10">
								<input class="form-control" name="pasien_wali_alamat" id="pasien_wali_alamat">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Hubungan</label>
							<div class="col-sm-10">
								<input class="form-control" name="pasien_wali_hub" id="pasien_wali_hub">
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