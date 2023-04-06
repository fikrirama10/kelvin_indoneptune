<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		// memanggil method constructor yang ada di ci controller
		// daftarkan form_validitadion di autoload di folder config
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()

	{
		// pegecekan userdata berupa email ketika sudah login tidak bisa keluar melalui controller dan di kembalikan berdasarkan user yang terdaftar di db
		if ($this->session->userdata('email')) {
			redirect('user');
		}

		// mengecek apakah nama email sudah terdaftar di db ??
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		// mengecek apakah password sudah benear dan ada di db ?
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		// kondisi validsi login yang salah
		if ($this->form_validation->run() == false) {
			// mebuat judul form panggil di view/header.php <title>  </title>
			$data['title'] = 'Login Pengguna';
			// memanggil halaman header view di folder tamplates yang bernama auth_header
			$this->load->view('tamplates/auth_header', $data);
			// memanngil halaman login di folder view buka lagi foler auth dan memanggil login.php
			$this->load->view('auth/login');
			// memanggil halaman header view di folder tamplates yang bernama auth_footer
			$this->load->view('tamplates/auth_footer');
		} else {
			// ketika login nya lolos
			$this->_login();
		}
	}
	private function _login()
	{
		// apakah inputan yang dikirmkan email ada di DB ?
		$email = $this->input->post('email');
		// apakah inputan yang dikirmkan password ada di DB ?
		$password = $this->input->post('password');

		// query ke data base ,cari db user yang parameternya email apakah sama dengan yang dikirimkan,?
		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		// cek  Email dan pasword nya terdaftar tidak  di db user
		if ($user) {
			// jika terdatar cek lagi aktif ga akun tersebut
			if ($user['is_active'] == 1) {
				// klo aktive cek paswordnya sama tidak dengan pasword yang  ada di table user
				if (password_verify($password, $user['password'])) {
					// jika password benaar 
					$data = [
						'id' => $user['id'],
						'email' => $user['email'],
						// role-id untuk membedakan akun user dan admin
						'role_id' => $user['role_id']
					];

					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('admin');
					} else if ($user ['role_id'] ==12) {
						redirect('validasi');
					} else if ($user ['role_id'] ==3) {
						redirect('user_kupon/departemen_detail/43');
					}else {
						redirect('user');
					}

				} else {

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">password yang anda masukan salah !</div>');
					redirect('auth');
				}

			} else {

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">akun yang anada minta sudah tidak aktive !</div>');
				redirect('auth');
			}

			// jika tidak ada dalam db user
		} else {
			// memunculkan tanda berhasil registrasi pada login .di panggil di folder auth/login.php
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email dan password tidak terdafftar !</div>');
			redirect('auth');
		}
	}


	// contorller registrasi 
	public function registration()
	{

		// pegecekan userdata berupa email ketika sudah login tidak bisa keluar melalui controller dan di kembalikan berdasarkan user yang terdaftar di db
		if ($this->session->userdata('email')) {
			redirect('user');
		}

		// membuat validasi untuk form name
		$this->form_validation->set_rules('name', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('bagian', 'Bagian', 'required|trim');
		$this->form_validation->set_rules('jabatan', 'Jabatan', '');
		$this->form_validation->set_rules('departemen', 'departemen', '');

		// nama email harus berbeda dengan email yang sudah ada di dalam db dengan pengecekan is_unique[nama DB,nama email]
		$this->form_validation->set_rules(
			'email','Email','required|trim|valid_email|is_unique[user.email]',

			[
				'is_unique' => 'nama email sudah terpakai oleh akun lain !'
			]
		);
		// validasi untuk password 1 dan 2 di satukan
		$this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'password harus sama !',
			'min_lenght' => 'password kurang dari 3 karakter !'
		]);
		// validasi untuk password 2 dan 1 di satukan
		$this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');


		// jka validasi regis salah maka tampilkan kembali ke awal
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Halaman registration';
			// memanggil halaman header view di folder tamplates yang bernama auth_header
			$this->load->view('tamplates/auth_header', $data);
			// memanngil halaman login di folder view buka lagi foler auth dan memanggil registration.php
			$this->load->view('auth/registration_index');
			// memanggil halaman header view di folder tamplates yang bernama auth_footer
			$this->load->view('tamplates/auth_footer');
		} else {

			// ketika pembuatan regis lolos dari validasi maka akan di arahkan ke perintah ini
			$data = [
				// data akan di siapkan
				'name' => htmlspecialchars($this->input->post('name', true)),
				'nik' => htmlspecialchars($this->input->post('nik', true)),
				'bagian' => htmlspecialchars($this->input->post('bagian', true)),
				'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
				'departemen' => htmlspecialchars($this->input->post('bagian', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];
			// dan di sipan di table user
			$this->db->insert('user', $data);



			// memunculkan tanda berhasil registrasi pada login .di panggil di folder auth/login.php
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat anda telah berhasil mendaftar,silahkan login !</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">anda berhasil Logout dari aplikasi !</div>');
		redirect('auth');
	}


	public function blocked()
	{
		$this->load->view('auth/blocked');
	}
}
