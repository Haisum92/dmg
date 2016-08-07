<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EndUser extends MY_Controller {

	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['active_nav'] = "enduser";
		
		$this->load->model('Area/AreaLibrary');
		$this->load->model('Branch/BranchLibrary');

		$u_obj              = new STDClass;
		$u_obj->start       = 0;
		$u_obj->end         = 1000;
		$u_obj->load        = array('added_by'); 
		$u_obj->order_by    = "a.a_id DESC";
		$data['area_list']  = $this->AreaLibrary->get_all($u_obj);

		$u_obj              = new STDClass;
		$u_obj->start       = 0;
		$u_obj->end         = 1000;
		$u_obj->load        = array('added_by','area','has_branch'); 
		$u_obj->order_by    = "b.b_id DESC";
		$data['branch_list']  = $this->BranchLibrary->get_all($u_obj);

		$this->load->view('EndUser/index',$data);
	}

	public function menu_list()
	{
		$data['active_nav'] = "enduser/menu_list";
		
		/*$this->load->model('Area/AreaLibrary');
		$this->load->model('Branch/BranchLibrary');

		$u_obj              = new STDClass;
		$u_obj->start       = 0;
		$u_obj->end         = 1000;
		$u_obj->load        = array('added_by'); 
		$u_obj->order_by    = "a.a_id DESC";
		$data['area_list']  = $this->AreaLibrary->get_all($u_obj);

		$u_obj              = new STDClass;
		$u_obj->start       = 0;
		$u_obj->end         = 1000;
		$u_obj->load        = array('added_by','area','has_branch'); 
		$u_obj->order_by    = "b.b_id DESC";
		$data['branch_list']  = $this->BranchLibrary->get_all($u_obj);*/

		$this->load->view('EndUser/Menus/menu-list',$data);
	}
}
