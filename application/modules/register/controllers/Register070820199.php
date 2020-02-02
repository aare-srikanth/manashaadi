<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller {
	public $headerPage = '../../views/header-old';
	public $footerPage = '../../views/footer-old';
	public $listPage   = 'register';
	public $religionPage = 'religion-details';
	public $professionPage = 'professional-details';
	public $searchPage = 'search';
	public $parentsPage = 'parents-info';
	public $siblingsPage = 'siblings-info';
	public $photosPage = 'photos-info';
	
	public function __construct() {
        parent::__construct();
		
		$this->load->model('Register_model','my_model');
		$this->load->library('email');
		$this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off'); 
    }
	
	public function index(){
	   
		if($this->input->post('submit')!='')
		{
		    
		    $email = $this->input->post('email');
			$mobile = $this->input->post('mobile');
			
            $exit_details = $this->my_model->exit_details($email,$mobile);
            if($exit_details == 0) {
		    $insert_id = $this->my_model->add_primaryinfo();
			if($insert_id)
			{
    		    $message = 'Thanks for registering in mana shaadi. Your login credentials are here ' . "\n\n" . 'Email: ' . $this->input->post('email') . "\n\n" . 'Password: ' . $this->input->post('password');
				$this->email->from('info@manashaadi.com');
				$this->email->to($email); 
				$this->email->subject('Mana Shaadi Registration');
				$this->email->message($message);	
				$this->email->send();
				
				$updateBatteryProfile=$this->my_model->update_battery_primary($insert_id);
				
    			redirect(site_url()."register/religion/".$insert_id);
			}
			else
			{
			    $this->session->set_flashdata('msg_succ', 'Something Went Wrong');
    				redirect(site_url()."register");
			}
			
			
			
        }else
			{
				$this->session->set_flashdata('msg_succ', 'Record Already Exists');
    				redirect(site_url()."register");
			}
		}
		$data = $this->my_model->get_last_id();
		$data['id'] = $data['id'];
	    $data['countries'] = $this->my_model->get_all_countries();
		$this->load->view($this->headerPage,$header);
		$this->load->view($this->listPage,$data);
		$this->load->view($this->footerPage,$footer);
	}
	public function religion($id)
	{
	  
	   if($this->input->post('submit')!='')
		{
		    $user_id = $this->uri->segment(3);
		    $result = $this->my_model->add_religioninfo();
			if($result)
			{
    		   $updateBatteryProfile=$this->my_model->update_battery_religion($user_id);
				
    			redirect(site_url()."register/profession/".$user_id);
			}
			else
			{
			    $this->session->set_flashdata('msg_succ', 'Something Went Wrong');
    			redirect(site_url()."register/religion/".$user_id);
				
			}
		}
		
	    //$this->load->view($this->headerPage,$header);
	    $data['users_info'] = $this->my_model->getsessiondetails($this->uri->segment(3));
	    $data['heights'] = $this->my_model->get_all_heights();
	    $data['religions'] = $this->my_model->get_all_religions();
	    $data['mother_tounges'] = $this->my_model->get_all_mothertounges();
	    $data['castes'] = $this->my_model->get_all_castes();
	    $data['zodic_signs'] = $this->my_model->get_all_zodic_signs();
	    $data['stars'] = $this->my_model->get_all_stars();
		$this->load->view($this->religionPage,$data);
	    //$this->load->view($this->footerPage,$footer);
	}
	public function profession($id)
	{ 
	    if($this->input->post('submit')!='')
		{
		    $user_id = $this->uri->segment(3);
		    $result = $this->my_model->add_profession_info();
			if($result)
			{
    		    $updateBatteryProfile=$this->my_model->update_battery_profession($id);
    			redirect(site_url()."register/parents/".$user_id);
			}
			else
			{
			    $this->session->set_flashdata('msg_succ', 'Something Went Wrong');
    			redirect(site_url()."register/religion/".$user_id);
				
			}
		}
	    //$this->load->view($this->headerPage);
	    $data['users_info'] = $this->my_model->getsessiondetails($this->uri->segment(3));
	    $data['countries'] = $this->my_model->get_all_countries();
	    $data['professions'] = $this->my_model->getallprofessions();
	    $data['heighsteducation'] = $this->my_model->get_heighsteducations();
	    $this->load->view($this->professionPage,$data);
		$this->load->view($this->footerPage);
	}
	public function parents($id){
	    if($this->input->post('submit')!='')
		{
		    $user_id = $this->uri->segment(3);
		    $result = $this->my_model->add_parents_info();
			if($result)
			{
    		   $updateBatteryProfile=$this->my_model->update_battery_parents($id);
    			redirect(site_url()."register/siblings/".$user_id);
			}
			else
			{
			    $this->session->set_flashdata('msg_succ', 'Something Went Wrong');
    			redirect(site_url()."register/parents/".$user_id);
				
			}
		}
	    //$this->load->view($this->headerPage);
	    $data['users_info'] = $this->my_model->getsessiondetails($this->uri->segment(3));
	    $data['states'] = $this->my_model->get_all_states();
	    $this->load->view($this->parentsPage,$data);
		$this->load->view($this->footerPage);
	}
	public function siblings($id){
	     if($this->input->post('submit')!='')
		{
		    $user_id = $this->uri->segment(3);
		    $result = $this->my_model->add_siblingsinfo();
			if($result)
			{
    		   $updateBatteryProfile=$this->my_model->update_battery_siblings($id);
    			redirect(site_url()."register/upload/".$user_id);
			}
			else
			{
			    $this->session->set_flashdata('msg_succ', 'Something Went Wrong');
    			redirect(site_url()."register/siblings/".$user_id);
				
			}
		}
		$data['users_info'] = $this->my_model->getsessiondetails($this->uri->segment(3));
	   // $this->load->view($this->headerPage);
	    $this->load->view($this->siblingsPage,$data);
		$this->load->view($this->footerPage);
	}
	public function upload($id){
	    $data = array();
        // If file upload form submitted
        if($this->input->post('submit_image') && !empty($_FILES['images']['name'])){
            $filesCount = count($_FILES['images']['name']);
            if($filesCount <=3){
               for($i = 0; $i < $filesCount; $i++){
                   $j=$i+1;
                   $user_id=$this->uri->segment(3);
                /*$_FILES['file']['name']     = $user_id."_".$_FILES['images']['name'][$i];*/
                $image_type=$_FILES['images']['type'][$i];
                $image_type=explode("/",$image_type);
                $image_type=".".$image_type[1];
                
                $_FILES['file']['name']     = "image_".$j.$image_type;
                $_FILES['file']['type']     = $_FILES['images']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['images']['error'][$i];
                $_FILES['file']['size']     = $_FILES['images']['size'][$i];
                
                $target_path = "images/profilepics/".$user_id;
            
           
            if(!is_dir($target_path)){
            mkdir($target_path);
            } 
                
                
                $uploadPath = $target_path;
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('file')){
                     $user_id=$this->uri->segment(3);
                    $fileData = $this->upload->data();
                    $uploadData[$i]['photoname'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_date'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['MS_id'] = $this->uri->segment(3);
                    
                    if($i==0){
                        $uploadData[$i]['ismain'] = 1;
                    }else{
                        $uploadData[$i]['ismain'] = 0;
                    }
                    
                }
                } 
            }else{ ?>
                <script>
                    alert("You can select only 3 images");
                </script>
            <?php }
            
            
            if(!empty($uploadData)){
                $insert = $this->my_model->add_images($uploadData);
                if($insert){
                    
                    $updateBatteryProfile=$this->my_model->update_battery_images($id);
                  // $this->session->set_flashdata('msg_succ', 'Registered Successfully');
    			//redirect(site_url()."register/upload/".$user_id); ?>
    			<script>
    			    alert('Registration Done Successfully');
    			    window.location = "<?php echo site_url();?>";
    			</script>
               <?php }else{
                      $this->session->set_flashdata('msg_succ', 'Something Went Wrong');
    			redirect(site_url()."register/upload/".$user_id);
                }
            }
        }
        //$this->load->view($this->headerPage);
	    $this->load->view($this->photosPage);
	    //$this->load->view($this->footerPage);
	}
	public function getsubcastes()
	{
		$caste =	$this->input->post('valu');
		$castes = $this->my_model->get_all_subcastes_ajax($caste);
		$selBox ='<option value="">---Select Subcaste---</option>';
		foreach($castes as $key => $value){
				$selBox .= '<option value="'.$value['subcaste'].'">'.$value['subcaste'].'</option>';
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
	public function getstates()
	{
		$country_id =	$this->input->post('valu');
		$states = $this->my_model->get_all_states_ajax($country_id);
		$selBox ='<option value="">---Select States---</option>';
		foreach($states as $key => $value){
				$selBox .= '<option value="'.$value['state'].'">'.$value['state'].'</option>';
			}
		echo $selBox;
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
	public function get_mysqli() 
	{ 
       $db = (array)get_instance()->db;
       return mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
    }
}
