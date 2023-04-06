<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kupon_model extends CI_model
{
					// TOO METHOD DEPARTEMEN
 	public function getDepById($id)
	{
			
		return $this->db->get_where('departemen',['id' => $id])->row_array();
	}
   	


 	public function getSubkupon($id)
 						// pilih tujuan tabel , kemudian pilih tabel dan menu yang akan di joinkan.
	{		         
			$query = "SELECT `user_kupon`.*,`user_shift`.`shift`,`departemen`.`menu`,`jabatan`.`namajabatan`
					FROM `user_kupon` 
					LEFT JOIN `user_shift` ON `user_shift`.`id` =`user_kupon`.`shift_id`
					LEFT JOIN `departemen` ON `departemen`.`id` =`user_kupon`.`departemen_id`
					LEFT JOIN `jabatan` ON `jabatan`.`id` =`user_kupon`.`jabatan_id`

					WHERE user_kupon.departemen_id=".$id; 

		return $this->db->query($query)->result_array($id);	
	}

	public function tambahData()
	{

	$data =[
		// 'tanggal' => $this->input->post('tanggal'),
		'nama' => $this->input->post('nama'),
		'noinduk' => $this->input->post('noinduk'),
		'jabatan_id' => $this->input->post('jabatan_id'),
		'jumlah' => $this->input->post('jumlah'),
		'uang_kupon' => $this->input->post('uang_kupon'),
		'shift_id' => $this->input->post('shift_id'),
		'departemen_id' => $this->input->post('departemen_id'),
	
		// 'petugas' => $this->input->post('petugas'),
	   ];

	  		

		$this->db->insert('user_kupon', $data);
	}


	public function getKuponById($id)
	{
			
		return $this->db->get_where('user_kupon',['id' => $id])->row_array();
	}

		public function ubahData()
	{
		$data = [
			"tanggal" => $this->input->post('tanggal', true), 
			"nama" => $this->input->post('nama', true), 
			"noinduk" => $this->input->post('noinduk', true), 
			"jabatan_id" => $this->input->post('jabatan_id', true), 
			"shift_id" => $this->input->post('shift_id', true), 
			"departemen_id" => $this->input->post('departemen_id', true),
			"jumlah" => $this->input->post('jumlah', true), 
			"petugas" => $this->input->post('petugas', true), 
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user_kupon', $data);
	}

	public function hapusData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_kupon');
	}




}	