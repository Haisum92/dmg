<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PostModel extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->config->load('dbconfig');
	}

	public function add_post()
	{
		// echo hash('sha224','admin123'.dmgSalt);
		$db_posts  = $this->config->item('db_posts');
		$col_arr   = $vals = $area_detail = array();
		$insert_id = "";
		
		$col_arr = array('title','a_id','b_id','comments','excerpt','content','status','added_by','date_added','date_updated');

		foreach ($col_arr as $key => $col)
		{
			if ($col == 'date_added' ) {
				
				$vals[] = 'NOW()';

			}elseif ($col == 'a_id' ) {
				
				$vals[] = "'".@mysql_real_escape_string($this->input->post('async_area_branch'))."'";

			}elseif ($col == 'b_id' ) {
				
				$vals[] = "'".@mysql_real_escape_string($this->input->post('async_branches'))."'";

			}elseif ($col == 'added_by' ){

				$cur_user_detail = $this->session->userdata('user_details');
				$vals[] = $cur_user_detail->u_id;

			}else{
				$vals[] =  ( !empty($this->input->post($col)) ) ? "'".@mysql_real_escape_string($this->input->post($col))."'" : "''";
			}
		}

		$col_arr = implode(',',$col_arr);
		// $vals    = rtrim(implode(',',$vals),',');
		$vals    = implode(',',$vals);

		$ins_query = "INSERT INTO $db_posts ($col_arr) VALUES ($vals) ";
		$q_result  = $this->db->query($ins_query);
		$insert_id = $this->db->insert_id();
				
		return $insert_id;
	
	}

	public function add_post_image()
	{
		// echo hash('sha224','admin123'.dmgSalt);
		$db_post_images = $this->config->item('db_post_images');
		$col_arr        = $vals = $area_detail = array();
		$insert_id      = "";
		$col_arr = array('p_id','image_title','image_path','is_featured','status','added_by','date_added');

		foreach ($col_arr as $key => $col)
		{
			if ($col == 'date_added' ) {
				
				$vals[] = 'NOW()';

			}elseif ($col == 'status' ) {
				
				$vals[] = "'active'";

			}elseif ($col == 'added_by' ){

				$cur_user_detail = $this->session->userdata('user_details');
				$vals[] = $cur_user_detail->u_id;

			}else{
				$vals[] =  ( !empty($this->$col) ) ? "'".@mysql_real_escape_string($this->$col)."'" : "''";
			}
		}

		$col_arr = implode(',',$col_arr);
		// $vals    = rtrim(implode(',',$vals),',');
		$vals    = implode(',',$vals);

		$ins_query = "INSERT INTO $db_post_images ($col_arr) VALUES ($vals) ";
		$q_result  = $this->db->query($ins_query);
		$insert_id = $this->db->insert_id();
		
		return $insert_id;
	
	}

	public function edit_area($area_id)
	{
		$db_areas = $this->config->item('db_areas');
		
		$title  = "'".@mysql_real_escape_string($this->input->post('title'))."'";
		$status = $this->input->post('status');
		$cur_user_detail = $this->session->userdata('user_details');
		$u_id = $cur_user_detail->u_id;

		$edit_query = "UPDATE $db_areas SET 
						title      = '$title', 
						status     = '$status'
						WHERE a_id = '$area_id'
						";
		
		$update_rows  = $this->db->query($edit_query);
		
		return $update_rows;
	
	}

	public function get_by_id()
	{
		$this->load->model('Area/AreaLibrary');

		$result         = array();
		$a_obj          = new STDClass;
		$a_obj->area_id = $this->area_id;
		$result         = $this->AreaLibrary->get_all($a_obj);

		return $result;
	
	}

	public function get_branch_id()
	{
		$this->load->model('Area/AreaLibrary');

		$result         = array();
		$a_obj          = new STDClass;
		$a_obj->area_id = $this->area_id;

		if (isset($this->load_param) and count($this->load_param))
			$a_obj->load = $this->load_param;

		$result = $this->AreaLibrary->get_all($a_obj);
		
		return $result;
	
	}

	public function add_area_branch()
	{
		// echo hash('sha224','admin123'.dmgSalt);
		$db_area_branches = $this->config->item('db_area_branches');
		$col_arr          = $vals = array();
		$insertion_vals   = '';
		$insert_id        = "";
		
		$col_arr = array('a_id','b_id','status','added_by','date_added');
		$cur_user_detail = $this->session->userdata('user_details');

		foreach ($_POST['branch'] as $key => $branch)
		{
			$insertion_vals = '(';

			foreach ($col_arr as $key => $col)
			{
				if ($col == 'date_added' ) {
					
					$insertion_vals .= ',NOW()';

				}elseif ($col == 'added_by' ){

					$insertion_vals .= ','.$cur_user_detail->u_id;

				}elseif ($col == 'b_id' ){
					
					$insertion_vals .= ','.intval($branch);
					

				}elseif ($col == 'a_id' ){

					$insertion_vals .= intval($this->uri->segment(3));

				}else{
					$insertion_vals .=  ','.(( !empty($this->input->post($col)) ) ? "'".$this->input->post($col)."'" : "");
				}
			}
			$vals[] = $insertion_vals .= ')';
		}
		
		$col_arr = "`".implode("`,`",$col_arr)."`";
		$vals    = implode(',',$vals);

		$ins_query = "INSERT INTO $db_area_branches ($col_arr) VALUES $vals ";;
		$q_result  = $this->db->query($ins_query);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	
	}

	public function update_area_branch()
	{
		$db_area_branches = $this->config->item('db_area_branches');
		$delete_query     = "DELETE FROM $db_area_branches WHERE a_id = '".intval($this->uri->segment(3))."' ";
		$del_res          = $this->db->query($delete_query);
		$res              = $this->add_area_branch();
		
		if (count($res))
			return true;

		return false;
		
		/*echo '<pre>';print_r($_POST);echo '</pre>';
		$result = $col_arr = $vals = $data = array();
		$db_branch_menus  = $this->config->item('db_branch_menus');
		
		$col_arr =  array('b_id','m_id','status','added_by','date_added');

		$cur_user_detail = $this->session->userdata('user_details');

		foreach ($_POST['menu'] as $key => $menu)
		{
			foreach ($col_arr as $skey => $col)
			{
			    if ($col == 'date_added' ){
					
					$data[$key][$col] = 'NOW()';					

				}if ($col == 'added_by' ){
					
					$data[$key][$col] = $cur_user_detail->u_id;;					

				}elseif ($col == 'm_id' ){
					
					$data[$key][$col] = intval($menu);					

				}elseif ($col == 'b_id' ){

					$data[$key][$col] = intval($this->uri->segment(3));

				}else{

					$data[$key][$col] =  (( !empty($this->input->post($col)) ) ? "'".$this->input->post($col)."'" : "''");
					
				}
			}
		
		}	// END FOREACH
		
		$delete_query = "DELETE FROM $db_branch_menus WHERE b_id = '".intval($this->uri->segment(3))."' ";
		$del_res = $this->db->query($delete_query);
		die('yoho!');
		$up_res = $this->db->update_batch($db_branch_menus,$data, 25);*/
	
	}


}