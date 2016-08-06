<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
	}

	public function index()
	{
		$this->load->view('Login/login');
	}

	public function authenticate()
	{
		if($this->__preCheckAuthenticate())
		{
			/*$this->session->sess_destroy();
			die('Yoho! am here');*/

			$data['user_details'] = $this->LoginModel->login();
			
			if( $data['user_details'] != NULL ){

				$user_data = array(
							'is_logged'		=> 1,
							'user_type' 	=> $data['user_details']->role,
							'user_details'	=> $data['user_details']
							);
				$this->session->set_userdata( $user_data );

				switch ($data['user_details']->role) {
					case 'superadmin':
						redirect('owner', 'refresh');	// owner means superAdmin controller as defined in routes
						die('Yoho! am here superadmin');
						break;
					case 'admin':
						die('Yoho! am here admin');
						break;
					case 'enduser':
						/**************/
						redirect('enduser', 'refresh');	// enduser means end user controller as defined in routes
						/**************/
						die('Yoho! am here enduser');
						break;
					default:
						die('Yoho! am here enduser');
						break;
				}
				//redirect('admin/dashboard', 'refresh');
				
			}else{
				// $this->session->set_flashdata('failure', 'Invalid email or Password.');
				$this->session->set_flashdata('failure', 'Incorrect login details');
				$this->load->view('Login/login', $data);
			}
			
		}else{
			/*echo '<pre>';print_r("TEST");echo '</pre>';
			die('yoho!');*/
			$this->session->set_flashdata('failure', 'Incorrect login details');
			$this->load->view('Login/login');	
		}
	
	}

	private function __preCheckAuthenticate()
	{
		$this->form_validation->set_rules('email','Email','required|valid_email|xss_clean|trim');
		$this->form_validation->set_rules('password','Password','required|xss_clean|trim');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if( $this->form_validation->run() === FALSE ){
			return false;
		}else{
			return true;
		}
	
	}

	public function destroy_session()
	{
		if ($this->LoginModel->log_session_destroy()) 
		{
			$this->session->unset_userdata(array('user_details','user_type','is_logged'));
			$this->session->set_flashdata('success', 'Successfully logout');
			redirect('Login');
		}else{
			$this->session->set_flashdata('note', 'There is problem with saying good bye, please try again');
		}
	}
	
}
