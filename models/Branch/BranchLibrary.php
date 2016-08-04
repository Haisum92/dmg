<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BranchLibrary extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->config->load('dbconfig');
	}

	public function get_all($params)
	{
		// echo '<pre>';print_r($params);echo '</pre>';
		// loading database table
		$db_users        = $this->config->item('db_users');
		$db_areas        = $this->config->item('db_areas');
		$db_branches     = $this->config->item('db_branches');
		$db_menus        = $this->config->item('db_menus');
		$db_branch_menus = $this->config->item('db_branch_menus');
		$condition       = $join = $custom_select =  array();
		$order_by        = $group_by = "";

		$start = (isset($params->start) && !empty($params->start) ? $params->start : 0);
		$end = (isset($params->end) && !empty($params->end) ? $params->end : 20);

		if (isset($params->branch_id))
			$condition[] = "b.b_id = ".@mysql_real_escape_string($params->branch_id);

		if (isset($params->title))
			$condition[] = "b.title LIKE ".'%'.@mysql_real_escape_string($params->title).'%';

		if (isset($params->status))
			$condition[] = "b.status = '".@mysql_real_escape_string($params->status)."'";

		if (isset($params->load)){

			if (in_array('added_by',  $params->load)) {
				$join[] = "INNER JOIN $db_users AS u1 ON u1.u_id = b.added_by ";
				$custom_select[] = "u1.full_name AS add_by";
			}
			
			if (in_array('has_branch',  $params->load)) {

				$join[] = "LEFT JOIN $db_branch_menus AS bm
							ON bm.`b_id` = b.`b_id`
							LEFT JOIN $db_menus AS m
							ON m.`m_id` = bm.`m_id` ";

				$custom_select[] = " IF(bm.bm_id IS NOT NULL,'yes','no') AS menu_exists ";
				$group_by = " GROUP BY b.b_id ";
			}			
		}

		if (isset($params->date_added)){
			$datetime = (ctype_digit($params->date_added) ? $params->date_added : date("Y-m-d H:i:s",strtotime($params->date_added)) );
			$condition[] = "b.date_added >= $datetime";
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
		

		$sql = "SELECT b.* $custom_select FROM ".$db_branches." AS b $join $condition $group_by $order_by LIMIT $start,$end";
		$result = $this->db->query($sql);

		if( $result->num_rows() > 0 )
			return $result->result();			
		else
			return NULL;
	
	}

	public function get_all_menus($params)
	{
		// echo '<pre>';print_r($params);echo '</pre>';
		// loading database table
		$db_users        = $this->config->item('db_users');
		// $db_areas        = $this->config->item('db_areas');
		$db_branches     = $this->config->item('db_branches');
		$db_menus        = $this->config->item('db_menus');
		$db_branch_menus = $this->config->item('db_branch_menus');
		$condition       = $join = $custom_select =  array();
		$order_by        = $group_by = "";

		$start = (isset($params->start) && !empty($params->start) ? $params->start : 0);
		$end   = (isset($params->end) && !empty($params->end) ? $params->end : 20);

		if (isset($params->branch_id))
			$condition[] = "bm.b_id = ".@mysql_real_escape_string($params->branch_id);

		if (isset($params->menu_id))
			$condition[] = "bm.m_id = ".@mysql_real_escape_string($params->menu_id);

		if (isset($params->status))
			$condition[] = "bm.status = '".@mysql_real_escape_string($params->status)."'";

		if (isset($params->load)){
			/*if (in_array('added_by',  array('added_by'))) {
				$join[] = "INNER JOIN $db_users AS u1 ON u1.u_id = bm.added_by ";
				$custom_select[] = "u1.full_name AS add_by";
			}*/
			// if (in_array('area',  array('added_by','area'))) {
			// 	$join[] = "INNER JOIN $db_areas AS a ON a.a_id = b.a_id ";
			// 	$custom_select[] = "a.title AS area_title";
			// }
			/*if (in_array('branch',  array('added_by','branch'))) {

				$join[] = "LEFT JOIN $db_branches AS b
							ON b.`b_id` = bm.`b_id` ";

				$custom_select[] = " b.title AS branch_title,b.b_id AS branch_id ";
				// $group_by = " GROUP BY b.b_id ";
			}*/

			if (in_array('area',  array('added_by','branch','area'))) {

				$join[] = "LEFT JOIN $db_menus AS m
							ON m.`m_id` = bm.`m_id` ";

				$custom_select[] = " m.title AS menu_title,m.m_id AS menu_id ";
				// $group_by = " GROUP BY b.b_id ";
			}

		}

		if (isset($params->date_added)){
			$datetime = (ctype_digit($params->date_added) ? $params->date_added : date("Y-m-d H:i:s",strtotime($params->date_added)) );
			$condition[] = "bm.date_added >= $datetime";
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
		

		$sql = "SELECT bm.* $custom_select FROM ".$db_branch_menus." AS bm $join $condition $group_by $order_by LIMIT $start,$end";
		$result = $this->db->query($sql);

		if( $result->num_rows() > 0 )
			return $result->result();			
		else
			return NULL;
	
	}

}