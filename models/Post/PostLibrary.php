<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PostLibrary extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->config->load('dbconfig');
	}

	public function get_all($params)
	{
		// echo '<pre>';print_r($params);echo '</pre>';
		// loading database table
		$db_posts         = $this->config->item('db_posts');
		$db_users         = $this->config->item('db_users');
		$db_areas         = $this->config->item('db_areas');
		$db_branches      = $this->config->item('db_branches');
		$condition        = $join = $custom_select =  array();
		$order_by         = $group_by = "";

		$start = (isset($params->start) && !empty($params->start) ? $params->start : 0);
		$end   = (isset($params->end) && !empty($params->end) ? $params->end : 20);

		if (isset($params->post_id))
			$condition[] = "p.p_id = ".@mysql_real_escape_string($params->post_id);

		if (isset($params->title))
			$condition[] = "p.title LIKE ".'%'.@mysql_real_escape_string($params->title).'%';

		if (isset($params->status))
			$condition[] = "p.a_id = '".@mysql_real_escape_string($params->status)."'";

		if (isset($params->load)){
			
			if (in_array('added_by',  $params->load)) {
				$join[] = "INNER JOIN $db_users AS u1 ON u1.u_id = p.added_by ";
				$custom_select[] = "u1.full_name AS add_by";
			}

			if (in_array('area',  $params->load)) {
				
				$join[]             = "LEFT JOIN $db_areas AS a ON a.a_id = p.a_id ";
				$custom_select[]    = " a.title AS area_title,a.a_id AS area_id ";
			}

			if (in_array('branch',  $params->load)) {
				
				$join[]             = "LEFT JOIN $db_branches AS b ON b.b_id = p.b_id ";
				$custom_select[]    = " b.title AS branch_title,b.b_id AS branch_id ";
				// $group_by           = " GROUP BY a.a_id ";

			}

		}

		if (isset($params->date_added)){
			$datetime = (ctype_digit($params->date_added) ? $params->date_added : date("Y-m-d H:i:s",strtotime($params->date_added)) );
			$condition[] = "p.date_added >= $datetime";
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
		

		$sql = "SELECT p.* $custom_select FROM ".$db_posts." AS p $join $condition $group_by $order_by LIMIT $start,$end";
		$result = $this->db->query($sql);

		if( $result->num_rows() > 0 )
			return $result->result();			
		else
			return NULL;
	
	}
	
}