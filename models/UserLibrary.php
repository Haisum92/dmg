<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserLibrary extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->config->load('dbconfig');
	}

	public function get_all($params)
	{
		// echo '<pre>';print_r($params);echo '</pre>';
		// loading database table
		$db_users = $this->config->item('db_users');
		$condition = $join = $custom_select =  array();
		$order_by = "";

		$start = (isset($params->start) && !empty($params->start) ? $params->start : 0);
		$end = (isset($params->end) && !empty($params->end) ? $params->end : 20);

		if (isset($params->user_id))
			$condition[] = "u.u_id = ".@mysql_real_escape_string($params->user_id);

		if (isset($params->email))
			$condition[] = "u.email = ".@mysql_real_escape_string($params->email);

		if (isset($params->role))
			$condition[] = "u.role = ".@mysql_real_escape_string($params->role);

		if (isset($params->contact))
			$condition[] = "u.contact_no LIKE ".'%'.@mysql_real_escape_string($params->contact).'%';

		if (isset($params->status))
			$condition[] = @mysql_real_escape_string($params->status);

		if (isset($params->load)){
			if (in_array('added_by',  array('added_by'))) {
				$join[] = "INNER JOIN $db_users AS u1 ON u1.u_id = u.added_by ";
				$custom_select[] = "u1.full_name AS add_by";
			}			
		}

		if (isset($params->added_by)){
			$condition[] = @mysql_real_escape_string($params->added_by);
		}

		if (isset($params->date_added)){
			$datetime = (ctype_digit($params->date_added) ? $params->log_date : date("Y-m-d H:i:s",strtotime($params->date_added)) );
			$condition[] = "u.date_added >= $datetime";
		}

		if (isset($params->order_by))
			$order_by = "ORDER BY ".@mysql_real_escape_string($params->order_by);

		$condition[] = "u.role != 'superadmin'";

		if (count($condition))
			$condition = ' WHERE '.implode(" AND ", $condition);
		else
			$condition = '';

		if (count($join))
			$join = implode(" ", $join);
		else
			$join = '';

		if (count($custom_select))
			$custom_select = ','.implode(",", $custom_select);
		else
			$custom_select = '';
		

		$sql = "SELECT u.* $custom_select FROM ".$db_users." AS u $join $condition $order_by LIMIT $start,$end";
		$result = $this->db->query($sql);

		if( $result->num_rows() > 0 )
			return $result->result();			
		else
			return NULL;
	
	}// end function login

	public function get_priviliges($params)
	{
		/*$db = (array)get_instance()->db;
		echo '<pre>';print_r($db);echo '</pre>';
		die('yoho!');*/
		$db_user_privileges = $this->config->item('db_user_privileges');
		$priv_details = $condition = array();

		$start = (isset($params->start) && !empty($params->start) ? $params->start : 0);
		$end = (isset($params->end) && !empty($params->end) ? $params->end : 20);

		if (isset($params->role))
			$condition[] = "role = '".mysql_real_escape_string($params->role)."'";

		if (isset($params->module_name))
			$condition[] = "module_name = '".mysql_real_escape_string($params->module_name)."'";

		$condition = ' WHERE '.implode(" AND ", $condition);

		$query = "SELECT * FROM $db_user_privileges $condition LIMIT $start,$end";
		$priv_details = $this->db->query($query);
		
		if (count($priv_details))
			return $priv_details->result();
		else
			return $priv_details;
	
	}

	public function get_user_logs($params)
	{
		$db_login_details = $this->config->item('db_login_details');
		$log_details = $condition = array();

		$start = (isset($params->start) && !empty($params->start) ? $params->start : 0);
		$end = (isset($params->end) && !empty($params->end) ? $params->end : 20);

		if (isset($params->user_id))
			$condition[] = "u_id = '".mysql_real_escape_string($params->user_id)."'";

		if (isset($params->log_id))
			$condition[] = "l_id = '".mysql_real_escape_string($params->log_id)."'";

		if (isset($params->log_date)){
			$datetime = (ctype_digit($params->log_date) ? $params->log_date : date("Y-m-d H:i:s",strtotime($params->log_date)) );
			$condition[] = "date_added >= $datetime";
		}

		$condition = ' WHERE '.implode(" AND ", $condition);

		$query = "SELECT * FROM $db_login_details $condition LIMIT $start,$end";
		$log_details = $this->db->query($query);
		
		if (count($log_details))
			return $log_details->result();
		else
			return $log_details;
	
	}

}