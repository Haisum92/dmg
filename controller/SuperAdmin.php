<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuperAdmin extends MY_Controller {

	
	function __construct()
	{
		parent::__construct();
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['active_nav'] = "dashboard";
		$this->load->view('Owner/index',$data);
	}

	public function add_user()
	{
		$data['active_nav'] = "add_user";

		if($this->__preCheckAuthenticateUser())
		{
			$this->load->model('User/UserModel');

			if ( ($this->UserModel->add_user()) !=  NULL) 
			{
				$this->session->set_flashdata('success', 'User added successfully');
				$this->load->view('Owner/Users/add-user',$data);

			}else{
				// $this->session->set_flashdata('failure', 'Invalid email or Password.');
				$this->session->set_flashdata('failure', 'There is problem while creating user');
				$this->load->view('Owner/Users/add-user', $data);
			}
			
		}else{
			$this->load->view('Owner/Users/add-user',$data);	
		}

	}

	private function __preCheckAuthenticateUser()
	{
		$this->form_validation->set_rules('full_name','Name','required|alpha|xss_clean|trim');
		$this->form_validation->set_rules('email','Email','required|valid_email|xss_clean|trim|is_unique[portal_users.email]');
		$this->form_validation->set_rules('password','Password','required|xss_clean|trim|min_length[5]|max_length[12]|matches[confirmPassword]');
		$this->form_validation->set_rules('confirmPassword','Confirm Password','required|xss_clean|trim|matches[password]');
		$this->form_validation->set_rules('gender','Gender','required|xss_clean|trim');
		$this->form_validation->set_rules('contact_no','Contact No','required|xss_clean|trim');
		$this->form_validation->set_rules('role','Role','required|xss_clean|trim');
		$this->form_validation->set_rules('status','Status','required|xss_clean|trim');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if( $this->form_validation->run() === FALSE ){
			return false;
		}else{
			return true;
		}
	
	}

	public function user_list()
	{
		$this->load->model('UserLibrary');
		$data['active_nav'] = "user_list";
		$u_obj             = new STDClass;
		$u_obj->start      = 0;
		$u_obj->end        = 1000; 
		$u_obj->order_by   = "u.u_id DESC";
		$data['user_list'] = $this->UserLibrary->get_all($u_obj);

		$this->load->view('Owner/Users/user-list',$data);
	
	}

	public function single_user($user_id = '')
	{
		if (empty($user_id) or !is_numeric($user_id)) {
			$this->session->set_flashdata('failure', 'Please select user first');
			redirect('owner/users.all');
		}
		$this->load->model('UserLibrary');

		$data['active_nav'] = "single_user";

		$u_obj              = new STDClass;
		$u_obj->start       = 0;
		$u_obj->end         = 1000; 
		$u_obj->user_id     = $user_id;
		$u_obj->load        = array('added_by');

		$data['user_data'] = $this->UserLibrary->get_all($u_obj);
		// echo '<pre>';print_r($data['user_data']);echo '</pre>';
		$this->load->view('Owner/Users/user-single',$data);

	}

	public function single_edit_user($user_id = '')
	{
		if (empty($user_id) or !is_numeric($user_id)) {
			$this->session->set_flashdata('failure', 'Please select a user first');
			redirect('owner/users.all');
		}

		$this->load->model('UserLibrary');

		$u_obj          = new STDClass;
		$u_obj->start   = 0;
		$u_obj->end     = 1000; 
		$u_obj->user_id = $user_id;
		$u_obj->load    = array('added_by');

		$data['user_data'] = $this->UserLibrary->get_all($u_obj);
		
		if($this->__preCheckAuthenticateEditUser())
		{
			$this->load->model('User/UserModel');
			if ( ($this->UserModel->edit_user($user_id)) !=  NULL) 
			{
				$this->session->set_flashdata('success', 'User edited successfully');
				redirect('owner/users.all');

			}else{
				$this->session->set_flashdata('failure', 'There is a problem while editing user');
				$this->load->view('Owner/Users/user-edit-single', $data);
			}
			
		}else{
			$this->load->view('Owner/Users/user-edit-single',$data);
		}

	}

	private function __preCheckAuthenticateEditUser()
	{
		$this->form_validation->set_rules('full_name','Name','required|alpha|xss_clean|trim');
		if (!empty($this->input->post('password'))) {
			$this->form_validation->set_rules('password','Password','required|xss_clean|trim|min_length[5]|max_length[12]|matches[confirmPassword]');
			$this->form_validation->set_rules('confirmPassword','Confirm Password','required|xss_clean|trim|matches[password]');
		} else {
			$this->form_validation->set_rules('password','Password','xss_clean|trim|min_length[5]|max_length[12]|matches[confirmPassword]');
			$this->form_validation->set_rules('confirmPassword','Confirm Password','xss_clean|trim|matches[password]');
		}
		
		$this->form_validation->set_rules('gender','Gender','required|xss_clean|trim');
		$this->form_validation->set_rules('contact_no','Contact No','required|xss_clean|trim');
		$this->form_validation->set_rules('role','Role','required|xss_clean|trim');
		$this->form_validation->set_rules('status','Status','required|xss_clean|trim');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if( $this->form_validation->run() === FALSE ){
			return false;
		}else{
			return true;
		}
	
	}
	
	public function add_area()
	{
		$data['active_nav'] = "add_area";

		if($this->__preCheckAuthenticateArea())
		{
			$this->load->model('Area/AreaModel');
			
			if ( ($this->AreaModel->add_area()) !=  NULL) 
			{
				$this->session->set_flashdata('success', 'Area added successfully');
				redirect('owner/area.all',$data);

			}else{
				// $this->session->set_flashdata('failure', 'Invalid email or Password.');
				$this->session->set_flashdata('failure', 'There is problem while adding area');
				$this->load->view('Owner/Areas/add-area', $data);
			}
			
		}else{
			$this->load->view('Owner/Areas/add-area',$data);	
		}

	}

	private function __preCheckAuthenticateArea()
	{
		$this->form_validation->set_rules('title','Title','required|xss_clean|trim|alpha|is_unique[portal_areas.title]|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('status','Status','required|xss_clean|trim');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if( $this->form_validation->run() === FALSE ){
			return false;
		}else{
			return true;
		}
	
	}

	public function area_list()
	{
		$this->load->model('Area/AreaLibrary');

		$data['active_nav'] = "area_list";
		$u_obj              = new STDClass;
		$u_obj->start       = 0;
		$u_obj->end         = 1000;
		$u_obj->load        = array('added_by'); 
		$u_obj->order_by    = "a.a_id DESC";
		$data['area_list']  = $this->AreaLibrary->get_all($u_obj);

		// echo '<pre>';print_r($data['area_list']);echo '</pre>';	
		$this->load->view('Owner/Areas/area-list',$data);
	
	}

	public function single_area($area_id = '')
	{
		if (empty($area_id) or !is_numeric($area_id)) {
			$this->session->set_flashdata('failure', 'Please select an area first');
			redirect('owner/area.all');
		}
		$this->load->model('Area/AreaLibrary');

		$data['active_nav'] = "single_area";
		$a_obj              = new STDClass;
		$a_obj->start       = 0;
		$a_obj->end         = 1000; 
		$a_obj->area_id     = $area_id;
		$a_obj->load        = array('added_by');

		$data['area_data'] = $this->AreaLibrary->get_all($a_obj);
		// echo '<pre>';print_r($data['user_data']);echo '</pre>';
		$this->load->view('Owner/Areas/area-single',$data);

	}

	public function single_edit_area($area_id)
	{
		if (empty($area_id) or !is_numeric($area_id)) {
			$this->session->set_flashdata('failure', 'Please select an area first');
			redirect('owner/area.all');
		}
		$data['active_nav'] = "edit_area";

		$this->load->model('Area/AreaLibrary');

		$data['active_nav'] = "single_area";
		$a_obj              = new STDClass;
		$a_obj->start       = 0;
		$a_obj->end         = 1000; 
		$a_obj->area_id     = $area_id;
		$a_obj->load        = array('added_by');

		$data['area_data'] = $this->AreaLibrary->get_all($a_obj);
		$db_title = $data['area_data'][0]->title;
		if($this->__preCheckAuthenticateEditArea($db_title))
		{
			$this->load->model('Area/AreaModel');
			
			if ( ($this->AreaModel->edit_area($area_id)) !=  NULL) 
			{
				$this->session->set_flashdata('success', 'Area edited successfully');
				redirect('owner/area.all',$data);

			}else{
				$this->session->set_flashdata('failure', 'There is problem while adding area');
				$this->load->view('Owner/Areas/area-edit-single', $data);
			}
			
		}else{
			$this->load->view('Owner/Areas/area-edit-single',$data);	
		}

	}

	private function __preCheckAuthenticateEditArea($db_title)
	{
		$title = $this->input->post('title');
		if ($title == $db_title) {
            $this->form_validation->set_rules('title','Title','required|xss_clean|trim|alpha|min_length[3]|max_length[12]');
        } else {
            $this->form_validation->set_rules('title','Title','required|xss_clean|trim|alpha|is_unique[portal_areas.title]|min_length[3]|max_length[12]');
        }

		$this->form_validation->set_rules('status','Status','required|xss_clean|trim');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if( $this->form_validation->run() === FALSE ){
			return false;
		}else{
			return true;
		}
	
	}

	public function add_branch()
	{
		$data['active_nav'] = "add_branch";
		
		$this->load->model('Area/AreaLibrary');

		$a_obj        = new STDClass;
		$a_obj->start = 0;
		$a_obj->end   = 1000;

		$data['area_list'] = $this->AreaLibrary->get_all($a_obj);

		if($this->__preCheckAuthenticateBranch())
		{
			$this->load->model('Branch/BranchModel');

			if ( ($this->BranchModel->add_branch()) !=  NULL) 
			{
				$this->session->set_flashdata('success', 'Branch added successfully');
				redirect('owner/branch.all',$data);

			}else{
				// $this->session->set_flashdata('failure', 'Invalid email or Password.');
				$this->session->set_flashdata('failure', 'There is problem while adding branch');
				$this->load->view('Owner/Branches/add-branch', $data);
			}
			
		}else{
			$this->load->view('Owner/Branches/add-branch',$data);	
		}

	}

	private function __preCheckAuthenticateBranch()
	{
		$this->form_validation->set_rules('title','Title','required|xss_clean|trim|alpha|is_unique[portal_branches.title]|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('manager','Manager','required|xss_clean|trim|alpha|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('a_id','Area','required|xss_clean|trim');
		$this->form_validation->set_rules('status','Status','required|xss_clean|trim');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if( $this->form_validation->run() === FALSE ){
			return false;
		}else{
			return true;
		}
	
	}

	public function branch_list()
	{
		$this->load->model('Branch/BranchLibrary');

		$data['active_nav'] = "branch_list";
		$u_obj              = new STDClass;
		$u_obj->start       = 0;
		$u_obj->end         = 1000;
		$u_obj->load        = array('added_by','area'); 
		$u_obj->order_by    = "b.b_id DESC";
		$data['branch_list']  = $this->BranchLibrary->get_all($u_obj);

		// echo '<pre>';print_r($data['branch_list']);echo '</pre>';	
		$this->load->view('Owner/Branches/branch-list',$data);
	
	}

	public function single_branch($branch_id = '')
	{
		if (empty($branch_id) or !is_numeric($branch_id)) {
			$this->session->set_flashdata('failure', 'Please select branch first');
			redirect('owner/branch.all');
		}
		$this->load->model('Branch/BranchLibrary');

		$data['active_nav'] = "single_branch";
		$a_obj              = new STDClass;
		$a_obj->start       = 0;
		$a_obj->end         = 1000; 
		$a_obj->branch_id   = $branch_id;
		$a_obj->load        = array('added_by','area');

		$data['branch_data'] = $this->BranchLibrary->get_all($a_obj);
		// echo '<pre>';print_r($data['user_data']);echo '</pre>';
		$this->load->view('Owner/Branches/branch-single',$data);

	}

	public function single_edit_branch($branch_id)
	{
		if (empty($branch_id) or !is_numeric($branch_id)) {
			$this->session->set_flashdata('failure', 'Please select branch first');
			redirect('owner/branch.all');
		}
		$this->load->model('Branch/BranchLibrary');
		$data['active_nav'] = "edit_branch";
		
		$this->load->model('Area/AreaLibrary');

		$b_obj              = new STDClass;
		$b_obj->start       = 0;
		$b_obj->end         = 1000; 
		$b_obj->branch_id   = $branch_id;
		$b_obj->load        = array('added_by','area');

		$data['branch_data'] = $this->BranchLibrary->get_all($b_obj);

		$a_obj        = new STDClass;
		$a_obj->start = 0;
		$a_obj->end   = 1000;

		$data['area_list'] = $this->AreaLibrary->get_all($a_obj);
		$db_title = $data['branch_data'][0]->title;
		if($this->__preCheckAuthenticateEditBranch($db_title))
		{
			$this->load->model('Branch/BranchModel');

			if ( ($this->BranchModel->edit_branch($branch_id)) !=  NULL) 
			{
				$this->session->set_flashdata('success', 'Branch Edited successfully');
				redirect('owner/branch.all',$data);

			}else{
				$this->session->set_flashdata('failure', 'There is problem while adding branch');
				$this->load->view('Owner/Branches/branch-edit-single', $data);
			}
			
		}else{
			$this->load->view('Owner/Branches/branch-edit-single',$data);	
		}

	}

	private function __preCheckAuthenticateEditBranch($db_title)
	{
		$title = $this->input->post('title');
		if ($title == $db_title) {
            $this->form_validation->set_rules('title','Title','required|xss_clean|trim|alpha|min_length[3]|max_length[12]');
        } else {
            $this->form_validation->set_rules('title','Title','required|xss_clean|trim|alpha|is_unique[portal_branches.title]|min_length[3]|max_length[12]');
        }

		//$this->form_validation->set_rules('manager','Manager','required|xss_clean|trim|alpha|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('a_id','Area','required|xss_clean|trim');
		$this->form_validation->set_rules('status','Status','required|xss_clean|trim');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if( $this->form_validation->run() === FALSE ){
			return false;
		}else{
			return true;
		}
	
	}

	public function add_menu()
	{
		$data['active_nav'] = "add_menu";
		
		$this->load->model('Menu/MenuLibrary');

		$a_obj        = new STDClass;
		$a_obj->start = 0;
		$a_obj->end   = 1000;

		// $data['area_list'] = $this->MenuLibrary->get_all($a_obj);

		if($this->__preCheckAuthenticateMenu())
		{
			$this->load->model('Menu/MenuModel');

			if ( ($this->MenuModel->add_menu()) !=  NULL) 
			{
				$this->session->set_flashdata('success', 'Menu added successfully');
				redirect('owner/menu.all',$data);

			}else{
				// $this->session->set_flashdata('failure', 'Invalid email or Password.');
				$this->session->set_flashdata('failure', 'There is problem while adding menu');
				$this->load->view('Owner/Menus/add-menu', $data);
			}
			
		}else{
			$this->load->view('Owner/Menus/add-menu',$data);	
		}

	}

	private function __preCheckAuthenticateMenu()
	{
		$this->form_validation->set_rules('title','Title','required|xss_clean|trim|is_unique[portal_branches.title]|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('status','Status','required|xss_clean|trim');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if( $this->form_validation->run() === FALSE ){
			return false;
		}else{
			return true;
		}
	
	}

	public function menu_list()
	{
		$this->load->model('Menu/MenuLibrary');

		$data['active_nav'] = "menu_list";
		$u_obj              = new STDClass;
		$u_obj->start       = 0;
		$u_obj->end         = 1000;
		$u_obj->load        = array('added_by','area'); 
		$u_obj->order_by    = "m.m_id DESC";
		$data['menu_list']  = $this->MenuLibrary->get_all($u_obj);

		// echo '<pre>';print_r($data['menu_list']);echo '</pre>';	
		$this->load->view('Owner/Menus/menu-list',$data);
	
	}

	public function single_menu($menu_id = '')
	{
		if (empty($menu_id) or !is_numeric($menu_id)) {
			$this->session->set_flashdata('failure', 'Please select menu first');
			redirect('owner/menu.all');
		}
		$this->load->model('Menu/MenuLibrary');

		$data['active_nav'] = "single_menu";
		$a_obj              = new STDClass;
		$a_obj->start       = 0;
		$a_obj->end         = 1000; 
		$a_obj->branch_id   = $menu_id;
		$a_obj->load        = array('added_by');

		$data['menu_data'] = $this->MenuLibrary->get_all($a_obj);
		// echo '<pre>';print_r($data['user_data']);echo '</pre>';
		$this->load->view('Owner/Menus/menu-single',$data);

	}

	public function single_edit_menu($menu_id)
	{
		if (empty($menu_id) or !is_numeric($menu_id)) {
			$this->session->set_flashdata('failure', 'Please select menu first');
			redirect('owner/menu.all');
		}
		$this->load->model('Menu/MenuLibrary');

		$a_obj              = new STDClass;
		$a_obj->start       = 0;
		$a_obj->end         = 1000; 
		$a_obj->branch_id   = $menu_id;
		$a_obj->load        = array('added_by');

		$data['menu_data'] = $this->MenuLibrary->get_all($a_obj);

		$data['active_nav'] = "edit_menu";
		
		$this->load->model('Menu/MenuLibrary');

		$a_obj        = new STDClass;
		$a_obj->start = 0;
		$a_obj->end   = 1000;

		// $data['area_list'] = $this->MenuLibrary->get_all($a_obj);
		$db_title = $data['menu_data'][0]->title;

		if($this->__preCheckAuthenticateEditMenu($db_title))
		{
			$this->load->model('Menu/MenuModel');

			if ( ($this->MenuModel->edit_menu($menu_id)) !=  NULL) 
			{
				$this->session->set_flashdata('success', 'Menu edited successfully');
				redirect('owner/menu.all',$data);

			}else{
				// $this->session->set_flashdata('failure', 'Invalid email or Password.');
				$this->session->set_flashdata('failure', 'There is problem while editing menu');
				$this->load->view('Owner/Menus/menu-edit-single', $data);
			}
			
		}else{
			$this->load->view('Owner/Menus/menu-edit-single',$data);	
		}

	}

	private function __preCheckAuthenticateEditMenu($db_title)
	{
		$title = $this->input->post('title');
		if ($title == $db_title) {
            $this->form_validation->set_rules('title','Title','required|xss_clean|trim|min_length[3]|max_length[12]');
        } else {
            $this->form_validation->set_rules('title','Title','required|xss_clean|trim|is_unique[portal_branches.title]|min_length[3]|max_length[12]');
        }
		
		$this->form_validation->set_rules('status','Status','required|xss_clean|trim');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if( $this->form_validation->run() === FALSE ){
			return false;
		}else{
			return true;
		}
	
	}

	public function login_check()
	{
		echo '<pre>';print_r("I am login check");echo '</pre>';
		die('yoho!');
	
	}

}
