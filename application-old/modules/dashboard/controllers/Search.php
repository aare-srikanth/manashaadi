<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public $headerPage   = '../../views/header';

	public $footerPage   = '../../views/footer';

	public $listPage     = 'search';

	public $viewPage     = 'search-result';

	public $profilePage     = 'profile-view';



	public function __construct() 

	{

        parent::__construct();

        

		$this->load->model('Search_model','my_model');

		$this->load->model('Dashboard_model','dashboard_model');

		$this->load->model('My_account_model','my_model1');

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

       

      

      

		$this->load->view($this->headerPage,$data);

		$data['heights'] = $this->my_model->getallheights();

		$data['religions'] = $this->my_model->getallreligions();

		$data['mothertounges'] = $this->my_model->getallmothertounges();

		$data['countries'] = $this->my_model->getallcountries();

		$data['professions'] = $this->my_model->getallprofessions();

		$data['castes'] = $this->my_model->getallcastes();

		$data['get_all_records'] = $this->my_model->getallrecords();

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

		

		$data['profile_pic']=$this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));

	   $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));

       $data['profile_complete']=$this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));

       $data['recently_viewed']=$this->my_model->recently_viewed($this->session->userdata('user_id'));

       $data['shortlisted_count']=$this->my_model->shortlisted_count($this->session->userdata('user_id'));

       $data['ignored_count']=$this->my_model->ignored_count($this->session->userdata('user_id'));

       $data['contact_list']=$this->my_model->contact_count($this->session->userdata('user_id'));

       $data['payment_details']=$this->dashboard_model->get_payment_details($this->session->userdata('user_id'));

	        

	        $data['search_records'] = $this->my_model->getsearchrecords($gender,$heightfrom,$heightto,$agefrom,$ageto,$maritalstatus,$caste,$religion,$mothertounge,$education,$profession,$country);

	        $this->load->view($this->headerPage,$data);

	        $this->load->view($this->listPage,$data);

	        $this->load->view($this->footerPage);

	    }

	}

	public function profile($id){

	    if( $this->session->userdata('user_id')!="" && $this->session->userdata('user_email')!="") { 

	           //$data['profile_info'] = $this->my_model->get_profile_info($id); 

        	   $data['images_info'] = $this->my_model->get_images($id);

        	   $user_id=$this->my_model->get_user_id($id);

        	   $user_id=$user_id[0]['id'];

        $data['profile_pic']=$this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));

	    $data['primary_info'] = $this->my_model->get_primary_details($id);

	    $data['religion_info'] = $this->my_model->get_religion_details($user_id);

	    $data['profession_info'] = $this->my_model->get_profession_details($user_id);

	    $data['parents_info'] = $this->my_model->get_parents_details($user_id);

	    $data['siblings_info'] = $this->my_model->get_siblings_details($user_id);

       $data['profile_complete']=$this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));

       $data['recently_viewed']=$this->my_model1->recently_viewed($this->session->userdata('user_id'));

       $data['shortlisted_count']=$this->my_model1->shortlisted_count($this->session->userdata('user_id'));

       $data['ignored_count']=$this->my_model1->ignored_count($this->session->userdata('user_id'));

       $data['contact_list']=$this->my_model1->contact_count($this->session->userdata('user_id'));

        $data['payment_details']=$this->dashboard_model->get_payment_details($this->session->userdata('user_id'));

        	   

        	   

        	   $this->load->view($this->headerPage,$data);

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

	    

	    

	}

	

	

	public function shortlist_update(){

	    

	     $user_id=$this->session->userdata('user_id');

	     $to_profile_id = $this->input->post('to_user_id');

	     $to_user=$this->my_model->get_user_id($to_profile_id);

	     $to_user_id=$to_user[0]['id'];

	     $this->my_model->update_shortlist_status($user_id,$to_user_id); 

	    

	    

	}

	

		public function ignore_update(){

	    

	     $user_id=$this->session->userdata('user_id');

	     $to_profile_id = $this->input->post('to_user_id');

	     $to_user=$this->my_model->get_user_id($to_profile_id);

	     $to_user_id=$to_user[0]['id'];

	     $this->my_model->update_ignored_status($user_id,$to_user_id); 

	    

	    

	}

	

	

	public function contact_update(){

	    

	     $user_id=$this->session->userdata('user_id');

	     $to_profile_id = $this->input->post('to_user_id');

	     $to_user=$this->my_model->get_user_id($to_profile_id);

	     $to_user_id=$to_user[0]['id'];

	     $this->my_model->update_contact_list($user_id,$to_user_id); 

	    

	}

	

}

