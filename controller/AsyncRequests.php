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

	/**************/
	public function load_branches()
	{
		if (!empty($this->input->post('a_id')) && intval($this->input->post('a_id')) != 0) {
            $a_id = $this->input->post('a_id');

            $this->load->model('Branch/BranchLibrary');

			$u_obj              = new STDClass;
			$u_obj->area_id 	= $a_id;
			$u_obj->start       = 0;
			$u_obj->end         = 1000;
			$u_obj->load        = array('added_by','area','has_branch'); 
			$u_obj->order_by    = "b.b_id DESC";
			$area_branches  = $this->BranchLibrary->get_all($u_obj);

			if (count($area_branches)) {
				echo json_encode($area_branches);
			}
        } else {
			echo json_encode(NULL);
		}
	}
	/**************/
}
