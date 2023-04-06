 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class Validasi extends CI_Controller
{

		public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
			$this->load->model('Validasi_model');
	}
	public function index()
		{
			$data['title'] = 'Report Kupon pegawai';
			$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
			$this->load->model('Validasi_model', 'dep');

			$data['val'] = $this->dep->getSubval();
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
			$this->load->view('validasi/index', $data);
			$this->load->view('tamplates/footer',);
			} else {
				$this->Validasi_model->tambahDataval();
		
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil di tambahkan !</div>');
			redirect('validasi');
		
			}
		}


		public function validasi_kupon($id)
		{
			$data['title'] = 'Ubah Report';
			$data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
			$this->load->model('Validasi_model', 'dep');

			$data['validasi'] = $this->Validasi_model->getValById($id);

			$data['val'] = $this->dep->getSubval();
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
		    $this->form_validation->set_rules('cuti', 'Cuti',);
			$this->form_validation->set_rules('total_kupon', 'Total_kupon', 'required');
			$this->form_validation->set_rules('validasi_cek', 'Validasi_cek', );
			$this->form_validation->set_rules('pemeriksa', 'Pemeriksa', );


			if($this->form_validation->run() == false) {
			$this->load->view('tamplates/header', $data);
			$this->load->view('tamplates/sidebar', $data);
			$this->load->view('tamplates/topbar', $data);
			$this->load->view('validasi/ubah_validasi', $data);
			$this->load->view('tamplates/footer',);
			} else {
				$this->Validasi_model->ubahDataval();
		
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Melakukan Verifikasi !</div>');
			redirect('validasi');
			}
		}


		public function hapus_validasi($id)
		{
		$this->Validasi_model->hapusData($id);
		$this->session->set_flashdata('flash','Dihapus');
			redirect('validasi');
		}





}