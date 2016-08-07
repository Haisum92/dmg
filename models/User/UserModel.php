<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->config->load('dbconfig');
	}

	public function add_user()
	{
		// echo hash('sha224','admin123'.dmgSalt);
		$db_users = $this->config->item('db_users');
		$col_arr = $vals = $user_detail = array();
		$insert_id = "";
		
		$col_arr = array('full_name','email','password','d_security','contact_no','gender','role','date_added','status','added_by');

		foreach ($col_arr as $key => $col)
		{
			if ($col == 'date_added' ) {
				
				$vals[] = 'NOW()';

			}elseif ($col == 'added_by' ){

				$cur_user_detail = $this->session->userdata('user_details');
				$vals[] = $cur_user_detail->u_id;

			}elseif ($col == 'password' ){

				$vals[] = "'".hash('sha224',$this->input->post($col).dmgSalt)."'";

			}elseif ($col == 'd_security' ){

				$vals[] = "'".$this->input->post('password')."'";

			}else{
				$vals[] =  ( !empty($this->input->post($col)) ) ? "'".$this->input->post($col)."'" : "";
			}
		}

		$col_arr = implode(',',$col_arr);
		$vals    = implode(',',$vals);

		$ins_query = "INSERT INTO $db_users ($col_arr) VALUES ($vals) ";;
		$q_result  = $this->db->query($ins_query);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	
	}

	public function edit_user($user_id)
	{
		$db_users = $this->config->item('db_users');
		$col_arr = $vals = array();
		
		$col_arr = array('full_name', 'contact_no','gender','role','status');
		if (!empty($this->input->post('password'))) {
			$col_arr[] = 'password';
			$col_arr[] = 'd_security';
		}
		foreach ($col_arr as $key => $col)
		{
			if ($col == 'password' ){

				$vals[] = "'".hash('sha224',$this->input->post($col).dmgSalt)."'";

			}elseif ($col == 'd_security' ){

				$vals[] = "'".$this->input->post('password')."'";

			}else{
				$vals[] =  ( !empty($this->input->post($col)) ) ? "'".$this->input->post($col)."'" : "";
			}
		}

		$edit_query = "UPDATE $db_users SET  ";
		for ($i=0; $i < count($col_arr); $i++) { 
			$edit_query .= "$col_arr[$i] = $vals[$i], ";
		}
		$edit_query = substr($edit_query, 0, -2);
		$edit_query .= " WHERE u_id = '". $user_id ."'" . ";";
		$update_rows  = $this->db->query($edit_query);
		return $update_rows;
	
	}

	public function delete_user()
	{
		if (!isset($this->user_id) OR empty($this->user_id)) {
			return false;
		}

		$result           = "";
		$db_users         = $this->config->item('db_users');
		$db_login_details = $this->config->item('db_login_details');

		$this->db->delete($db_users, array('u_id' => $this->user_id));
		$this->db->delete($db_login_details, array('u_id' => $this->user_id));

		if ($this->db->affected_rows() >= 0) {
			return true;
		}
		return false;
		/*$query = "DELETE FROM $db_users WHERE u_id = ".$this->user_id.";
				  DELETE FROM $db_login_details WHERE u_id = ".$this->user_id."; ";

		$result = $this->db->query($query);

		$query = "DELETE FROM $db_users WHERE u_id = ".$this->user_id.";
				  DELETE FROM $db_login_details WHERE u_id = ".$this->user_id."; ";

		$result = $this->db->query($query);

		if ($result)
			return true;

		return false;
		*/
	
	}

}