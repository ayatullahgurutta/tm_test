<!DOCTYPE html>
<html>
	<head>
		<title>CI</title>
		<?php
			$this->load->view('head_placer');
		?>
	</head>

	<body class="hold-transition skin-green sidebar-mini">
		<div class="wrapper">
			<?php
				$this->load->view('header');
				$this->load->view('navbar');
			?>
			<div class="content-wrapper">
				<?php
					$this->load->view('patient/add');
					$this->load->view('footer');
				?>
			</div>
		</div>

		<?php
			$this->load->view('js_placer');
		?>
		<script>
			function get_age(base, res, dis) {
				var today = new Date();
				var birthDate = new Date($('#'+base).val());
				var age = today.getFullYear() - birthDate.getFullYear();
				var m = today.getMonth() - birthDate.getMonth();
				if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
					age--;
				}
				$('#'+res).val(age);
				$('#'+dis).html(age);
			}
		</script>
	</body>
</html>