<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Validasi_model extends CI_model
{

	public function getSubval()
 						// pilih tujuan tabel , kemudian pilih tabel dan menu yang akan di joinkan.
	{		         
	$query = "SELECT `validasi`.*,`departemen`.`menu`,`user_shift`.`shift`
			FROM `validasi` 
			LEFT JOIN `departemen` ON `departemen`.`id` = `validasi`.`departemen_id`
			LEFT JOIN `user_shift` ON `user_shift`.`id` =`validasi`.`shift_id`
			"; 

		return $this->db->query($query)->result_array();	
	}


	 public function tambahDataval()
    {

    $data =[
        'tanggal' => $this->input->post('tanggal'),
        'departemen_id' => $this->input->post('departemen_id'),
        'shift_id' => $this->input->post('shift_id'),
        'total_pegawai' => $this->input->post('total_pegawai'),
        'absen' => $this->input->post('absen'),
        'absen' => $this->input->post('absen'),
        'alfa' => $this->input->post('alfa'),
        'sakit' => $this->input->post('sakit'),
        'izin' => $this->input->post('izin'),
        'cuti' => $this->input->post('cuti'),
       'total_kupon' => $this->input->post('total_kupon'),
       'validasi_cek' => $this->input->post('validasi'),
       'pemeriksa' => $this->input->post('pemeriksa')
       ];
        $this->db->insert('validasi', $data);
    }





     	public function getValById($id)
	{
			
		return $this->db->get_where('validasi',['id' => $id])->row_array();
	}




    public function ubahDataval()
	{
		$data = [
			"tanggal" => $this->input->post('tanggal', true),
			"departemen_id" => $this->input->post('departemen_id', true),
			"shift_id" => $this->input->post('shift_id', true),
			"total_pegawai" => $this->input->post('total_pegawai', true),
			"absen" => $this->input->post('absen', true),
			"total_kupon" => $this->input->post('total_kupon', true),
			"validasi_cek" => $this->input->post('validasi_cek', true),
			"pemeriksa" => $this->input->post('pemeriksa', true),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('validasi', $data);
	}



	public function hapusData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('validasi');
	}


	
}