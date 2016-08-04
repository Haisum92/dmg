<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MenuLibrary extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->config->load('dbconfig');
	}

	public function get_all($params)
	{

		/*echo '<pre>';print_r($params);echo '</pre>';
		die('Yoho! am here');*/
		// loading database table
		$db_menus         = $this->config->item('db_menus');
		$db_users         = $this->config->item('db_users');
		$db_menu_sections = $this->config->item('db_menu_sections');
		$db_sections      = $this->config->item('db_sections');

		$condition   = $join = $custom_select =  array();
		$order_by    = $group_by = "";

		$start = (isset($params->start) && !empty($params->start) ? $params->start : 0);
		$end   = (isset($params->end) && !empty($params->end) ? $params->end : 1000);

		if (isset($params->menu_id))
			$condition[] = "m.m_id = '".@mysql_real_escape_string($params->menu_id)."'";

		if (isset($params->title))
			$condition[] = "m.title LIKE ".'%'.@mysql_real_escape_string($params->title).'%';

		if (isset($params->status))
			$condition[] = "m.status = '".@mysql_real_escape_string($params->status)."'";

		if (isset($params->load)){

			if (in_array('added_by',  $params->load)) {
				$join[] = "INNER JOIN $db_users AS u1 ON u1.u_id = m.added_by ";
				$custom_select[] = "u1.full_name AS add_by";
			}
			
			if (in_array('has_section',  $params->load)) {

				$join[] = "LEFT JOIN $db_menu_sections AS ms
							ON ms.`m_id` = m.`m_id`
							LEFT JOIN $db_sections AS s
							ON s.`s_id` = ms.`s_id` ";

				$custom_select[] = " IF(s.s_id IS NOT NULL,'yes','no') AS section_exists ";
				$group_by = " GROUP BY m.m_id ";
			}

			if (in_array('section',  $params->load)) {

				$join[] = "LEFT JOIN $db_menu_sections AS ms
							ON ms.`m_id` = m.`m_id`
							LEFT JOIN $db_sections AS s
							ON s.`s_id` = ms.`s_id` ";

				$custom_select[] = " s.title AS section_title,s.s_id AS section_id  ";
				// $group_by = " GROUP BY m.m_id ";
			}

		}

		if (isset($params->date_added)){
			$datetime = (ctype_digit($params->date_added) ? $params->date_added : date("Y-m-d H:i:s",strtotime($params->date_added)) );
			$condition[] = "m.date_added >= $datetime";
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
		

		$sql = "SELECT m.* $custom_select FROM ".$db_menus." AS m $join $condition $group_by $order_by LIMIT $start,$end";
		$result = $this->db->query($sql);

		if( $result->num_rows() > 0 )
			return $result->result();			
		else
			return NULL;
	
	}


}