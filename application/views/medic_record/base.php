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
					$this->load->view('medic_record/add');
					$this->load->view('footer');
				?>
			</div>
		</div>

		<?php
			$this->load->view('js_placer');
		?>
		<script>
		</script>
	</body>
</html>