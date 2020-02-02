<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	public $headerPage   = '../../views/header';
	public $footerPage   = '../../views/footer';
	
/*	public $headerPage   = '../../views/header';
	public $footerPage   = '../../views/footer';*/
	
	public $oldheaderPage   = '../../views/header';
	public $oldfooterPage   = '../../views/footer';
	
/*	public $listPage     = 'home1';*/
	public $listPage     = 'home';
	public $searchPage   = 'search';
	public $viewPage = 'search/search-result';
	
	
	public function __construct() 
	{
        parent::__construct();
        
		$this->load->model('Home_model','my_model');
		$this->load->library('email');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off');
    }
	
	public function index(){
	    
        $data['success_stories'] = $this->my_model->get_successstories();
        $data['religions'] = $this->my_model->get_all_religions();
        $data['mother_tounges'] = $this->my_model->get_all_mothertounges();
		$this->load->view($this->headerPage,$data);
		$this->load->view($this->listPage,$data);
		$this->load->view($this->footerPage,$footer);
	}
   public function search()
   {


      $gender =  $this->input->post('gender');
      
      $agefrom =  $this->input->post('agefrom');
      $ageto =  $this->input->post('ageto');
      $religion =  $this->input->post('religion');
      $mother_tounge =  $this->input->post('mother_tounge');
      
      $data['search_records'] = $this->my_model->getsearchrecords($gender,$agefrom,$ageto,$religion,$mother_tounge);
      //echo "<pre>";print_r($data['search_records']);exit;
  	  $this->load->view($this->oldheaderPage,$data);
	  $this->load->view($this->viewPage,$data);
	  $this->load->view($this->oldfooterPage,$footer);
   }
   
   public function subscribe(){
       
               $message = 'Email: '.$this->input->post('Email');
                $this->email->from($this->input->post('Email'));
				$this->email->to('aaresrikanth@gmail.com'); 
				$this->email->subject('New Subscription');
				$this->email->message($message);	
				$this->email->send();
				$this->session->set_flashdata('msg_succ', 'Subscribed Successfully');
				redirect(site_url());
			
   }
}
