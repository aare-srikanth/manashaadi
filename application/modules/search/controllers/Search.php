<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search extends CI_Controller {
	public $headerPage   = '../../views/header_search';
	public $footerPage   = '../../views/footer';
	public $listPage     = 'search';
	public $viewPage     = 'search-result';
	public $profilePage     = 'profile-view';

	public function __construct() 
	{
        parent::__construct();
        
		$this->load->model('Search_model','my_model');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off');
    }
	
	public function index(){
		$this->load->view($this->headerPage);
		$data['heights'] = $this->my_model->getallheights();
		$data['religions'] = $this->my_model->getallreligions();
		$data['mothertounges'] = $this->my_model->getallmothertounges();
		$data['countries'] = $this->my_model->getallcountries();
		$data['professions'] = $this->my_model->getallprofessions();
		$data['castes'] = $this->my_model->getallcastes();
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
	        $data['search_records'] = $this->my_model->getsearchrecords($gender,$heightfrom,$heightto,$agefrom,$ageto,$maritalstatus,$caste,$religion,$mothertounge,$education,$profession,$country);
	        $this->load->view($this->headerPage);
	        $this->load->view($this->viewPage,$data);
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
}
