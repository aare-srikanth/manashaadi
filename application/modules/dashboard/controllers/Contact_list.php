<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_list extends CI_Controller {
    
    public $headerPage   = '../../views/header';
	public $footerPage   = '../../views/footer';

public function __construct() {
                parent::__construct();
                $this->load->model('Dashboard_model','dashboard_model');
                $this->load->model('Search_model','search_model');
                $this->load->model('My_account_model','my_account_model');
                $this->load->model('My_contact_model','my_model');
                $this->load->library('email');
                error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
                error_reporting(0);
                ini_set('display_errors','off'); 
            }
            
            public function index(){
                
       $data['get_my_contactlist'] = $this->my_model->getcontactlist();
       
      
      
      
       
              
         $data['profile_pic']=$this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));        
        $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));        
        $data['recently_viewed']=$this->my_account_model->recently_viewed($this->session->userdata('user_id'));
       $data['shortlisted_count']=$this->my_account_model->shortlisted_count($this->session->userdata('user_id'));
       $data['ignored_count']=$this->my_account_model->ignored_count($this->session->userdata('user_id'));
       $data['contact_list']=$this->my_account_model->contact_count($this->session->userdata('user_id'));
       $data['payment_details']=$this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
        $data['profile_complete']=$this->dashboard_model->get_profile_complete($this->session->userdata('user_id')); 
        
        
        $data['religion_details']=$this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
       $data['view_short_ignore']=$this->my_account_model->view_short_ignore($this->session->userdata('user_id'));
       $data['contact']=$this->my_account_model->contact($this->session->userdata('user_id'));
       
       	$data['heights'] = $this->my_account_model->getallheights();
		$data['religions'] = $this->my_account_model->getallreligions();
		$data['mothertounges'] = $this->my_account_model->getallmothertounges();
		$data['countries'] = $this->my_account_model->getallcountries();
		$data['professions'] = $this->my_account_model->getallprofessions();
		$data['castes'] = $this->my_account_model->getallcastes();
        
                $this->load->view($this->headerPage,$data);
                $this->load->view('contact_list',$data);
                $this->load->view($this->footerPage);
                
            }
            
            
            
}
            
 ?>