<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model
{
	public function getSubMenu()
	// query untuk mendapatkan nama menu di submenu dengan menghubungkan antara user_sub_menu dengan user_menu
	{
		$query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
					FROM `user_sub_menu` JOIN `user_menu`
					ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
					"; 
		return $this->db->query($query)->result_array();	
	}

	public function tambahDataSub()
	{

	$data =[
		'title' => $this->input->post('title'),
		'menu_id' => $this->input->post('menu_id'),
		'url' => $this->input->post('url'),
		'icon' => $this->input->post('icon'),
		'is_active' => $this->input->post('is_active')
	   ];
		$this->db->insert('User_sub_menu', $data);
	}


	public function getsubMenuById($id)
	{
			
		return $this->db->get_where('user_sub_menu',['id' => $id])->row_array();
	}

	public function ubahsubData()
	{
		$data = [
			"title" => $this->input->post('title', true),
			"menu_id" => $this->input->post('menu_id', true),
			"url" => $this->input->post('url', true),
			"icon" => $this->input->post('icon', true),
			"is_active" => $this->input->post('is_active', true),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user_sub_menu', $data);
	}



	public function getMenuById($id)
	{
			
		return $this->db->get_where('user_menu',['id' => $id])->row_array();
	}
	
	public function ubahData()
	{
		$data = [
			"menu" => $this->input->post('menu', true), 
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user_menu', $data);
	}

	public function hapusData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_menu');
	}
}