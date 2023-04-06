<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	// pengecekan user sebelum masuk ke halaman admin
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Admin_model');
		// $this->load->model('Shift_model');
	}


	public function index()
	{
		$data['title'] = 'Report Kupon pegawai';
			$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
			
			$this->load->model('Admin_model', 'shift');
			$data['val'] = $this->shift->getSubval();
			
		if ($this->input->post('keyword')) {
			$data['val'] = $this->Admin_model->cariData();
			}
			$data['dep'] = $this->db->get('departemen')->result_array();
			$data['shift'] = $this->db->get('user_shift')->result_array();
			
			

			$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
			$this->form_validation->set_rules('departemen_id', 'Departemen_id', 'required');
			$this->form_validation->set_rules('shift_id', 'Shift_id', 'required');
			$this->form_validation->set_rules('total_pegawai', 'Total_pegawai', 'required');
			$this->form_validation->set_rules('absen', 'Absen', 'required');
			$this->form_validation->set_rules('total_kupon', 'Total_kupon', 'required');
			$this->form_validation->set_rules('validasi_cek', 'Validasi_cek', );
			$this->form_validation->set_rules('pemeriksa', 'Pemeriksa', );
			if($this->form_validation->run() == false) {
			$this->load->view('tamplates/header', $data);
			$this->load->view('tamplates/sidebar', $data);
			$this->load->view('tamplates/topbar', $data);
			$this->load->view('admin/index', $data);
			$this->load->view('tamplates/footer',);
			} else {
				$this->Validasi_model->tambahDataval();
		
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil di tambahkan !</div>');
			redirect('validasi');
		
			}
			
	}
	public function info_detail($id)
	{
		$data['title'] = 'Report Kupon pegawai';
			$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
			
			$data['val'] = $this->Admin_model->getDepByIdval($id);


			$this->load->view('tamplates/header', $data);
			$this->load->view('tamplates/sidebar', $data);
			$this->load->view('tamplates/topbar', $data);
			$this->load->view('admin/info_detail', $data);
			$this->load->view('tamplates/footer',);				
	}


		public function cetak_kupon()
		{
			$data['title'] = 'Report Kupon pegawai';
			$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
			$this->load->model('Validasi_model', 'dep');

			$data['val'] = $this->dep->getSubval();
			$data['dep'] = $this->db->get('departemen')->result_array();
			$data['shift'] = $this->db->get('user_shift')->result_array();;

			$this->load->view('tamplates/header', $data);
			// $this->load->view('tamplates/sidebar', $data);
			// $this->load->view('tamplates/topbar', $data);
			$this->load->view('admin/cetak', $data);
			// $this->load->view('tamplates/footer',);
			
		
		}


	public function role()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Role';

		$data['role'] = $this->db->get('user_role')->result_array();

		// Update/menambahkan data role_id

		$this->form_validation->set_rules('role', 'Role', 'required');

		// validasi form add menu yang dikirimkan dari form index di foolder view/menu
		// form validation disimpan autoload.php di folder config
		if ($this->form_validation->run() == false) {
			$this->load->view('tamplates/header', $data);
			$this->load->view('tamplates/sidebar', $data);
			$this->load->view('tamplates/topbar', $data);
			$this->load->view('admin/role', $data);
			$this->load->view('tamplates/footer');
		} else {
			// jika berhasil masukan data inputan yang dikirimkan dari folder menu/indek.php [menu] ke table 'user_menu'
			$this->db->insert('user_role', ['role' => $this->input->post('role')]);
			// memunculkan tanda berhasil registrasi 
			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil di tambahkan !</div>');
			redirect('admin/role');
		}
	}

	public function roleaccess($role_id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Role access';
		// query cari id di data base user_role dan tampilkan id tersebut
		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

		// terkecuali id yang ke 1 di  db user_menu tidak di tampilkan (admin)
		$this->db->where('id !=', 1);
		// memanggil data base menu
		$data['menu'] = $this->db->get('user_menu')->result_array();


		$this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar', $data);
		$this->load->view('tamplates/topbar', $data);
		$this->load->view('admin/role-access', $data);
		$this->load->view('tamplates/footer');
	}


	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('user_access_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu', $data);
		} else {
			$this->db->delete('user_access_menu', $data);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">access berhasil!</div>');

		// memanggil flashdata
		 // <?= $this->session->flashdata('message'); 
	}	


	public function pengguna ()
	{
	
		$data['title'] = 'Anggota Pengguna';
		$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
		$data['use'] = $this->Admin_model->getAlluser();

		$this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar', $data);
		$this->load->view('tamplates/topbar', $data);
		$this->load->view('admin/index_pengguna', $data);
		$this->load->view('tamplates/footer');
	}

	public function pengguna_detail ($id)
	{
	
		$data['title'] = 'Anggota Pengguna';
		$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
		
		$data['use'] = $this->Admin_model->getUserById($id);

		$this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar', $data);
		$this->load->view('tamplates/topbar', $data);
		$this->load->view('admin/detail_pengguna', $data);
		$this->load->view('tamplates/footer');
	}

}
