<!DOCTYPE html>
<html>
	<head>
		<title>CI</title>
		<?php
			$this->load->view('manage/head_placer');
		?>
	</head>

	<body class="hold-transition skin-green sidebar-mini">
		<div class="wrapper">
			<?php
				$this->load->view('manage/header');
				$this->load->view('manage/navbar');
			?>
			<div class="content-wrapper">
				<?php
					if (strcmp($fragment, 'profile') == 0) {
						$this->load->view('manage/profile');
					} else if (strcmp($fragment, 'chg_pass') == 0) {
						$this->load->view('manage/chg_pass');
					} else if (strcmp($fragment, 'dashboard') == 0) {
				?>
				<section class="content-header">
					<h1>
						Selamat Datang, <?php echo ucwords($role == 1 ? $user->pasien_nama : $user->pegawai_nama);?>
					</h1>
				</section>

				<section class="content">
					<div class="row">
						<center>
							<img src="<?php echo base_url() . 'assets/images/ava.png';?>" width="45%">
						</center>
					</div>
				</section>
				<?php
					}
					$this->load->view('manage/footer');
				?>
			</div>
		</div>
		<?php
			$this->load->view('manage/js_placer');
		?>
	</body>
</html>