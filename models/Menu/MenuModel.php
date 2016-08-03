<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MenuModel extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->config->load('dbconfig');
	}

	public function add_menu()
	{
		// echo hash('sha224','admin123'.dmgSalt);
		$db_menus  = $this->config->item('db_menus');
		$col_arr   = $vals = $area_detail = array();
		$insert_id = "";
		
		$col_arr = array('title','status','added_by','date_added');

		foreach ($col_arr as $key => $col)
		{
			if ($col == 'date_added' ) {
				
				$vals[] = 'NOW()';

			}elseif ($col == 'added_by' ){

				$cur_user_detail = $this->session->userdata('user_details');
				$vals[] = $cur_user_detail->u_id;

			}else{
				$vals[] =  ( !empty($this->input->post($col)) ) ? "'".$this->input->post($col)."'" : "";
			}
		}

		$col_arr = implode(',',$col_arr);
		$vals    = implode(',',$vals);

		$ins_query = "INSERT INTO $db_menus ($col_arr) VALUES ($vals) ";;
		$q_result  = $this->db->query($ins_query);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	
	}

	public function edit_menu($menu_id)
	{
		$db_menus = $this->config->item('db_menus');
		
		$title = $this->input->post('title');
		$area_id = $this->input->post('a_id');
		$status = $this->input->post('status');
		$cur_user_detail = $this->session->userdata('user_details');
		$u_id = $cur_user_detail->u_id;

		$edit_query = "UPDATE $db_menus SET 
						title = '$title', 
						status = '$status' 
						WHERE m_id = '$menu_id'
						";
		
		$update_rows  = $this->db->query($edit_query);
		
		return $update_rows;
	}

}