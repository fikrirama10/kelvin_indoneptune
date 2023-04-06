<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request extends CI_Controller
{

		public function __construct()
	{
		parent::__construct();
		$this->load->model('Request_model');
		$this->load->library('form_validation');
	}


	public function index()
		{
			$data['title'] = 'Request Kupon pegawai';
			$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
			$this->load->model('Request_model', 'dep');

			$data['val'] = $this->dep->getSubreq();
			$data['dep'] = $this->db->get('departemen')->result_array();
			$data['shift'] = $this->db->get('user_shift')->result_array();

			$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
			$this->form_validation->set_rules('departemen_id', 'Departemen_id', 'required');
			$this->form_validation->set_rules('shift_id', 'Shift_id', 'required');
			$this->form_validation->set_rules('total_pegawai', 'Total_pegawai', 'required');
			$this->form_validation->set_rules('absen', 'Absen', 'required');
			$this->form_validation->set_rules('alfa', 'Alfa', 'required');
		    $this->form_validation->set_rules('sakit', 'Sakit', 'required');
		    $this->form_validation->set_rules('izin', 'Izin', 'required');
		    $this->form_validation->set_rules('cuti', 'Cuti', 'required');
			$this->form_validation->set_rules('total_kupon', 'Total_kupon', 'required');
			$this->form_validation->set_rules('validasi_cek', 'Validasi_cek', );
			// $this->form_validation->set_rules('pemeriksa', 'Pemeriksa', );

			if($this->form_validation->run() == false) {
			$this->load->view('tamplates/header', $data);
			$this->load->view('tamplates/sidebar', $data);
			$this->load->view('tamplates/topbar', $data);
			$this->load->view('request/index_request', $data);
			$this->load->view('tamplates/footer',);
			}else {
				$this->Request_model->tambahDatareq();
		
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil di tambahkan !</div>');
			redirect('request');
			}
		}

		public function request_kupon_detail($id)
	{
		$data['title'] = 'Menu Departemen';
		$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
		
		$data['val'] = $this->Request_model->getDepByIdval($id);


		$this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar', $data);
		$this->load->view('tamplates/topbar', $data);
		$this->load->view('request/request_detail', $data);
		$this->load->view('tamplates/footer');
	}

}