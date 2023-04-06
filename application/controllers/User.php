<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	// pengecekan uidentitas user sebelum masuk ke halaman auser
	public function __construct()
	{
		parent::__construct();
		// pengecekan login supaya user tidak sembarang masuk ke controller lain
		// terhubung dengan wpu_helper.php yang berada di folder helpers
		is_logged_in();
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'My profile';

		$this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar', $data);
		$this->load->view('tamplates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('tamplates/footer',);
	}

	public function edit()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edite Profile';

		$this->form_validation->set_rules('name', 'full name', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('tamplates/header', $data);
			$this->load->view('tamplates/sidebar', $data);
			$this->load->view('tamplates/topbar', $data);
			$this->load->view('tamplates/logo');
			$this->load->view('user/edit', $data);
			$this->load->view('tamplates/footer',);
		} else {
			// di inputkan dari form name
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			// cek jika ada gambar yang akan di upload
			$currect_user = $this->db->where('id', $this->session->userdata('id'))->get('user')->first_row();
			$file_name = str_replace('.', '', $currect_user->id);

			$config['upload_path']          = FCPATH . '/assets/img/profile';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']            = $file_name;
			$config['overwrite']            = true; // tindih file dengan file baru
			$config['max_size']             = 1024; // batas ukuran file: 1MB
			$config['max_width']            = 1080; // batas lebar gambar dalam piksel
			$config['max_height']           = 1080; // batas tinggi gambar dalam piksel

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('uploaded_image')) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
				redirect('user/edit');
			} else {
				$uploaded_data = $this->upload->data();

				$update = array(
					'name' => $name,
					'email' => $email,
					'image' => $uploaded_data['file_name']
				);
			}

			$this->db->where('email', $email);
			$this->db->update('user', $update);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat anda telah berhasil  !</div>');
			redirect('user');
		}
	}


	public function changePassword()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Change password';

		// CEK VALIDASI CANGAE PASSWORD
		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		// VALIDASI UNTUK PASWORD1
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
		// VALIDASI UNTUK PASSWORD2
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('tamplates/header', $data);
			$this->load->view('tamplates/sidebar', $data);
			$this->load->view('tamplates/topbar', $data);
			$this->load->view('user/changepassword', $data);
			$this->load->view('tamplates/footer');
		} else {
			// cek kembali password yang di pakai sama tidak dengan yang di inputkan dengan db
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			// jika salah tampilkan alert kesalahan
			if (!password_verify($current_password, $data['user']['password'])) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">mohon maaf pasword yang di pakai salah !</div>');
				redirect('user/changepassword');
			} else {
				// jika pasword baru dengan yang lama sama isi nya maka tampilkan kesalahan
				if ($current_password == $new_password) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">password baru tidak boleh sama dengan pasword lama !</div>');
					redirect('user/changepassword');
				} else {
					// ketika password sudah OK!
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">password sudah di ganti   !</div>');
					redirect('user/index');
				}
			}
		}
	}
}
