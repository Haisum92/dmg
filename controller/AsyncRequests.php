<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AsyncRequests extends MY_Controller {

	
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
		/*die('Yoho! am here');
		$data['active_nav'] = "dashboard";
		$this->load->view('Owner/index',$data);*/
	
	}

	public function load_info()
	{
		$action = trim($this->input->post('action'));
		switch ($action) {

			case 'area_branches':
			
				if (!empty($this->input->post('a_id')) && intval($this->input->post('a_id')) != 0) 
				{
					$this->load->model('Area/AreaLibrary');
					$a_obj          = new STDClass;
					$a_obj->area_id = $this->input->post('a_id');
					$a_obj->load    = array('branch');	
					$area_branches  = $this->AreaLibrary->get_all($a_obj);

					//Either you can print value or you can send value to database
					echo json_encode($area_branches);
				}
				break;

			case 'is_email_exists':
			
				if (!empty($this->input->post('email'))) 
				{
					$this->load->model('UserLibrary');
					$u_obj        = new STDClass;
					$u_obj->email = $this->input->post('email');
					$user_record  = $this->UserLibrary->get_all($u_obj);

					if ($user_record != NULL)
						$isAllowed = FALSE;
					else
						$isAllowed = TRUE;

					echo json_encode(array(
					    'valid' => $isAllowed,
					));
				}
				break;

			case 'branch_manager':
			
				if (!empty($this->input->post('b_id'))) 
				{
					$this->load->model('Branch/BranchLibrary');
					$b_obj            = new STDClass;
					$b_obj->branch_id = $this->input->post('b_id');
					$branch_record    = $this->BranchLibrary->get_all($b_obj);

					echo json_encode($branch_record);
				}
				break;
			
			default:
				# code...
				break;
		}
	
	}

	public function load_area_branches_sample()
	{
		if (!empty($this->input->post('a_id')) && intval($this->input->post('a_id')) != 0) {
			
			$this->load->model('Area/AreaLibrary');
			$a_obj          = new STDClass;
			$a_obj->area_id = $this->input->post('a_id');
			$a_obj->load    = array('branch');
			$area_branches  = $this->AreaLibrary->get_all($a_obj);

			//Either you can print value or you can send value to database
			echo json_encode($area_branches);
		}else{
			echo json_encode(NULL);
		}
	
	}
}
