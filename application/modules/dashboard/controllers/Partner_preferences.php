<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Partner_preferences extends CI_Controller {
	public $headerPage   = '../../views/header';
	public $footerPage   = '../../views/footer';
	public $listPage     = 'partner_preferences';
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
        
        
        if($this->input->post('submit')){
            
            $count['rows_count']=$this->my_model->get_user_count();
            
            $height_from=$this->input->post('heightfrom');
            $height_to=$this->input->post('heightto');
            $age_from=$this->input->post('agefrom');
            $age_to=$this->input->post('ageto');
            $marital_status=$this->input->post('maritalstatus');
            $mother_tongue=$this->input->post('mothertounge');
            $caste=$this->input->post('caste');
            $education=$this->input->post('education');
            $profession=$this->input->post('profession');
            $country=$this->input->post('country');
            
            
            $data=array(
                'ms_id' => $this->session->userdata('user_id'),
                'p_height_from' => $height_from,
                'p_heiight_to' => $height_to,
                'p_age_from' => $age_from, 
                'p_age_to' => $age_to,
                'p_marital_status' => $marital_status,
                'p_mother_tongue' => $mother_tongue,
                'p_caste' => $caste,
                'p_education' => $education,
                'p_profession' => $profession,
                'p_country' => $country
            );
            
         
            
            if($count['rows_count']==0){
                
            $this->db->insert('tbl_partner_preferences',$data);
            
            }else{
                
            $this->db->where('ms_id',$this->session->userdata('user_id'));
            $this->db->update('tbl_partner_preferences',$data);
            
            }
            
            
        }
        
	    
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
    
}

?>
