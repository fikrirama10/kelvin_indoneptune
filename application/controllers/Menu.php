 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{ 
			// pengecekan uidentitas user sebelum masuk ke halaman menu
	public function __construct()
	{
		parent::__construct();
		// pengecekan login supaya user tidak sembarang masuk ke controller lain
		// terhubung dengan wpu_helper.php yang berada di folder helpers
		$this->load->model('Menu_model');
		is_logged_in();
	}

	public function index()
		{
			$data['title'] = 'Menu Management';
			$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();


			$data['menu'] = $this->db->get('user_menu')->result_array();

			$this->form_validation->set_rules('menu', 'Menu', 'required');


			if($this->form_validation->run() == false) {
			$this->load->view('tamplates/header', $data);
			$this->load->view('tamplates/sidebar', $data);
			$this->load->view('tamplates/topbar', $data);
			$this->load->view('menu/index', $data);
			$this->load->view('tamplates/footer',);
			} else {
				$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
		
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil di tambahkan !</div>');
			redirect('menu');
		
			}
		}

	public function ubah ($id)
	{

		$data['title'] = ' Ubah Menu Management';
			$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();

	
		$data['user_menu'] = $this->Menu_model->getMenuById($id);

	
		$this->form_validation->set_rules('menu', 'Menu', 'required');


		if($this->form_validation->run() == false) {
		$this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar', $data);
		$this->load->view('tamplates/topbar', $data);
		$this->load->view('menu/ubah_menu', $data);
		$this->load->view('tamplates/footer',);
		} else {
	
			$this->Menu_model->ubahData();
				// memunculkan tanda berhasil  
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil di ubah !</div>');
			redirect('menu'); 
		}

	}

	public function hapus($id)
	{
		$this->Menu_model->hapusData($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('menu');
	}

	public function submenu()
	{
		$data['title'] = 'SubMenu Management';
		$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
		$this->load->model('menu_model', 'menu');

		

		$data['subMenu'] = $this->menu->getSubmenu();
		$data['menu'] = $this->db->get('user_menu')->result_array();
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'Url', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');

		// validasi pembuatan sub_emenu baru
		if($this->form_validation->run() == false) {
			$this->load->view('tamplates/header', $data);
			$this->load->view('tamplates/sidebar', $data);
			$this->load->view('tamplates/topbar', $data);
			$this->load->view('menu/submenu', $data);
			$this->load->view('tamplates/footer',);
			} else {
				$this->Menu_model->tambahDataSub();
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil di tambahkan !</div>');
			redirect('menu/submenu');
		

			}
	}


	public function ubahsub($id)
	{
		$data['title'] ='Ubah SubMenu Management';
		$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();


		$data['user_sub_menu'] = $this->Menu_model->getsubMenuById($id);

	
		$this->form_validation->set_rules('menu', 'Menu', 'required');


		if($this->form_validation->run() == false) {
		$this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar', $data);
		$this->load->view('tamplates/topbar', $data);
		$this->load->view('menu/ubah_sub_menu', $data);
		$this->load->view('tamplates/footer',);
		} else {
	
			$this->Menu_model->ubahsubData();

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil di ubah !</div>');
			redirect('menu/submenu'); 
		}

	}
}