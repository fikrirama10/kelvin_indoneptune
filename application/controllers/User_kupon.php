<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_kupon extends CI_Controller
{

		public function __construct()
	{
		parent::__construct();
		$this->load->model('Kupon_model');
		$this->load->library('form_validation');
	}
		
	public function index()
		{
			$data['title'] = 'Menu Departemen';
			$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();

			$data['depar'] = $this->db->get('departemen')->result_array();

			$this->load->view('tamplates/header', $data);
			$this->load->view('tamplates/sidebar', $data);
			$this->load->view('tamplates/topbar', $data);
			$this->load->view('kupon/departemen_index', $data);
			$this->load->view('tamplates/footer');
	
		}



	public function departemen_detail($id)
	{
		$data['title'] = 'Menu Departemen';
		$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
		
		$data['depar'] = $this->Kupon_model->getDepById($id);

		$this->load->model('kupon_model', 'shift');

		$data['kupon'] = $this->shift->getSubkupon($id);

		$data['jab'] = $this->db->get('jabatan')->result_array();
		$data['shift'] = $this->db->get('user_shift')->result_array();
		$data['dep'] = $this->db->get('departemen')->result_array();



		$this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar', $data);
		$this->load->view('tamplates/topbar', $data);
		$this->load->view('kupon/departemen_detail', $data);
		$this->load->view('tamplates/footer');
	}
	


	public function kupon($id)
	{
		$data['title'] = 'Input Kupon Pegawai';
		$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();

		$data['depar'] = $this->Kupon_model->getDepById($id);

		$this->load->model('kupon_model', 'shift');

		$data['kupon'] = $this->shift->getSubkupon($id);


		$data['shift'] = $this->db->get('user_shift')->result_array();
		$data['dep'] = $this->db->get('departemen')->result_array();
		$data['jab'] = $this->db->get('jabatan')->result_array();


		// $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('noinduk', 'Noinduk', 'required');
		$this->form_validation->set_rules('jabatan_id', 'Jabatan_id', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah',);
		$this->form_validation->set_rules('uang_kupon', 'Uang_kupon', 'required');

		$this->form_validation->set_rules('shift_id', 'Shift_id', 'required');
		$this->form_validation->set_rules('departemen_id', 'Departemen_id','required');
		
		// $this->form_validation->set_rules('petugas', 'Petugas', 'required');

		if($this->form_validation->run() == false) {
		$this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar', $data);
		$this->load->view('tamplates/topbar', $data);
		$this->load->view('kupon/departemen_detail', $data); 
		$this->load->view('tamplates/footer');
		
		}else {			
			$this->Kupon_model->tambahData();
		
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil di tambahkan !</div>');
			redirect('user_kupon/departemen_detail/'.$id);
		}
	

	}
		public function user_kupon_detail($id)
	{
		$data['title'] = 'Menu Departemen';
		$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
		
		$data['kupon'] = $this->Kupon_model->getKuponById($id);




		$this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar', $data);
		$this->load->view('tamplates/topbar', $data);
		$this->load->view('request/user_detail', $data);
		$this->load->view('tamplates/footer');
	}



	public function hapus($id)
	{
		$data['depar'] = $this->Kupon_model->getDepById($id);
		$this->Kupon_model->hapusData($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('user_kupon/kupon');
	}
	

}