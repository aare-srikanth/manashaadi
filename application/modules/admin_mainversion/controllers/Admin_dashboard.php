<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        class Dashboard extends CI_Controller {
        public $headerPage = '../../views/header';
        public $footerPage = '../../views/footer';
        public $listPage = 'dashboard';
        public $religionPage = 'religion-info';
        public $professionalPage = 'professional-info';
        public $parentsPage = 'parents-info';
        public $siblingsPage = 'siblings-info';
        public $viewPage = 'view-profile';
        public $listPage_redirect ='home';
        public $login_redirect    ='home';
        public $imagesPage = 'images-info';
        public $imagesRedirect = 'dashboard/imagesinfo';
        public $paymentPage='payment';

            public function __construct() {
                parent::__construct();
                $this->load->model('Dashboard_model','my_model');
                $this->load->model('Search_model','my_model1');
                $this->load->model('My_account_model','my_model2');
                $this->load->library('email');
                error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
                error_reporting(0);
                ini_set('display_errors','off'); 
            }
            public function index(){
                if($this->session->userdata('user_email') != '' &&  $this->session->userdata('user_id') != '')
                { 
                if($this->input->post('submit')!=""){
                $user_id = $this->input->post('user_id');
                $profile_id = substr($this->input->post('year'), -2); 
                $age = date('Y')-$this->input->post('year');
                $data = array(
                'mobile' => $this->input->post('mobile'),
                'first_name'    => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'gender' => $this->input->post('gender'),
                'date' => $this->input->post('date'),
                'month' => $this->input->post('month'),
                'year' =>$this->input->post('year'),
                'profile_id'=> 'MS'.$profile_id. '0000' . $user_id,
                'living_in'=>$this->input->post('country'),
                'age' => $age,
                'updated_on'=>date('Y-m-d H:i:s')
                );
                $this->db->where('id', $user_id);
                $query = $this->db->update('tbl_primary_info', $data);
                if($query) {
                $data['msg'] = "Profile Updated Successfully";
                $data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));
                $this->load->view($this->headerPage,$data);
                $data['countries'] = $this->my_model->get_all_countries();
                $this->load->view($this->listPage,$data);
                $this->load->view($this->footerPage);
                }
                }else{
                
               $data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
               $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
               $data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));
               $data['countries'] = $this->my_model->get_all_countries();
               $data['payment_details']=$this->my_model->get_payment_details($this->session->userdata('user_id'));
      
                
                  //var_dump($data['profile_complete']);
                  
                $this->load->view($this->headerPage,$data);
                $this->load->view($this->listPage,$data);
                $this->load->view($this->footerPage);
                }
                }
                else
                {
                redirect($this->listPage_redirect,'refresh');
                }
            }
            public function religion(){
                if($this->session->userdata('user_email') != '' &&  $this->session->userdata('user_id') != '')
                {
                if($this->input->post('submit')!=""){
                 $user_id =  $this->input->post('user_id');   
                $set_data = array
                (
                'user_id'=> $user_id,
                'marital_status'    => $this->input->post('marital_status'),
                'height'    =>$this->input->post('height'),
                'religion' => $this->input->post('religion'),
                'mother_tounge'    => $this->input->post('mothertounge'),
                'caste'    =>$this->input->post('caste'),
                'sub_caste' => $this->input->post('subcaste'),
                'gothram' => $this->input->post('gothram'),
                'place_of_birth' => $this->input->post('place'),
                'time_of_birth' => $this->input->post('time'),
                'star'=>$this->input->post('star'),
                'raasi'=>$this->input->post('raasi'),
                'dosham'=>$this->input->post('dosham'),
                'updated_on'=>date('Y-m-d H:i:s')
                );
                $this->db->where('user_id', $user_id);
                $query = $this->db->update('tbl_religion_info', $set_data);
                if($query) {
                $data['msg'] = "Profile Updated Successfully";
                
                $data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));
                $this->load->view($this->headerPage,$data);
                $data['religion_info'] = $this->my_model->get_religion_details($this->session->userdata('user_id'));
                $data['heights'] = $this->my_model->get_all_heights();
                $data['religions'] = $this->my_model->get_all_religions();
                $data['mother_tounges'] = $this->my_model->get_all_mothertounges();
                $data['castes'] = $this->my_model->get_all_castes();
                $data['subcastes'] = $this->my_model->get_all_subcastes();
                $data['stars'] = $this->my_model->get_all_stars();
                $data['zodic_signs'] = $this->my_model->get_all_zodic_signs();
                $this->load->view($this->religionPage,$data);
                $this->load->view($this->footerPage);
                }
                }else{
                $data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));
                $data['payment_details']=$this->my_model->get_payment_details($this->session->userdata('user_id'));
                $this->load->view($this->headerPage,$data);
                $data['religion_info'] = $this->my_model->get_religion_details($this->session->userdata('user_id'));
               
                $data['heights'] = $this->my_model->get_all_heights();
                $data['religions'] = $this->my_model->get_all_religions();
                $data['mother_tounges'] = $this->my_model->get_all_mothertounges();
                $data['castes'] = $this->my_model->get_all_castes();
                $data['subcastes'] = $this->my_model->get_all_subcastes();
                $data['stars'] = $this->my_model->get_all_stars();
                $data['zodic_signs'] = $this->my_model->get_all_zodic_signs();
                $this->load->view($this->religionPage,$data);
                $this->load->view($this->footerPage);
                } 
                }
                else
                {
                redirect($this->listPage_redirect,'refresh');
                }
            }
            public function professionalinfo(){
                if($this->session->userdata('user_email') != '' &&  $this->session->userdata('user_id') != '')
                {
                if($this->input->post('submit')!=""){
                     $user_id =  $this->input->post('user_id');   
                $set_data = array
                (
                'user_id'=> $user_id,
                'heighst_education'    => $this->input->post('highest_education'),
                'education_degree'    => $this->input->post('education_degree'),
                'specialization' => $this->input->post('specialization'),
                'university'    => $this->input->post('university'),
                'college'    => $this->input->post('college'),
                'education_description'    => $this->input->post('education-details'),
                'employee_in' => $this->input->post('employee_in'),
                'occupation' =>$this->input->post('occupation'),
                'currency' => $this->input->post('currency'),
                'annual_income' => $this->input->post('monthly_income'),
                'company'=>$this->input->post('company'),
                'about_profession'=>$this->input->post('about_profession'),
                'country'=>$this->input->post('groom_country'),
                'state'=>$this->input->post('state_id'),
                'city'=>$this->input->post('city'),
                'about_me'=>$this->input->post('about'),
                'visatype'=>$this->input->post('visatype'),
                'residing-since'=>$this->input->post('residing-since'),
                'arrival-date'=>$this->input->post('arrival-date'),
                'departure-date'=>$this->input->post('departure-date'),
                'updated_on'=>date('Y-m-d H:i:s')
                );
               
                $this->db->where('user_id', $user_id);
                $query = $this->db->update('tbl_professional_info', $set_data);
                if($query) {
                $data['msg'] = "Profile Updated Successfully";
                
                $data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));
                $this->load->view($this->headerPage,$data);
                
                $data['professional_info'] = $this->my_model->get_professional_details($this->session->userdata('user_id'));
                $data['heighsteducation'] = $this->my_model->get_heighsteducations();
                $data['educationdegree'] = $this->my_model->get_educationdegrees();
                $data['specialization'] = $this->my_model->get_specializations();
                $data['countries'] = $this->my_model->get_all_countries();
                $data['states'] = $this->my_model->get_all_states();
                $data['professions'] = $this->my_model->getallprofessions();
                $this->load->view($this->professionalPage,$data); 
                $this->load->view($this->footerPage);
                }
                }else{ 
                    
                $data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));
                $data['payment_details']=$this->my_model->get_payment_details($this->session->userdata('user_id'));
                $this->load->view($this->headerPage,$data);
                $data['professional_info'] = $this->my_model->get_professional_details($this->session->userdata('user_id'));
                $data['heighsteducation'] = $this->my_model->get_heighsteducations();
                $data['educationdegree'] = $this->my_model->get_educationdegrees();
                $data['specialization'] = $this->my_model->get_specializations();
                $data['countries'] = $this->my_model->get_all_countries();
                $data['states'] = $this->my_model->get_all_states();
                $data['professions'] = $this->my_model->getallprofessions();
                $this->load->view($this->professionalPage,$data);
                $this->load->view($this->footerPage);
                }
                }
                else
                {
                redirect($this->listPage_redirect,'refresh');
                }
            }
            public function parentsinfo(){
                if($this->session->userdata('user_email') != '' &&  $this->session->userdata('user_id') != '')
                {
                    if($this->input->post('submit')!="") { 
                         $user_id =  $this->input->post('user_id');
                    $set_data = array
        			(
        			
        			    'user_id'=> $user_id,
        				'father_name'    => $this->input->post('father-name'),
        				'father_education'    => $this->input->post('father-education'),
        				'father_profession' => $this->input->post('father-profession'),
        				'father_email'    => $this->input->post('father-email'),
        				
        				'father_mobile'    => $this->input->post('father-mobile'),
        				'fathers_father_name' => $this->input->post('fathers-father-name'),
        				'fathers_father_state' => $this->input->post('fathers-father-state'),
        				'fathers_father_district' => $this->input->post('fathers-father-district'),
        				'fathers_father_native_place' => $this->input->post('fathers-father-native-place'),
        				'mother_name'=>$this->input->post('mother-name'),
        				'mother_education'=>$this->input->post('mother-education'),
        				'mother_profession'=>$this->input->post('mother-profession'),
        				'mother_email'=>$this->input->post('mother-email'),
        				'mother_mobile'=>$this->input->post('mother-mobile'),
        				'mothers_father_name'=>$this->input->post('mothers-father-name'),
        				'mothers_father_state'=>$this->input->post('mothers-father-state'),
        				'mothers_father_district'=>$this->input->post('mothers-father-district'),
        				'mothers_father_native_place'=>$this->input->post('mothers-father-native-place'),
        				
        				'updated_on'=>date('Y-m-d H:i:s')
        			);
        			$this->db->where('user_id', $user_id);
                    $query = $this->db->update('tbl_parents_info', $set_data);
                    if($query) {
                    $data['msg'] = "Profile Updated Successfully";
                    $data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
                    $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
                    $data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));
                    
                    $this->load->view($this->headerPage,$data);
                    $data['parents_info'] = $this->my_model->get_parent_details($this->session->userdata('user_id'));
                     $data['states'] = $this->my_model->get_all_states();
                      $data['districts'] = $this->my_model->get_all_districts();
                    $this->load->view($this->parentsPage,$data);
                    $this->load->view($this->footerPage);
                }
                  
                    }else{
                        $data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
                        $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
                        $data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));
                        $data['payment_details']=$this->my_model->get_payment_details($this->session->userdata('user_id'));
                        $data['parents_info'] = $this->my_model->get_parent_details($this->session->userdata('user_id'));
                          $this->load->view($this->headerPage,$data);
                    
                     $data['states'] = $this->my_model->get_all_states();
                      $data['districts'] = $this->my_model->get_all_districts();
                    $this->load->view($this->parentsPage,$data);
                    $this->load->view($this->footerPage);
                    }
                }
                else{
                redirect($this->listPage_redirect,'refresh');
                }
            }
            public function siblingsinfo()
            {
                if($this->session->userdata('user_email') != '' &&  $this->session->userdata('user_id') != ''){
                     if($this->input->post('submit')!="") { 
                         $user_id =  $this->input->post('user_id');
                    	$set_data = array
            			(
            			    'user_id'=> $user_id,
            				'no_of_brothers'    => $this->input->post('no-of-brothers'),
            				'no_of_sisters'    => $this->input->post('no-of-sisters'),
            				'no_of_elder_brothers' => $this->input->post('no-of-elder-brothers'),
            				'no_of_younger_brothers'    => $this->input->post('no-of-younger-brothers'),
            				'no_of_elder_sisters'    => $this->input->post('no-of-elder-sisters'),
            				'no_of_younger_sisters' => $this->input->post('no-of-younger-sisters'),
            				'updated_on'=>date('Y-m-d H:i:s')
            			);
        			$this->db->where('user_id', $user_id);
                    $query = $this->db->update('tbl_siblings_info', $set_data);
                    if($query) {
                    $data['msg'] = "Profile Updated Successfully";
                    $data['siblings_info'] = $this->my_model->get_sibling_details($this->session->userdata('user_id'));
                    $data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
                    $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
                    $data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));

                    $this->load->view($this->headerPage,$data);
                    $this->load->view($this->siblingsPage,$data);
                    $this->load->view($this->footerPage);
                }
                  
                    }else{
                          $data['siblings_info'] = $this->my_model->get_sibling_details($this->session->userdata('user_id'));
                          $data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
                          $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
                          $data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));
                          $data['payment_details']=$this->my_model->get_payment_details($this->session->userdata('user_id'));

                            $this->load->view($this->headerPage,$data);
                            $this->load->view($this->siblingsPage,$data);
                            $this->load->view($this->footerPage);
                    }
               
                }
                else{
                redirect($this->listPage_redirect,'refresh');
                }
            }
             public function imagesinfo()
            {
                   $data['images_info'] = $this->my_model->get_images_details($this->session->userdata('user_id'));
                   $data['imagescount'] = $this->my_model->imagescount($this->session->userdata('user_id'));
                   $data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
                   $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
                   $data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));
                    $data['payment_details']=$this->my_model->get_payment_details($this->session->userdata('user_id'));
                   $this->load->view($this->headerPage,$data);
                   $this->load->view($this->imagesPage,$data);
                   $this->load->view($this->footerPage);
                   
                   
            }
            public function viewprofile(){
                if($this->session->userdata('user_email') != '' &&  $this->session->userdata('user_id') != ''){
                $data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));
                
               
                $data['profile_info'] = $this->my_model->get_profile_info($this->session->userdata('user_id'));
                $data['images_info'] = $this->my_model->get_images($this->session->userdata('user_id'));
                
                
                $data['religion_info'] = $this->my_model1->get_religion_details($this->session->userdata('user_id'));
	    $data['profession_info'] = $this->my_model1->get_profession_details($this->session->userdata('user_id'));
	    $data['parents_info'] = $this->my_model1->get_parents_details($this->session->userdata('user_id'));
	    $data['siblings_info'] = $this->my_model1->get_siblings_details($this->session->userdata('user_id'));
       $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
       $data['recently_viewed']=$this->my_model2->recently_viewed($this->session->userdata('user_id'));
       $data['shortlisted_count']=$this->my_model2->shortlisted_count($this->session->userdata('user_id'));
       $data['ignored_count']=$this->my_model2->ignored_count($this->session->userdata('user_id'));
       $data['contact_list']=$this->my_model2->contact_count($this->session->userdata('user_id'));
       $data['payment_details']=$this->my_model->get_payment_details($this->session->userdata('user_id'));
                $this->load->view($this->headerPage,$data);
                $this->load->view($this->viewPage,$data);
                $this->load->view($this->footerPage);
                }
                else{
                redirect($this->listPage_redirect,'refresh');
                }
            }
            
            public function payment(){
                
                if($this->session->userdata('user_email') != '' &&  $this->session->userdata('user_id') != ''){
                    
                    if($this->input->post('submit')!="") { 
                        
                         $userid=$this->session->userdata('user_id');
                         $paid_amount= $this->input->post('amount');
                         
                         if($paid_amount==5000){
                             $allowed_contacts='20';
                         }
                         else if($paid_amount==8000){
                             $allowed_contacts='40';
                         }
                         else if($paid_amount==10000){
                             $allowed_contacts='70';
                         }
                         
                $data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
                $data['payment_details']=$this->my_model->get_payment_details($this->session->userdata('user_id'));
                $data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));
                         
                            $date = new DateTime("+1 months");
                            $exp_date=$date->format("Y-m-d H:i:s");
                         
                               if(count($data['payment_details'])==0) {
                               
                                $data1 = array( 
                                    'user_id'	=>  $userid,
                                    'paid_amount'	=>  $_POST['amount'],
                                    'payment_type'	=>  'paid',
                                    'allowed_contacts'	=> $allowed_contacts,
                                    'createddate'	=>  date('Y-m-d H:i:s'),
                                    'expirydate'	=>  $exp_date
                                );
                                
                                
                                
                                $data['payment_success']=array(
                                    success_msg => 'success'
                                    );
                                
                                $this->db->insert('tbl_payments', $data1);
                                
                               
                              
                               }else{
                                   $data = array( 
                                    'paid_amount'	=>  $_POST['amount'],
                                    'payment_type'	=>  'paid',
                                    'allowed_contacts'	=> $allowed_contacts,
                                    'createddate'	=>  date('Y-m-d H:i:s'),
                                    'expirydate'	=>  $exp_date
                                );
                                $this->db->where('user_id', $userid);
                                $this->db->update('tbl_payments', $data);
                                
                                 $data['payment_success']=array(
                                    success_msg => 'Payment Done Successfully'
                                    );
                               }
                               
                              
                
                $this->load->view($this->headerPage,$data);
                $this->load->view($this->paymentPage,$data);
                $this->load->view($this->footerPage);
                
               
                 //header('Location: /test2/dashboard/payment');
                
             
                        
                    }else{
                $data['primary_info'] = $this->my_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete']=$this->my_model->get_profile_complete($this->session->userdata('user_id'));
                $data['payment_details']=$this->my_model->get_payment_details($this->session->userdata('user_id'));
                $data['profile_pic']=$this->my_model->get_profilepic_details($this->session->userdata('user_id'));
                
                $this->load->view($this->headerPage,$data);
                $this->load->view($this->paymentPage,$data);
                $this->load->view($this->footerPage);
                    }
                }
                else{
                redirect($this->listPage_redirect,'refresh');
                }
            }
            public function logout()
            {	
                $this->session->unset_userdata('user_login');
                $this->session->unset_userdata('user_id');
                $this->session->unset_userdata('user_email');
                $this->session->sess_destroy();
                redirect($this->listPage_redirect,'refresh');
            }
            public function emailssend($msg)
            {
                $this->load->library('email');
                $this->email->from("info@manashaadi.com", "Mnashaadi Team");
                $this->email->to('manasa@royalinfosys.com');
                $this->email->subject("Password was Reset Successfully...");
                $this->email->message($msg);
                return $result = $this->email->send();
            }
            public function getsubcastes()
            {
                $caste =	$this->input->post('valu');
                $castes = $this->my_model->get_all_subcastes_ajax($caste);
                $selBox ='
                <option value="">---Select Subcaste---</option>
                ';
                foreach($castes as $key => $value){
                $selBox .= '
                <option value="'.$value['subcaste'].'">'.$value['subcaste'].'</option>
                ';
                }
                echo $selBox;
            }
            public function getstates()
            {
                $country_id =	$this->input->post('valu');
                $states = $this->my_model->get_all_states_ajax($country_id);
                $selBox ='
                <option value="">---Select States---</option>
                ';
                foreach($states as $key => $value){
                $selBox .= '
                <option value="'.$value['state'].'">'.$value['state'].'</option>
                ';
                }
                echo $selBox;
            }
            public function getdistricts()
        	{
        		$state_id =	$this->input->post('value');
        		$districts = $this->my_model->get_all_districts_ajax($state_id);
        		$selBox ='<option value="">---Select District---</option>';
        		foreach($districts as $key => $value){
        				$selBox .= '<option value="'.$value['district'].'">'.$value['district'].'</option>';
        			}
        		echo $selBox;
        	}
        	public function imagesadd()
        	{
        	    if($this->input->post('submit') != '')
            		{
    				if ($_FILES['image']['name'] != '') {
    					$config['upload_path'] = './images/profilepics/';
    					$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
    					$config['max_size']  = '0';
    					$config['max_width']  = '0';
    					$config['max_height']  = '0';
    					$this->load->library('upload', $config);
    					
    					if(! $this->upload->do_upload('image')){
    						$data['msg'] = $this->upload->display_errors();
    					}else{
    						$data = $this->upload->data();
    						//echo '<pre>';print_r($data);
    						$ImgData = $data['file_name'];						
    					}
    		
    				} else {
    					$data['msg'] = 'Please Upload Image...';
    				}	
    				
    				$result = $this->my_model->add_record($ImgData);
    				if($result){
    					$this->session->set_flashdata('msg_succ', 'added Successfully...');
    					redirect($this->imagesRedirect);
    					} else {
    						$data['msg'] = "please try again...";
    					}
            		}
        	    $this->load->view($this->headerPage);
        	    $this->load->view('images-info-add');
        	     $this->load->view($this->footerPage);
        	}
        	
        	public function imagesedit($id)
        	{
        	    $data['record'] = $this->my_model->get_single_record($id);
        		$data['msg'] ='';
        		$old_image = $data['record']['image'];
        		if($this->input->post('submit') != '')
        		{
        			if ($_FILES['image']['name'] != '') 
        			{
        				$config['upload_path'] = './images/profilepics/';
        				$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        				$config['max_size']  = '0';
        				$config['max_width']  = '0';
        				$config['max_height']  = '0';
        				$this->load->library('upload', $config);
        				
        				if(! $this->upload->do_upload('image'))
        				{
        					$data['msg'] = $this->upload->display_errors();
        				} else
        				{
        					$data = $this->upload->data();
        					 $ImgData = $data['file_name'];
        				}
        			    }else
        			    {
        					 $ImgData= $old_image;
        				}
        			    $result = $this->my_model->update_record($id,$ImgData);
        			    if($result)
        			    {
        				
        			    $this->session->set_flashdata('msg_succ', 'updated Successfully...');
        				redirect($this->imagesRedirect);
        				} else 
        				{
        						
        					$data['msg'] = "please try again...";
        				}	
        		    }
        		$this->load->view($this->headerPage);
        		$this->load->view('images-info-edit',$data);
        		$this->load->view($this->footerPage);
        	}
        
        	public function imagestatus($id,$status){
            		$data['msg'] ='';
            		$statu = ($status == 1 ? 'Deactive' : 'Active');
            		if($id)
            		{
            			$result = $this->my_model->status_record($id,$status);
            			if($result)
            			{
            				$this->session->set_flashdata('msg_succ', $statu.' Successfully...');
            				redirect($this->imagesRedirect);
            			} else
            			{
            				$data['msg'] = " Status Not Updated...";
            			}
            		
            	    }
        	}
        	public function delete($id)
        	{ 
        		$data['msg'] ='';
        		if($id)
        		{
        			$result = $this->my_model->delete_record($id);
        			if($result)
        			{
        				$this->session->set_flashdata('msg_succ', 'Deleted Successfully...');
        				redirect($this->imagesRedirect);
        			} else 
        			{
        				$data['msg'] = "Not Deleted...";
        			}
        		}
        	}
        	public function getdegree()
        	{
        		$h_id =	$this->input->post('valu');
        		$degrees = $this->my_model->get_all_degrees_ajax($h_id);
        		$selBox ='<option value="">---Select Education First---</option>';
        		foreach($degrees as $key => $value){
        				$selBox .= '<option value="'.$value['educationdegree'].'">'.$value['educationdegree'].'</option>';
        			}
        		echo $selBox;
        	}
        	public function getspecialization()
        	{
        		$h_id =	$this->input->post('valu');
        		$specialization = $this->my_model->get_all_specialization_ajax($h_id);
        		$selBox ='<option value="">---Select Degree First---</option>';
        		foreach($specialization as $key => $value){
        				$selBox .= '<option value="'.$value['specialization'].'">'.$value['specialization'].'</option>';
        			}
        		echo $selBox;
        	}
    }