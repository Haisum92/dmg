<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
* Authentication Class
* Definition:
* Only written to validate the session
* and priviliges
*/
class MY_Controller extends CI_Controller
{
	function __construct()
	{
	 	parent::__construct();
	 	$this->authenticate();
	}

	public function authenticate()
	{
		$this->CI =& get_instance();
		
		if(!$this->CI->session->userdata('is_logged'))
		{
			$this->session->unset_userdata(array('user_details','user_type','is_logged'));
	        $this->CI->session->set_userdata('is_logged',0);
	        $this->session->set_flashdata('failure',"Oops! It seems you aren't logged in");
	        redirect(site_url('Login'),'refresh');
	    }
	}
}
?>	