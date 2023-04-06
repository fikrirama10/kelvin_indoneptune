<?php 

// daftarkan helper yang sudah di buat keu autoload.php yang ada di folder config
// di bagian helper

function is_logged_in()
{
	// $this di ganti dengangan get_instance()
	// pengecekan login supaya user tidak sembarang masuk ke controller lain
	$ci = get_instance();
	if (!$ci->session->userdata('email')) {
		redirect('auth');
	} else {
		$role_id = $ci->session->userdata('role_id');
		$menu = $ci->uri->segment(1);

		$queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
		$menu_id = $queryMenu['id'];

		$userAccess = $ci->db->get_where('user_access_menu', [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		]);

		if ($userAccess->num_rows() < 1) {
			redirect('auth/blocked');
		}
	}

}

// pengecekan hak akses role id antara user dan admin

function check_access($role_id, $menu_id)
{
	$ci = get_instance();
	// cari di data base user_role berdasarkan id
	$ci->db->where('role_id', $role_id);
	// cari di data base menu_user berdasarkan id
	$ci->db->where('menu_id', $menu_id);
	// cek kecocokan berdasarkan id role dan id menu di db user_access_menu
	$result = $ci->db->get('user_access_menu');

	if ($result->num_rows() > 0) {
		return "checked='checked'";
	}
}