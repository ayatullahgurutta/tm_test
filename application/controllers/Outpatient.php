<?php
	class Outpatient extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('manage_model');
			$this->load->library('session');
		}

		function index() {
			redirect('outpatient/add_load');
		}

		function record() {
			$data['fragment'] = 'outpatient_list';
			$this->load->view('outpatient/base', $data);
		}

		function search_patient() {
			$res = false;
			// $res = $this->manage_model->search_multi($this->input->post('query'));
			if ($res) {

			}
			echo json_encode($res);
		}

		function add_load() {
			$data['fragment'] = 'outpatient_add';
			$this->load->view('outpatient/base', $data);
		}

		function add_process() {
			$data = $this->input->post();
			unset($data['cari_pasien']);
			$data['rawat_tanggal'] = $data['rawat_tanggal'] . ' ' . $data['rawat_jam'];
			unset($data['rawat_jam']);
			$res = $this->manage_model->add('rawat_jalan', $data);
			// print_r($this->input->post());
			// redirect('patient/record');
		}

	}
?>