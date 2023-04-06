<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Anggaran_model extends CI_model
{

    public function getSubanggaran()       
    {
                   
$query = "SELECT `anggaran`.*, `departemen`.`menu`
                    FROM `anggaran`
                    LEFT JOIN `departemen` ON `departemen`.`id`= `anggaran`.`departemen_id` 
                    "; 
        return $this->db->query($query)->result_array();    
    }

      public function tambahDataanggaran()
    {

    $data =[
        'tanggal' => $this->input->post('tanggal'),
        'departemen_id' => $this->input->post('departemen_id'),
        'grup' => $this->input->post('grup'),
        'nominal' => $this->input->post('nominal'),
       ];
        $this->db->insert('anggaran', $data);
    }
}