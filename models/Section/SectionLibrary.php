<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SectionLibrary extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->config->load('dbconfig');
	}

	public function get_all($params)
	{
		// echo '<pre>';print_r($params);echo '</pre>';
		// loading database table
		$db_sections = $this->config->item('db_sections');
		$db_users    = $this->config->item('db_users');

		$condition   = $join = $custom_select =  array();
		$order_by    = "";

		$start = (isset($params->start) && !empty($params->start) ? $params->start : 0);
		$end   = (isset($params->end) && !empty($params->end) ? $params->end : 20);

		if (isset($params->section_id))
			$condition[] = "s.s_id = ".@mysql_real_escape_string($params->section_id);

		if (isset($params->title))
			$condition[] = "s.title LIKE ".'%'.@mysql_real_escape_string($params->title).'%';

		if (isset($params->status))
			$condition[] = "s.status = '".@mysql_real_escape_string($params->status)."'";

		if (isset($params->load)){
			if (in_array('added_by',  array('added_by'))) {
				$join[] = "INNER JOIN $db_users AS u1 ON u1.u_id = s.added_by ";
				$custom_select[] = "u1.full_name AS add_by";
			}			
		}

		if (isset($params->date_added)){
			$datetime = (ctype_digit($params->date_added) ? $params->date_added : date("Y-m-d H:i:s",strtotime($params->date_added)) );
			$condition[] = "s.date_added >= $datetime";
		}

		if (isset($params->order_by))
			$order_by = "ORDER BY ".@mysql_real_escape_string($params->order_by);

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
		

		$sql = "SELECT s.* $custom_select FROM ".$db_sections." AS s $join $condition $order_by LIMIT $start,$end";
		$result = $this->db->query($sql);

		if( $result->num_rows() > 0 )
			return $result->result();			
		else
			return NULL;
	
	}

}