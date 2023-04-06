<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Anggaran_model');
		// $this->load->model('Shift_model');
	}

		public function index()
		{
			$data['title'] = 'Anggaran Departemen';
			$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();

			$this->load->model('Anggaran_model', 'departemen');

			$data['anggaran'] = $this->departemen->getSubanggaran();
			$data['departemen'] = $this->db->get('departemen')->result_array();
			
			$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
			$this->form_validation->set_rules('departemen_id', 'Departemen', 'required');
			$this->form_validation->set_rules('grup', 'Grup', 'required');
			$this->form_validation->set_rules('nominal', 'Nominal', 'required');

			if($this->form_validation->run() == false) {
			$this->load->view('tamplates/header', $data);
			$this->load->view('tamplates/sidebar', $data);
			$this->load->view('tamplates/topbar', $data);
			$this->load->view('anggaran/index', $data);
			$this->load->view('tamplates/footer');
			} else {
				$this->Anggaran_model->tambahDataAnggaran();
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anggaran berhasil di tambahkan !</div>');
			redirect('admin/anggaran');
		}	}
}