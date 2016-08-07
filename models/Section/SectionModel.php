<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SectionModel extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->config->load('dbconfig');
	}

	public function add_section()
	{
		$db_sections  = $this->config->item('db_sections');
		$col_arr   = $vals = array();
		$insert_id = "";
		
		$col_arr = array('title','status','added_by','date_added');

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

		$ins_query = "INSERT INTO $db_sections ($col_arr) VALUES ($vals) ";;
		$q_result  = $this->db->query($ins_query);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	
	}

	public function edit_section()
	{
		$db_sections = $this->config->item('db_sections');
		
		$title           = "'".@mysql_real_escape_string($this->input->post('title'))."'";
		$status          = "'".@mysql_real_escape_string($this->input->post('status'))."'";

		$cur_user_detail = $this->session->userdata('user_details');
		$u_id            = $cur_user_detail->u_id;

		$edit_query = "UPDATE $db_sections SET 
						title   = $title,
						status  = $status
						WHERE s_id = '".$this->section_id."'
						";
		
		$update_res  = $this->db->query($edit_query);
		
		return $update_res;
	
	}

	public function get_by_id()
	{
		$this->load->model('Section/SectionLibrary');

		$result            = array();
		$s_obj             = new STDClass;
		$s_obj->section_id = $this->section_id;
		$result            = $this->SectionLibrary->get_all($s_obj);

		return $result;
	
	}

	public function delete_section()
	{
		if (!isset($this->section_id) OR empty($this->section_id)) {
			return false;
		}

		$result           = "";
		$db_post_images   = $this->config->item('db_post_images');
		$db_posts         = $this->config->item('db_posts');
		$db_menu_sections = $this->config->item('db_menu_sections');
		$db_sections         = $this->config->item('db_sections');

		$sql 	= "SELECT pi.* FROM $db_post_images AS pi
					INNER JOIN $db_posts p ON p.p_id = pi.p_id
					INNER JOIN $db_menu_sections ms ON ms.s_id = p.s_id
					INNER JOIN $db_sections s ON s.s_id = p.s_id
					WHERE s.s_id = ?
					";

		$result	=	$this->db->query($sql, array($this->section_id));

		if (count($result->num_rows())) 
		{
			foreach ($result->result() as $key => $img)
			{
				$rdir = $img->p_id;
				$rdir = $this->config->item('base_url_post_images').$rdir;
				// die('Yoho! am here');
				unlink($img->image_path);
			}
			if (isset($rdir) && !empty($rdir))
				rmdir($rdir);
		}

		$sql	= "DELETE pi FROM $db_post_images AS pi
					INNER JOIN $db_posts p ON p.p_id = pi.p_id
					INNER JOIN $db_menu_sections ms ON ms.s_id = p.s_id
					INNER JOIN $db_sections s ON s.s_id = p.s_id
					WHERE s.s_id = ?";

		$result	=	$this->db->query($sql, array($this->section_id));

		if ($result) {
			
			$sql	= "DELETE p FROM $db_posts p
						INNER JOIN $db_menu_sections ms ON ms.s_id = p.s_id
						INNER JOIN $db_sections s ON s.s_id = ms.s_id
						WHERE p.a_id = ?";

			$result	=	$this->db->query($sql, array($this->section_id));
			
			if ($result) {

				$sql	= "DELETE ms FROM $db_menu_sections ms
							INNER JOIN $db_sections s ON s.s_id = ms.s_id
							WHERE ms.s_id = ?";

				$result	=	$this->db->query($sql, array($this->section_id));
				if ($result) {

					$sql	= "DELETE s FROM $db_sections s
								WHERE s.s_id = ?";

				$result	=	$this->db->query($sql, array($this->section_id));
					if ($result) {
						return true;
					}
				}

			}
		}


		return false;
	}

}