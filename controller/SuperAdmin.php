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
		$this->load->view('Owner/index');
	}

	public function add_user()
	{
		if($this->__preCheckAuthenticateUser())
		{
			$this->load->model('User/UserModel');

			if ( ($this->UserModel->add_user()) !=  NULL) 
			{
				$this->session->set_flashdata('success', 'User added successfully');
				$this->load->view('Owner/Users/add-user');

			}else{
				// $this->session->set_flashdata('failure', 'Invalid email or Password.');
				$this->session->set_flashdata('failure', 'There is problem while creating user');
				$this->load->view('Owner/Users/add-user', $data);
			}
			
		}else{
			$this->load->view('Owner/Users/add-user');	
		}

	}

	private function __preCheckAuthenticateUser()
	{
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

		$u_obj          = new STDClass;
		$u_obj->start   = 0;
		$u_obj->end     = 1000; 
		$u_obj->user_id = $user_id;
		$u_obj->load    = array('added_by');

		$data['user_data'] = $this->UserLibrary->get_all($u_obj);
		// echo '<pre>';print_r($data['user_data']);echo '</pre>';
		$this->load->view('Owner/Users/user-single',$data);

	}

	public function login_check()
	{
		echo '<pre>';print_r("I am login check");echo '</pre>';
		die('yoho!');
	}
}
