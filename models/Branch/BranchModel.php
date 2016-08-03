<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BranchModel extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->config->load('dbconfig');
	}

	public function add_branch()
	{
		// echo hash('sha224','admin123'.dmgSalt);
		$db_branches = $this->config->item('db_branches');
		$col_arr     = $vals = array();
		$insert_id   = "";
		
		$col_arr = array('title','a_id','status','added_by','date_added');

		foreach ($col_arr as $key => $col)
		{
			if ($col == 'date_added' ) {
				
				$vals[] = 'NOW()';

			}elseif ($col == 'added_by' ){

				$cur_user_detail = $this->session->userdata('user_details');
				$vals[] = $cur_user_detail->u_id;

			}else{
				$vals[] =  ( !empty($this->input->post($col)) ) ? "'".$this->input->post($col)."'" : "";
			}
		}

		$col_arr = implode(',',$col_arr);
		$vals    = implode(',',$vals);

		$ins_query = "INSERT INTO $db_branches ($col_arr) VALUES ($vals) ";;
		$q_result  = $this->db->query($ins_query);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	
	}

	public function edit_branch($branch_id)
	{
		$db_branches = $this->config->item('db_branches');
		
		$title           = "'".@mysql_real_escape_string($this->input->post('title'))."'";
		$area_id         = "'".@mysql_real_escape_string($this->input->post('a_id'))."'";
		$status          = $this->input->post('status');
		$cur_user_detail = $this->session->userdata('user_details');
		$u_id            = $cur_user_detail->u_id;

		$edit_query = "UPDATE $db_branches SET 
						title  = '$title', 
						a_id   = '$area_id', 
						status = '$status'
						WHERE b_id = '$branch_id'
						";
		
		$update_res  = $this->db->query($edit_query);
		
		return $update_res;
	
	}

	public function get_by_id()
	{
		$this->load->model('Branch/BranchLibrary');

		$result           = array();
		$m_obj            = new STDClass;
		$m_obj->branch_id = $this->branch_id;
		$result           = $this->BranchLibrary->get_all($m_obj);

		return $result;
	
	}

	public function get_menus_id()
	{
		$this->load->model('Branch/BranchLibrary');

		$result           = array();
		$m_obj            = new STDClass;
		$m_obj->branch_id = $this->branch_id;

		if (isset($this->load_param) and count($this->load_param))
			$m_obj->load = $this->load_param;

		$result = $this->BranchLibrary->get_all_menus($m_obj);

		return $result;
	
	}

	public function add_branch_menu()
	{
		// echo hash('sha224','admin123'.dmgSalt);
		$db_branch_menus = $this->config->item('db_branch_menus');
		$col_arr         = $vals = array();
		$insertion_vals  = '';
		$insert_id       = "";
		
		$col_arr         = array('b_id','m_id','status','date_added','added_by');
		$cur_user_detail = $this->session->userdata('user_details');

		foreach ($_POST['menu'] as $key => $menu)
		{
			$insertion_vals = '(';

			foreach ($col_arr as $key => $col)
			{
				if ($col == 'date_added' ) {
					
					$insertion_vals .= ',NOW()';

				}elseif ($col == 'added_by' ){

					$insertion_vals .= ','.$cur_user_detail->u_id;

				}elseif ($col == 'm_id' ){
					
					$insertion_vals .= ','.intval($menu);
					

				}elseif ($col == 'b_id' ){

					$insertion_vals .= intval($this->uri->segment(3));

				}else{

					$insertion_vals .=  ','.(( !empty($this->input->post($col)) ) ? "'".$this->input->post($col)."'" : "''");
					
				}
			}
			$vals[] = $insertion_vals .= ')';
		}
		
		$col_arr   = "`".implode("`,`",$col_arr)."`";
		$vals      = implode(',',$vals);
		$ins_query = "INSERT INTO $db_branch_menus ($col_arr) VALUES $vals ";;
		$q_result  = $this->db->query($ins_query);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	
	}

	public function update_branch_menu()
	{
		$db_branch_menus = $this->config->item('db_branch_menus');
		$delete_query    = "DELETE FROM $db_branch_menus WHERE b_id = '".intval($this->uri->segment(3))."' ";
		$del_res         = $this->db->query($delete_query);
		$res             = $this->add_branch_menu();
		
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