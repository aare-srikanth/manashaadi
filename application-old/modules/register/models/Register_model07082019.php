<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register_model extends CI_Model {
	
	public function __construct() 
	{
        parent::__construct();
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','ON'); 
		
    }
	
	public function get_all_countries()
	{
	    $this->db->select('*');
	    $this->db->from('tbl_country');
	    $this->db->where('status','1');
	    $this->db->order_by('country','asc');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	public function get_all_states()
	{
	    $this->db->select('state,status,id');
	    $this->db->from('tbl_state');
	    $this->db->where('status','1');
	    $this->db->order_by('state','asc');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	public function get_heighsteducations()
	{
	    $this->db->select('*');
	    $this->db->from('tbl_heighsteducation');
	    $this->db->where('status','1');
	    $this->db->order_by('heighsteducation','asc');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	 public function get_all_degrees_ajax($id) 
		{
    		$this->db->select("d.id,d.hid,d.status,d.educationdegree");
    		$this->db->from('tbl_educationdegree as d');
    		$this->db->select("e.heighsteducation");
    		$this->db->join('tbl_heighsteducation as e','d.hid=e.id','inner');
    		$this->db->where('d.status','1');
    		$this->db->where("e.heighsteducation",$id);
    		$query = $this->db->get();
    		$result = $query->result_array();
    		return $result;
	    }
	  public function get_all_specialization_ajax($id) 
		{
    		$this->db->select("s.id,s.hid,s.eid,s.status,s.specialization");
    		$this->db->from('tbl_specialization as s');
    		$this->db->select("d.educationdegree");
    		$this->db->join('tbl_educationdegree as d','s.eid=d.id','inner');
    		$this->db->where('s.status','1');
    		$this->db->where("d.educationdegree",$id);
    		$query = $this->db->get();
    		$result = $query->result_array();
    		return $result;
	    }
	 public function getallprofessions()
      {
          $this->db->select('profession,status');
          $this->db->from('tbl_profession');
          $this->db->where('status',1);
          $this->db->order_by('profession','asc');
          $query = $this->db->get();
          $result = $query->result_array();
          return $result;
      }
	public function get_all_states_ajax($id) 
	{
		$this->db->select("s.state,s.id,s.country_id");
		$this->db->from('tbl_state as s');
		$this->db->select("c.country");
		$this->db->join('tbl_country as c','s.country_id=c.id','inner');
		$this->db->where('s.status','1');
		$this->db->where("c.country",$id);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }
    	public function get_all_districts_ajax($id) 
	{
		$this->db->select("c.district,c.state_id,c.status");
		$this->db->from('tbl_district as c');
		$this->db->select("s.state");
		$this->db->join('tbl_state as s','c.state_id=s.id','inner');
		$this->db->where('c.status','1');
		$this->db->where("s.state",$id);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }
   public function get_last_id()
	{
	    $this->db->select('id');
	    $this->db->from('tbl_primary_info');
	    $this->db->limit('1');
	    $this->db->order_by('id','desc');
	    $query = $this->db->get()->row_array();
	 
	    return $query;
	}
	public function get_all_heights()
	{
	    $this->db->select('height,status');
	    $this->db->from('tbl_height');
	    $this->db->where('status','1');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	public function get_all_religions()
	{
	    $this->db->select('religion,status');
	    $this->db->from('tbl_religion');
	    $this->db->order_by('religion','asc');
	    $this->db->where('status','1');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	public function get_all_mothertounges()
	{
	    $this->db->select('mothertounge,status');
	    $this->db->from('tbl_mothertounge');
	    $this->db->order_by('mothertounge','asc');
	    $this->db->where('status','1');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	public function get_all_castes()
	{
	    $this->db->select('caste,status');
	    $this->db->from('tbl_caste');
	    $this->db->order_by('caste','asc');
	    $this->db->where('status','1');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	public function get_all_zodic_signs()
	{
	    $this->db->select('zodic,status');
	    $this->db->from('tbl_zodic');
	    $this->db->order_by('zodic','asc');
	    $this->db->where('status','1');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
		public function get_all_stars()
	{
	    $this->db->select('star,status');
	    $this->db->from('tbl_star');
	    $this->db->order_by('star','asc');
	    $this->db->where('status','1');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	  public function get_all_subcastes_ajax($caste) 
		{
    		$this->db->select("s.subcaste,s.status,s.caste_id");
    		$this->db->from('tbl_subcaste as s');
    		$this->db->select("c.caste");
    		$this->db->join('tbl_caste as c','s.caste_id=c.id','inner');
    		$this->db->where('s.status','1');
    		$this->db->where("c.caste",$caste);
    		$query = $this->db->get();
    		$result = $query->result_array();
    		return $result;
	    }
	    public function getsessiondetails($id)
	    {
	        $this->db->select("id,profile_id,first_name,last_name");
    		$this->db->from('tbl_primary_info');
    		$this->db->where("id",$id);
    		$query = $this->db->get();
    		$result = $query->row_array();
    		return $result;
	    }
		public function add_primaryinfo()
		{
		    $profile_id = substr($this->input->post('year'), -2);
		    $age = date('Y')-$this->input->post('year');
		    $data = $this->get_last_id();
		    $last_id = $data['id']+1;
			$set_data = array
			(
			
				'email'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('email',TRUE)),
				'password'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('password',TRUE)),
				'mobile' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('mobile',TRUE)),
				'first_name'    => mysqli_real_escape_string($this->get_mysqli(),ucwords($this->input->post('first_name',TRUE))),
				'last_name'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('last_name',TRUE)),
				'gender' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('gender',TRUE)),
				'date' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('date',TRUE)),
				'month' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('month',TRUE)),
				'year' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('year',TRUE)),
				'profile_id'=> 'MS'.$profile_id. '0000' . $last_id,
				'living_in'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('country',TRUE)),
				'age' => $age,
				'status'=>1,
				'registered_on'=>date('Y-m-d H:i:s')
			);
			$result = $this->db->insert("tbl_primary_info",$set_data);
			return $this->db->insert_id();
		}
		
			public function update_battery_primary($user_id)
		{
		    $set_data = array
			(
			
				'user_id' => $user_id,
				'basicdetails' => '10'
		
			);
			$result = $this->db->insert("tbl_profilebattery",$set_data);
			
			return 'true';
		}
		
		
		
		public function update_battery_religion($user_id)
		{
		    $set_data = array(
						'religion' => '10'
						);

		$this->db->where('user_id',$user_id);
		$result = $this->db->update('tbl_profilebattery',$set_data);
		return 'true';
		}
		
		public function update_battery_profession($user_id)
		{
		    $set_data = array(
						'edu_prof' => '20'
						);

		$this->db->where('user_id',$user_id);
		$result = $this->db->update('tbl_profilebattery',$set_data);
		return 'true';
		}
		
		
		public function update_battery_parents($user_id)
		{
		    $set_data = array(
						'parents' => '10'
						);

		$this->db->where('user_id',$user_id);
		$result = $this->db->update('tbl_profilebattery',$set_data);
		return 'true';
		}
		
		public function update_battery_siblings($user_id)
		{
		    $set_data = array(
						'Siblings' => '20'
						);

		$this->db->where('user_id',$user_id);
		$result = $this->db->update('tbl_profilebattery',$set_data);
		return 'true';
		}
		
		public function update_battery_images($user_id)
		{
		    $set_data = array(
						'photo' => '30'
						);

		$this->db->where('user_id',$user_id);
		$result = $this->db->update('tbl_profilebattery',$set_data);
		return 'true';
		}
		
		
		public function add_religioninfo()
		{
		    $user_id = $this->uri->segment(3);
			$set_data = array
			(
			
			    'user_id'=> $user_id,
				'marital_status'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('marital_status',TRUE)),
				'height'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('height',TRUE)),
				'religion' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('religion',TRUE)),
				'mother_tounge'    => mysqli_real_escape_string($this->get_mysqli(),ucwords($this->input->post('mothertounge',TRUE))),
				'caste'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('caste',TRUE)),
				'sub_caste' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('subcaste',TRUE)),
				'gothram' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('gothram',TRUE)),
				'place_of_birth' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('place',TRUE)),
				'time_of_birth' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('time',TRUE)),
				'star'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('star',TRUE)),
				'raasi'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('raasi',TRUE)),
				'dosham'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('dosham',TRUE)),
				'status'=>1,
				'created_time'=>date('Y-m-d H:i:s')
			);
			$result = $this->db->insert("tbl_religion_info",$set_data);
			
			return $result;
		}
		
		public function add_profession_info()
		{
		    $user_id = $this->uri->segment(3);
			$set_data = array
			(
			
			    'user_id'=> $user_id,
				'heighst_education'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('highest_education',TRUE)),
				'education_degree'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('education_degree',TRUE)),
				'specialization' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('specialization',TRUE)),
				'university'    => mysqli_real_escape_string($this->get_mysqli(),ucwords($this->input->post('university',TRUE))),
				'college'    => mysqli_real_escape_string($this->get_mysqli(),ucwords($this->input->post('college',TRUE))),
				'education_description'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('education-details',TRUE)),
				'employee_in' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('employee_in',TRUE)),
				'occupation' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('profession',TRUE)),
				'currency' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('currency',TRUE)),
				'annual_income' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('monthly_income',TRUE)),
				'company'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('company',TRUE)),
				'about_profession'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('about_profession',TRUE)),
				'country'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('groom_country',TRUE)),
				'state'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('state_id',TRUE)),
				'city'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('city',TRUE)),
				'about_me'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('about',TRUE)),
				'visatype'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('visatype',TRUE)),
				'residing-since'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('residing-since',TRUE)),
				'arrival-date'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('arrival-date',TRUE)),
				'departure-date'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('departure-date',TRUE)),
				'status'=>1,
				'created_time'=>date('Y-m-d H:i:s')
			);
		
			$result = $this->db->insert("tbl_professional_info",$set_data);
			return $result;
		}
		
		public function add_parents_info()
		{
		    $user_id = $this->uri->segment(3);
			$set_data = array
			(
			
			    'user_id'=> $user_id,
				'father_name'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('father-name',TRUE)),
				'father_education'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('father-education',TRUE)),
				'father_profession' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('father-profession',TRUE)),
				'father_email'    => mysqli_real_escape_string($this->get_mysqli(),ucwords($this->input->post('father-email',TRUE))),
				
				'father_mobile'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('father-mobile',TRUE)),
				'fathers_father_name' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('fathers-father-name',TRUE)),
				'fathers_father_state' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('fathers-father-state',TRUE)),
				'fathers_father_district' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('fathers-father-district',TRUE)),
				'fathers_father_native_place' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('fathers-father-native-place',TRUE)),
				'mother_name'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('mother-name',TRUE)),
				'mother_education'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('mother-education',TRUE)),
				'mother_profession'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('mother-profession',TRUE)),
				'mother_email'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('mother-email',TRUE)),
				'mother_mobile'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('mother-mobile',TRUE)),
				'mothers_father_name'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('mothers-father-name',TRUE)),
				'mothers_father_state'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('mothers-father-state',TRUE)),
				'mothers_father_district'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('mothers-father-district',TRUE)),
				'mothers_father_native_place'=>mysqli_real_escape_string($this->get_mysqli(),$this->input->post('mothers-father-native-place',TRUE)),
				'status'=>1,
				'registered_on'=>date('Y-m-d H:i:s')
			);
			//echo "<pre>";print_r($set_data);die();
			$result = $this->db->insert("tbl_parents_info",$set_data);
			return $result;
		}
		public function add_siblingsinfo(){
		    $user_id = $this->uri->segment(3);
			$set_data = array
			(
			
			    'user_id'=> $user_id,
				'no_of_brothers'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('no-of-brothers',TRUE)),
				'no_of_sisters'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('no-of-sisters',TRUE)),
				'no_of_elder_brothers' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('no-of-elder-brothers',TRUE)),
				'no_of_younger_brothers'    => mysqli_real_escape_string($this->get_mysqli(),ucwords($this->input->post('no-of-younger-brothers',TRUE))),
				
				'no_of_elder_sisters'    => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('no-of-elder-sisters',TRUE)),
				'no_of_younger_sisters' => mysqli_real_escape_string($this->get_mysqli(),$this->input->post('no-of-younger-sisters',TRUE)),
				'registered_on'=>date('Y-m-d H:i:s')
			);
			$result = $this->db->insert("tbl_siblings_info",$set_data);
			return $result;
		}
	public function add_images($uploadData){
        $insert = $this->db->insert_batch('upload-images',$uploadData);
        return $insert?true:false;
    }
     public function exit_details($email,$mobile) {
    	$this->db->select("email,mobile");
    	$this->db->from('tbl_primary_info');
    	$this->db->where('email',$email);
    	$this->db->or_where('mobile',$mobile);
    	$query = $this->db->get();
    	$result = $query->num_rows();
    	return $result;
    }
    public function get_mysqli()
	{
       $db = (array)get_instance()->db;
       return mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
    }
		
}
