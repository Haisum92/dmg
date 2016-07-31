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

}