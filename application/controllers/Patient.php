<?php
	class Patient extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('manage_model');
			$this->load->library('session');
		}

		function index() {
			redirect('patient/add_load');
		}

		function record() {
			$data['fragment'] = 'patient_record';
			$this->load->view('patient/base', $data);
		}

		function add_load() {
			$data['fragment'] = 'patient_add';
			$this->load->view('patient/base', $data);
		}

		function add_process() {
			$data = $this->input->post();
			$data['pasien_rt_rw'] = $this->input->post('pasien_rt') . '_' . $this->input->post('pasien_rw');
			unset($data['pasien_rt']);
			unset($data['pasien_rw']);
			$res = $this->manage_model->add_id('pasien', $data);
			$res = $this->manage_model->update('pasien', array('pasien_id' => $res), array('pasien_nrm' => sprintf("%06d", $res)));
			// print_r($this->input->post());
			// redirect('patient/record');
		}

	}
?>