<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->config->load('dbconfig');
		$this->load->model('UserLibrary');
	}

	public function login()
	{
		// loading database table
		$db_users = $this->config->item('db_users');
		
		$sql = "SELECT * FROM ".$db_users." WHERE email = ? AND password= ? ORDER BY NULL LIMIT 1";
		$result = $this->db->query($sql, array($this->input->post('email'), $this->input->post('password')));

		if( $result->num_rows() == 1 )
		{	
			$result = $result->result();
			$result = $result[0];
			
			$u_obj = new STDClass;
			$u_obj->u_id = $result->u_id;

			if ($this->__maintainig_session($u_obj)) 
			{
				$p_obj = new STDClass;
				$p_obj->role = $result->role;

				$result->priv = (object) $this->UserLibrary->get_priviliges($p_obj);
				
				return $result;

			}else{

				return NULL;
			}		
		}
		else{
			return NULL;
		}
	
	}// end function login

	private function __maintainig_session($u_obj)
	{
		$db_login_details = $this->config->item('db_login_details');
		$col_arr = $vals = $log_detail = array();
		
		$col_arr = array('u_id','login_time','logout_time','user_agent','ip','added_date');

		foreach ($col_arr as $key => $col)
		{
			if ($col == 'login_time' OR $col == 'added_date')
			{
				$vals[] = 'NOW()';

			}elseif ($col == 'ip') 
			{
				
				$vals[] = ($_SERVER['SERVER_ADDR'] == '::1' ? "INET_ATON('127.0.0.1')" : "INET_ATON(".$_SERVER['SERVER_ADDR'].")");

			}elseif ($col == 'logout_time') {
				
				$vals[] = "''";

			}elseif ($col == 'user_agent'){

				$vals[] = "'".$_SERVER['HTTP_USER_AGENT']."'";				

			}elseif ($col == 'u_id'){
				$vals[] = $u_obj->u_id;
			}
		}

		$col_arr = implode(',',$col_arr);
		$vals    = implode(',',$vals);

		$ins_query    = "INSERT INTO $db_login_details ($col_arr) VALUES ($vals) ";;
		$login_result = $this->db->query($ins_query);
		$log_id       = $this->db->insert_id();

		$l_obj = new STDClass;
		$l_obj->log_id = $log_id;
		$log_detail = $this->UserLibrary->get_user_logs($l_obj);
		
		if ($log_detail)
			$this->session->set_userdata('log_details',$log_detail[0]);

		return $login_result;
	
	}

	public function log_session_destroy()
	{
		// loading database table
		$db_login_details = $this->config->item('db_login_details');
		$log_result = "";
		$log_details = $this->session->userdata('log_details');

		$query = "UPDATE $db_login_details SET logout_time = NOW() WHERE l_id = ".$log_details->l_id." ";
		$log_result = $this->db->query($query);

		return $log_result;
	
	}
}