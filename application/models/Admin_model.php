<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_model
{

    public function cariData()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('tanggal', $keyword);

        return $this->db->get('validasi')->result_array();
    }
      

    public function getDepByIdval($id)
    {
            
        return $this->db->get_where('validasi',['id' => $id])->row_array();
    }

    public function getSubval()       
    {
                   
   $query = "SELECT `validasi`.*,`departemen`.`menu`,`user_shift`.`shift`
            FROM `validasi` 
            LEFT JOIN `departemen` 
            ON `validasi`.`departemen_id`= `departemen`.`id` 
            LEFT JOIN `user_shift`
             ON `validasi`.`shift_id` = `user_shift`.`id` 
            "; 

        return $this->db->query($query)->result_array();    
    }



                                                             // TOO METHOD USER_SHIFT

     public function tambahDatashift()
    {

    $data =[
        'shift' => $this->input->post('shift'),
        'harga' => $this->input->post('harga')
       ];
        $this->db->insert('user_shift', $data);
    }

    public function getShiftById($id)
    {
            
        return $this->db->get_where('user_shift',['id' => $id])->row_array();
    }

    public function ubahDatashift()
    {
        $data = [
            "shift" => $this->input->post('shift', true), 
            "harga" => $this->input->post('harga', true), 
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_shift', $data);
    
    }

     public function hapusDatashift($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_shift');
    }



                                                                // ANGGARAN
        public function getDepById($id)
    {
            
        return $this->db->get_where('departemen',['id' => $id])->row_array();
    }
    
 

    public function cariDataanggaran()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('tanggal', $keyword);

        return $this->db->get('user_kupon')->result_array();
    }

    public function getSubanggaran()       
    {
                   
$query = "SELECT `anggaran`.*, `departemen`.`menu`
                    FROM `anggaran`
                    LEFT JOIN `departemen` ON `departemen`.`id`= `anggaran`.`departemen_id` 
                    "; 
        return $this->db->query($query)->result_array();    
    }


    public function getSubkupon()
                        // pilih tujuan tabel , kemudian pilih tabel dan menu yang akan di joinkan.
    {                
            $query = "SELECT `user_kupon`.*,`user_shift`.`shift`,`departemen`.`menu`
                    FROM `user_kupon` 
                    LEFT JOIN `user_shift` ON `user_shift`.`id` =`user_kupon`.`shift_id`
                    LEFT JOIN `departemen` ON `departemen`.`id` =`user_kupon`.`departemen_id`
                    "; 

        return $this->db->query($query)->result_array(); 
    }

 public function tambahDataAnggaran()
    {

    $data =[
        'tanggal' => $this->input->post('tanggal'),
        'departemen_id' => $this->input->post('departemen_id'),
        'nominal' => $this->input->post('nominal'),
       ];
        $this->db->insert('anggaran', $data);
    }




                                                        //  TO METHOD USSER

    public function getAlluser() 
    {
        return $this->db->get('user')->result_array();
    }

        public function getUserById($id)
    {
            
        return $this->db->get_where('user',['id' => $id])->row_array();
    }

 }