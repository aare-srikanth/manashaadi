<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class My_account extends CI_Controller {
	public $headerPage   = '../../views/header';
	public $footerPage   = '../../views/footer';
	public $listPage     = 'my_account';
	public $viewPage     = 'search-result';
	public $profilePage     = 'profile-view';

	public function __construct() 
	{
        parent::__construct();
        
		$this->load->model('My_account_model','my_model');
		$this->load->model('Dashboard_model','dashboard_model');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off');
    }
	
	public function index(){
	   $data['profile_pic']=$this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
	   $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
       $data['profile_complete']=$this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
       $data['recently_viewed']=$this->my_model->recently_viewed($this->session->userdata('user_id'));
       $data['shortlisted_count']=$this->my_model->shortlisted_count($this->session->userdata('user_id'));
       $data['ignored_count']=$this->my_model->ignored_count($this->session->userdata('user_id'));
       $data['contact_list']=$this->my_model->contact_count($this->session->userdata('user_id'));
       $data['payment_details']=$this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
       $data['religion_details']=$this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
       $data['view_short_ignore']=$this->my_model->view_short_ignore($this->session->userdata('user_id'));
       $data['contact']=$this->my_model->contact($this->session->userdata('user_id'));
       
       
    
       foreach($data['view_short_ignore'] as $value){
           $res[]=$value['to_msid'];
       }
       
       $data['view_short_ignore_list']=$res;
       
       
       foreach($data['contact'] as $value){
           $res1[]=$value['to_MSid'];
       }
       
       $data['contact_array_list']=$res1;
       
		$data['heights'] = $this->my_model->getallheights();
		$data['religions'] = $this->my_model->getallreligions();
		$data['mothertounges'] = $this->my_model->getallmothertounges();
		$data['countries'] = $this->my_model->getallcountries();
		$data['professions'] = $this->my_model->getallprofessions();
		$data['castes'] = $this->my_model->getallcastes();
		
		
		$data['get_all_records'] = $this->my_model->getallrecords($res,$res1);
		
		$this->load->view($this->headerPage,$data);
		$this->load->view($this->listPage,$data);
		$this->load->view($this->footerPage);
	}
	public function searchprofiles(){
	     if($this->input->post('submit')!=''){
	         
	         
	        $gender = $this->input->post('gender');
	        $heightfrom = $this->input->post('heightfrom');
	        $heightto = $this->input->post('heightto');
	        $agefrom = $this->input->post('age-from');
	        $ageto = $this->input->post('age-to');
	        $maritalstatus = $this->input->post('maritalstatus');
	        $caste = $this->input->post('caste');
	        $religion = $this->input->post('religion');
	        $mothertounge = $this->input->post('mothertounge');
	        $education = $this->input->post('education');
	        $profession = $this->input->post('profession');
	        $country = $this->input->post('country');
	        
	         $data['heights'] = $this->my_model->getallheights();
		$data['religions'] = $this->my_model->getallreligions();
		$data['mothertounges'] = $this->my_model->getallmothertounges();
		$data['countries'] = $this->my_model->getallcountries();
		$data['professions'] = $this->my_model->getallprofessions();
		$data['castes'] = $this->my_model->getallcastes();
	        
	        $data['search_records'] = $this->my_model->getsearchrecords($gender,$heightfrom,$heightto,$agefrom,$ageto,$maritalstatus,$caste,$religion,$mothertounge,$education,$profession,$country);
	        $this->load->view($this->headerPage);
	        $this->load->view($this->listPage,$data);
	        $this->load->view($this->footerPage);
	    }
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
	
	public function view_update(){
	    
	     $user_id=$this->session->userdata('user_id');
	     $to_profile_id = $this->input->post('to_user_id');
	     
	     $to_user=$this->my_model->get_user_id($to_profile_id);
	     $to_user_id=$to_user[0]['id'];
	     $this->my_model->update_view_status($user_id,$to_user_id); 
	     
	     $data['check_contact']=$this->my_model->get_contact_list($user_id,$to_user_id); 
	   
	     echo count($data['check_contact']);
	    
	}
	
	public function view_profile_update(){
	    
	     $user_id=$this->session->userdata('user_id');
	     $to_profile_id = $this->input->post('to_user_id');
	     
	     $to_user=$this->my_model->get_user_id($to_profile_id);
	     $to_user_id=$to_user[0]['id'];
	     $this->my_model->update_viewprofile_status($user_id,$to_user_id); 
	     
	     $data['check_contact']=$this->my_model->get_contact_list($user_id,$to_user_id); 
	   
	     echo count($data['check_contact']);
	    
	}
	
	
	public function shortlist_update(){
	    
	     $user_id=$this->session->userdata('user_id');
	     $to_profile_id = $this->input->post('to_user_id');
	     $to_user=$this->my_model->get_user_id($to_profile_id);
	     $to_user_id=$to_user[0]['id'];
	     $this->my_model->update_shortlist_status($user_id,$to_user_id); 
	     
	     $data['check_contact']=$this->my_model->get_contact_list($user_id,$to_user_id); 
	   
	     echo count($data['check_contact']);
	    
	    
	}
	
		public function ignore_update(){
	    
	     $user_id=$this->session->userdata('user_id');
	     $to_profile_id = $this->input->post('to_user_id');
	     $to_user=$this->my_model->get_user_id($to_profile_id);
	     $to_user_id=$to_user[0]['id'];
	     $this->my_model->update_ignored_status($user_id,$to_user_id); 
	     
	     $data['check_contact']=$this->my_model->get_contact_list($user_id,$to_user_id); 
	   
	     echo count($data['check_contact']);
	    
	}
	
	
	public function contact_update(){
	    
	     $user_id=$this->session->userdata('user_id');
	     $to_profile_id = $this->input->post('to_user_id');
	     $to_user=$this->my_model->get_user_id($to_profile_id);
	     $to_user_id=$to_user[0]['id'];
	     $count=$this->my_model->update_contact_list($user_id,$to_user_id);
	     
	}
	
}
