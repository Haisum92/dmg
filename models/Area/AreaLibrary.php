<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AreaLibrary extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->config->load('dbconfig');
	}

	public function get_all($params)
	{
		// echo '<pre>';print_r($params);echo '</pre>';
		// loading database table
		$db_users         = $this->config->item('db_users');
		$db_areas         = $this->config->item('db_areas');
		$db_branches      = $this->config->item('db_branches');
		$db_area_branches = $this->config->item('db_area_branches');
		$condition        = $join = $custom_select =  array();
		$order_by         = $group_by = "";

		$start = (isset($params->start) && !empty($params->start) ? $params->start : 0);
		$end   = (isset($params->end) && !empty($params->end) ? $params->end : 20);

		if (isset($params->area_id))
			$condition[] = "a.a_id = ".@mysql_real_escape_string($params->area_id);

		if (isset($params->title))
			$condition[] = "a.title LIKE ".'%'.@mysql_real_escape_string($params->title).'%';

		if (isset($params->status))
			$condition[] = "a.a_id = '".@mysql_real_escape_string($params->status)."'";

		if (isset($params->load)){
			
			if (in_array('added_by',  $params->load)) {
				$join[] = "INNER JOIN $db_users AS u1 ON u1.u_id = a.added_by ";
				$custom_select[] = "u1.full_name AS add_by";
			}

			if (in_array('has_branch',  $params->load)) {
				$join[] = "LEFT JOIN $db_area_branches AS ab ON ab.a_id = a.a_id
							LEFT JOIN $db_branches AS b ON b.b_id = ab.b_id ";
				$custom_select[] = " IF(ab.a_id IS NOT NULL,'yes','no') AS branch_exists ";
				$group_by = " GROUP BY a.a_id ";

			}

			if (in_array('branch',  $params->load)) {
				
				$join[]             = "LEFT JOIN $db_area_branches AS ab ON ab.a_id = a.a_id
										LEFT JOIN $db_branches AS b ON b.b_id = ab.b_id ";
				$custom_select[]    = " b.title AS branch_title,b.b_id AS branch_id ";
				// $group_by           = " GROUP BY a.a_id ";

			}

		}

		if (isset($params->date_added)){
			$datetime = (ctype_digit($params->date_added) ? $params->date_added : date("Y-m-d H:i:s",strtotime($params->date_added)) );
			$condition[] = "a.date_added >= $datetime";
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
		

		$sql = "SELECT a.* $custom_select FROM ".$db_areas." AS a $join $condition $group_by $order_by LIMIT $start,$end";
		$result = $this->db->query($sql);

		if( $result->num_rows() > 0 )
			return $result->result();			
		else
			return NULL;
	
	}
	
}