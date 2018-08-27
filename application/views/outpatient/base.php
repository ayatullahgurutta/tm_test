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
					$this->load->view('outpatient/add');
					$this->load->view('footer');
				?>
			</div>
		</div>

		<?php
			$this->load->view('js_placer');
		?>
		<script>
			var table1 = $('#list1').DataTable({
			ajax: {
			url: '<?= base_url('outpatient/search_patient/') ?>',
				'dataSrc': ''
			},
			"scrollX": true,
			"selected": true,
			"scrollY": "300px",
			"scrollCollapse": true,
			"paging": true,
			"columns": [
				{title:"No RM"},
				{title:"Nama"},
				{title:"Alamat"},
				{title:"Umur"},
			],
			"columnDefs": [
				{"className": "dt-center", "targets": [0]},
				{"className": "dt-center", "targets": [1]},
				{"className": "dt-center", "targets": [2]},
				{"className": "dt-center", "targets": [3]},
			]
			});
		</script>
	</body>
</html>