<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search_partner extends CI_Controller {
	public $headerPage   = '../../views/header';
	public $footerPage   = '../../views/footer';
	public $listPage     = 'search_partner';
	public $viewPage     = 'search-result';
	public $profilePage     = 'profile-view';

	public function __construct() 
	{
        parent::__construct();
        
		$this->load->model('Search_partner_model','my_model');
			$this->load->model('My_account_model','my_model1');
		$this->load->model('Dashboard_model','dashboard_model');

		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off');
    }
	
	public function index(){
	    
	    
	
		$data['heights'] = $this->my_model->getallheights();
		$data['religions'] = $this->my_model->getallreligions();
		$data['mothertounges'] = $this->my_model->getallmothertounges();
		$data['countries'] = $this->my_model->getallcountries();
		$data['professions'] = $this->my_model->getallprofessions();
		$data['castes'] = $this->my_model->getallcastes();
		
	  $data['profile_pic']=$this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
	  $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
      $data['profile_complete']=$this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
      $data['payment_details']=$this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
      $data['religion_details']=$this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
      
      
		$this->load->view($this->headerPage,$data);
		$this->load->view($this->listPage,$data);
		$this->load->view($this->footerPage);
	}


	public function searchprofiles(){
	     if($this->input->post('submit')!=''){
	         
	         $data['religion_details']=$this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
	         $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
	         
	         
	         
	        if($data['primary_info']['gender']=="male"){
	            $gender="female";
	        }else if($data['primary_info']['gender']=="female"){
	            $gender="male";
	        }
	        
	         
	        /*$gender = $this->input->post('gender');*/
	        
	        
	        $heightfrom = $this->input->post('heightfrom');
	        $this->session->set_userdata('heightfrom', $heightfrom);



	        $heightto = $this->input->post('heightto');
	        $this->session->set_userdata('heightto', $heightto);


	        $agefrom = $this->input->post('agefrom');
	        $this->session->set_userdata('agefrom', $agefrom);
	        
	        $ageto = $this->input->post('ageto');
	        $this->session->set_userdata('ageto', $ageto);
	        $maritalstatus = $this->input->post('maritalstatus');
	        $this->session->set_userdata('maritalstatus', $maritalstatus);
	        /*$caste = $this->input->post('caste');*/
	        $caste = $data['religion_details']['caste'];
	        $this->session->set_userdata('caste', $caste);
	 
	        $religion = $this->input->post('religion');
	        $this->session->set_userdata('religion', $religion);
	        $mothertounge = $this->input->post('mothertounge');
	        $this->session->set_userdata('mothertounge', $mothertounge);
	        $education = $this->input->post('education');
	         $this->session->set_userdata('education', $education);
	        $profession = $this->input->post('profession');
	        $this->session->set_userdata('profession', $profession);
	        $country = $this->input->post('country');
	        $this->session->set_userdata('country', $country);
	        
	        
	       
	   $data['profile_pic']=$this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
	   
       $data['profile_complete']=$this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
       $data['recently_viewed']=$this->my_model1->recently_viewed($this->session->userdata('user_id'));
       $data['shortlisted_count']=$this->my_model1->shortlisted_count($this->session->userdata('user_id'));
       $data['ignored_count']=$this->my_model1->ignored_count($this->session->userdata('user_id'));
       $data['contact_list']=$this->my_model1->contact_count($this->session->userdata('user_id'));
       $data['payment_details']=$this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
	        
	        
	        $data['search_records'] = $this->my_model->getsearchrecords($gender,$heightfrom,$heightto,$agefrom,$ageto,$maritalstatus,$caste,$religion,$mothertounge,$education,$profession,$country);
	    
	        $this->load->view($this->headerPage,$data);
	        $this->load->view($this->viewPage,$data);
	        $this->load->view($this->footerPage);
	    }
	}
	
	
	// for pagination
	
	public function searchprofilesPage(){
	    
	    $data['religion_details']=$this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
	         $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
	         
	         
	         
	        if($data['primary_info']['gender']=="male"){
	            $gender="female";
	        }else if($data['primary_info']['gender']=="female"){
	            $gender="male";
	        }
	    
	        $heightfrom = $this->session->userdata('heightfrom');

	        $heightto = $this->session->userdata('heightto');

	        $agefrom = $this->session->userdata('agefrom');



	        $ageto = $this->session->userdata('ageto');

	        $maritalstatus = $this->session->userdata('maritalstatus');

	        
	        $caste = $data['religion_details']['caste'];

	        $religion = $this->session->userdata('religion');

	        $mothertounge = $this->session->userdata('mothertounge');

	        $education = $this->session->userdata('education');

	        $profession = $this->session->userdata('profession');


	        $country = $this->session->userdata('country');


	    
	    $data['search_records'] = $this->my_model->getsearchrecords($gender,$heightfrom,$heightto,$agefrom,$ageto,$maritalstatus,$caste,$religion,$mothertounge,$education,$profession,$country);
	        $this->load->view($this->headerPage,$data);
	        $this->load->view($this->viewPage,$data);
	        $this->load->view($this->footerPage);
	    
	    
	}
	
	
	public function profile($id){
	    if( $this->session->userdata('user_id')!="" && $this->session->userdata('user_email')!="") { 
	           $data['profile_info'] = $this->my_model->get_profile_info($id); 
        	   $data['images_info'] = $this->my_model->get_images($id); 
        	   $this->load->view($this->headerPage);
        	   $this->load->view($this->profilePage,$data);
        	   $this->load->view($this->footerPage);
	    }else{
	        return redirect('register');
	    }
	}
}
