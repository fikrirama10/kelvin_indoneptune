<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Request_model extends CI_model
{

	public function getDepById($id)
	{
			
		return $this->db->get_where('departemen',['id' => $id])->row_array();
	}

	public function getSubreq()
 				
	{		         
	$query = "SELECT `validasi`.*,`departemen`.`menu`,`user_shift`.`shift`
			FROM `validasi` 
			LEFT JOIN `departemen` 
			ON `validasi`.`departemen_id` = `departemen`.`id`
			LEFT JOIN `user_shift` 
			ON  `validasi`.`shift_id` = `user_shift`.`id`
		";

		return $this->db->query($query)->result_array();	
	}



	 public function tambahDatareq()
    {

    $data =[
        'tanggal' => $this->input->post('tanggal'),
        'departemen_id' => $this->input->post('departemen_id'),
        'shift_id' => $this->input->post('shift_id'),
        'total_pegawai' => $this->input->post('total_pegawai'),
        'absen' => $this->input->post('absen'),
        'alfa' => $this->input->post('alfa'),
        'sakit' => $this->input->post('sakit'),
        'izin' => $this->input->post('izin'),
        'cuti' => $this->input->post('cuti'),
       'total_kupon' => $this->input->post('total_kupon'),
       ];
        $this->db->insert('validasi', $data);
    }

    	public function getDepByIdval($id)
	{
			
		return $this->db->get_where('validasi',['id' => $id])->row_array();
	}
}