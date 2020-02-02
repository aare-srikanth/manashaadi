<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Feedback extends CI_Controller {

	public $headerPage = '../../views/header';
	public $footerPage = '../../views/footer';
	public $listPage   = 'dashboard/feedback';
	
	public function __construct() {
        
        parent::__construct();
		
		$this->load->model('Feedback_model','feedback_model');
		$this->load->model('Dashboard_model','my_model');
		$this->load->library('email');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off'); 
    }
	
	public function index(){
		
		if(isset($_POST) && $this->input->post('submit')!='')
		{
			
			$result = $this->feedback_model->add_contact();
			if($result)
			{
               $message = 'Name: ' . $this->input->post('name') . "\n\n" . 'Email: ' . $this->input->post('email') . "\n\n" . 'Mobile: ' . $this->input->post('mobile') . "\n\n" . 'Message: ' . $this->input->post('message');
				$this->email->from($this->input->post('email'), $this->input->post('name'));
				$this->email->to('aaresrikanth@gmail.com'); 
				$this->email->subject('Manashaadi Feedback Form');
				$this->email->message($message);	
				$this->email->send();
				$this->session->set_flashdata('msg_succ', 'Contacted Successfully, We will get back to you...');
				redirect(site_url()."dashboard/feedback");
			}
			else
			{
				$this->session->set_flashdata('msg_succ', 'Failed Try Again');
				redirect(site_url()."dashboard/feedback");
			}
		}	
		$data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));
		$data['address_info']  = $this->feedback_model->get_address();
		$data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
        $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
        $data['payment_details']=$this->my_model->get_payment_details($this->session->userdata('user_id'));
      
		$this->load->view($this->headerPage,$data);
		$this->load->view($this->listPage,$data);
		$this->load->view($this->footerPage,$footer);
	}
}