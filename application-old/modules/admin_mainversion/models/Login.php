<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Login extends CI_Controller {
	public $headerPage = '../../views/header';
	public $footerPage = '../../views/footer';
	public $listPage = 'login';
	
	public $searchPage        = 'search';
	public $listPage_redirect ='login';
	public $login_redirect    ='home';
	public $reDirect = 'checkout/payment/';
	
	public function __construct() {
        parent::__construct();
		$this->load->model('Common_model','common_model');
		$this->load->model('Login_model','login_model');
		$this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off'); 
    }
	
	public function index(){
		
		if($this->input->post('submit')!='')
		{
			 if ($this->form_validation->run('login') == TRUE) {

			$data = array(
							'email' => $this->input->post('email'),
							'password' => $this->input->post('password')
						 );
				//echo "<pre>";print_r($data);exit;
				$user_details = $this->login_model->getUser($data);
				if($user_details)
				{				
						$newdata = array
						(
							'user_name'  => $user_details['fname'],
							'user_id'    => $user_details['id'],
							'user_type'    => "customer"
						);
						/*echo "<pre>";print_r($newdata);exit;*/
						$this->session->set_userdata($newdata);
						$this->session->set_flashdata('msg_succ', 'Welcome, '.$this->session->userdata('user_name').'');

						if(($this->session->userdata('user_id')!='') &&($this->cart->total_items() > 0))
							{
								redirect($this->reDirect);
							} else {
								redirect($this->login_redirect);
							}
				} 
				else 
				{
					$this->session->set_flashdata( 'msg_fails', 'Invalid Email or Password.' );
					redirect($this->listPage_redirect);
				}

			}
		}	
		
		$header['web_settings']   = $this->common_model->get_all_websettings();
		$header['categories']     = $this->common_model->get_categories();
		$this->load->view($this->headerPage,$header);
		
		$this->load->view($this->listPage);

		$footer['about']          = $this->common_model->get_aboutus();
		$footer['web_settings']   = $this->common_model->get_all_websettings();
		$footer['categories']     = $this->common_model->get_categories();
		$this->load->view($this->footerPage,$footer);
	}
	
	public function logout()
	{	
		$this->session->unset_userdata('user_name');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_type');
		$this->session->sess_destroy();
		redirect($this->login_redirect,'refresh');
	}
	
}