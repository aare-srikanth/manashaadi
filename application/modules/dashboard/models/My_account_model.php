<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class My_account_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }
    
    public function get_user_id($profile_id)
      {
          $this->db->select('id');
          $this->db->from('tbl_primary_info');
          $this->db->where('profile_id',$profile_id);
          $query = $this->db->get();
          $result = $query->result_array();
          return $result;
      }
    
    
      public function getallheights()
      {
          $this->db->select('height,status');
          $this->db->from('tbl_height');
          $this->db->where('status',1);
          $query = $this->db->get();
          $result = $query->result_array();
          return $result;
      }
       public function getallcastes()
      {
          $this->db->select('caste,status');
          $this->db->from('tbl_caste');
          $this->db->order_by('caste','asc');
          $this->db->where('status',1);
          $query = $this->db->get();
          $result = $query->result_array();
          return $result;
      }
      public function getallreligions()
      {
          $this->db->select('religion,status');
          $this->db->from('tbl_religion');
          $this->db->where('status',1);
          $this->db->order_by('religion','asc');
          $query = $this->db->get();
          $result = $query->result_array();
          return $result;
      }
       public function getallmothertounges()
      {
          $this->db->select('mothertounge,status');
          $this->db->from('tbl_mothertounge');
          $this->db->where('status',1);
          $this->db->order_by('mothertounge','asc');
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
       public function getallcountries()
      {
          $this->db->select('country,status');
          $this->db->from('tbl_country');
          $this->db->where('status',1);
          $this->db->order_by('country','asc');
          $query = $this->db->get();
          $result = $query->result_array();
          return $result;
      }
      public function getsearchrecords($gender,$heightfrom,$heightto,$agefrom,$ageto,$maritalstatus,$caste,$religion,$mothertounge,$education,$profession,$country)
      {
          
            $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id");
    	 	$this->db->from('tbl_primary_info as p');
    	 	$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
    	 	$this->db->join('tbl_religion_info as r','p.id=r.user_id','inner');
    	 	$this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
    	 	$this->db->join('tbl_professional_info as e','p.id=e.user_id','inner');
    	 	$this->db->select('u.image,u.user_id');
        	$this->db->join('upload-images as u','p.id=u.user_id','left');
    	 	if($gender!=""){
    	 	   $this->db->where('p.gender',$gender); 
    	 	}
    	 	if($agefrom!="" && $ageto!=""){
    	 	  $this->db->where("p.age BETWEEN $agefrom AND $ageto");
    	 	}
    	 	if($heightfrom!="") {
    	 	    $this->db->where('r.height >=', $heightfrom);
            }
            if($heightto!="") {
    	 	    $this->db->where('r.height <=', $heightto);
            }
    	 	if($maritalstatus!=""){
    	 	   $this->db->where('r.marital_status',$maritalstatus); 
    	 	}
    	 	if($religion!=""){
    	 	   $this->db->where('r.religion',$religion); 
    	 	}
    	 	if($caste!=""){
    	 	   $this->db->where('r.caste',$caste); 
    	 	}
    	 	if($mothertounge!=""){
    	 	   $this->db->where('r.mother_tounge',$mothertounge); 
    	 	}
    	 	if($country!=""){
    	 	   $this->db->where('p.living_in',$country); 
    	 	}
    	 	
    	 	if($profession!=""){
    	 	   $this->db->where('e.occupation',$profession); 
    	 	}
    	 	$this->db->where('p.status', 1);
    	 	$this->db->group_by('u.user_id');
    	 	$query = $this->db->get();
    	 	$result = $query->result_array();
    	 	return $result;
      }
      
      public function getallrecords($arr1,$arr2){
          $user_id=$this->session->userdata('user_id');
          
        $this->db->select('email,password,mobile,first_name,last_name,gender,living_in,date,month,year,profile_id,age');
        $this->db->from('tbl_primary_info');
        $this->db->where('id',$user_id);
        $primary_details = $this->db->get()->row_array();
        
        
        $this->db->select('caste,height,marital_status');
        $this->db->from('tbl_religion_info');
        $this->db->where('user_id',$user_id);
        $religion_details = $this->db->get()->row_array();
        
        $caste=$religion_details['caste'];
        $height=$religion_details['height'];
        $marital_status=$religion_details['marital_status'];
        
       
        
        
        $gender=$primary_details['gender'];
        
        $living_in=$primary_details['living_in'];
        
        $age=$primary_details['age'];
        
          
            $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.first_name,last_name");
    	 	$this->db->from('tbl_primary_info as p');
    	 	$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
    	 	$this->db->join('tbl_religion_info as r','p.id=r.user_id','left');
    	 /*	$this->db->where('user_id !=',$user_id);
    	 	*/
    	 	$this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
    	 	$this->db->join('tbl_professional_info as e','p.id=e.user_id','left');
    	 	$this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
           $this->db->join('MS_photos as u','p.id=u.MS_id','left');
           $this->db->join('ms_profilesetting as s','p.id=s.ms_id','inner');

        	
    	 	$this->db->where('p.status', 1);
        $this->db->where('s.elite', 'no');
    	 	$this->db->where('p.id !=', $user_id);
    	 	
    	 	
    	 		if($gender=='male'){
    	 	
    	 	$this->db->where('p.age <=', $age);
    	 	
    	 		}else if($gender=='female'){
    	 		    $this->db->where('p.age >=', $age);
    	 		}
    	 	
    	 	
    	 	 $this->db->where('r.caste =', $caste);
    	 	
    	 		if($gender=='male'){
    	 	
    	 	$this->db->where('r.height <=', $height);
    	 	
    	 		}else if($gender=='female'){
    	 		    $this->db->where('r.height >=', $height);
    	 		}
    	 	
    	 	
    	 	$this->db->where('r.marital_status =', $marital_status);
    	 	
    	 	
    	 
    	 	$this->db->where('p.gender !=', $gender);
    	 	$this->db->where_not_in('p.id', $arr1);
    	 	$this->db->where_not_in('p.id', $arr2);
    	 	
    	    $this->db->group_by('p.id');
    	   $this->db->order_by('registered_on', 'DESC');
    	 	$query = $this->db->get();
    	 	$result = $query->result_array();
    	 	return $result;
      }
      
      
      public function get_profile_info($id){
           $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.date,p.year,p.month");
    	 	$this->db->from('tbl_primary_info as p');
    	 	$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.star,r.time_of_birth,r.raasi,r.place_of_birth,r.gothram');
    	 	$this->db->join('tbl_religion_info as r','p.id=r.user_id','inner');
    	 	$this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me,e.education_description,e.about_profession,e.currency,e.country,e.state,e.city,e.departure-date,e.residing-since,e.arrival-date');
    	 	$this->db->join('tbl_professional_info as e','p.id=e.user_id','inner');
    	 	$this->db->select('f.father_name,f.fathers_father_name,f.fathers_father_native_place,f.mother_name,mothers_father_name,f.mothers_father_native_place,f.user_id');
    	 	$this->db->join('tbl_parents_info as f','p.id=f.user_id','inner');
    	 	$this->db->select('s.user_id,s.no_of_brothers,s.no_of_sisters');
    	 	$this->db->join('tbl_siblings_info as s','p.id=s.user_id','inner');
        	$this->db->where('p.profile_id', $id);
    	 	$query = $this->db->get();
    	 	$result = $query->row_array();
    	 	return $result;
      }
      public function get_images($profile_id)
      {

          $this->db->select('i.image,i.user_id,i.status');
          $this->db->from('upload-images as i');
          $this->db->select("p.profile_id,p.id");
    	  $this->db->join('tbl_primary_info as p','i.user_id=p.id','inner');
    	  $this->db->where('p.profile_id',$profile_id);
    	  $this->db->where('i.status',1);
    	  $query = $this->db->get();
	 	  $result = $query->result_array();
	 	  return $result;
      }
      
      public function update_view_status($user_id,$to_user_id){
          
          
          
          $this->db->select('*');
          $this->db->from('MS_ViewedContacts');
          $this->db->where('From_MSid',$user_id);
          $this->db->where('to_MSid',$to_user_id);
          $query = $this->db->get();
          $result = $query->result_array();
           $count=$query->num_rows();
           
           if($count==0){
          
          $this->db->select('*');
          $this->db->from('MS_shortlist_viewedd_ignored');
          $this->db->where('from_msid',$user_id);
          $this->db->where('to_msid',$to_user_id);
          $query = $this->db->get();
          $rows=$query->num_rows();
          $result = $query->result_array();
         
         if($rows==0){
          
          
           $data = array(
                    'from_msid'=>$user_id,
                    'to_msid'=>$to_user_id,
                    'viewed_status'=>1,
                    'viewed_date'=>date('Y-m-d H:i:s')
                    
                );
          
          $this->db->insert('MS_shortlist_viewedd_ignored',$data);
         }else{
              $data = array( 
                'viewed_status' => 1 , 
                'shortlist_status' => 0, 
                'ignore_status' => 0
                );
                    
                    $this->db->where('from_msid', $user_id); 
                    $this->db->where('to_msid', $to_user_id);
                    $this->db->update('MS_shortlist_viewedd_ignored',$data);
         }
         
        }
          
      }
      
     /* view profile update */
     
     public function update_viewprofile_status($user_id,$to_user_id){
          
          $this->db->select('*');
          $this->db->from('MS_ViewedContacts');
          $this->db->where('From_MSid',$user_id);
          $this->db->where('to_MSid',$to_user_id);
          $query = $this->db->get();
          $result = $query->result_array();
           $count=$query->num_rows();
           
           if($count==0){
          
          $this->db->select('*');
          $this->db->from('MS_shortlist_viewedd_ignored');
          $this->db->where('from_msid',$user_id);
          $this->db->where('to_msid',$to_user_id);
          $query = $this->db->get();
          $rows=$query->num_rows();
          $result = $query->result_array();
         
         if($rows==0){
          
          
           $data = array(
                    'from_msid'=>$user_id,
                    'to_msid'=>$to_user_id,
                    'viewed_status'=>1,
                    'viewed_date'=>date('Y-m-d H:i:s')
                    
                );
          
          $this->db->insert('MS_shortlist_viewedd_ignored',$data);
         }
         
        }
          
      }
      
      public function recently_viewed($user_id){
          
          $this->db->select('*');
          $this->db->from('MS_shortlist_viewedd_ignored');
          $this->db->where('from_msid',$user_id);
          $this->db->where('viewed_status',1);
          $query = $this->db->get();
          $rows=$query->num_rows();
          $result = $query->result_array();
          
          return $result;
          
      }
      
      public function shortlisted_count($user_id){
          
          $this->db->select('*');
          $this->db->from('MS_shortlist_viewedd_ignored');
          $this->db->where('from_msid',$user_id);
          $this->db->where('shortlist_status',1);
          $query = $this->db->get();
          $rows=$query->num_rows();
          $result = $query->result_array();
          
          return $result;
          
      }
      
       public function ignored_count($user_id){
          
          $this->db->select('*');
          $this->db->from('MS_shortlist_viewedd_ignored');
          $this->db->where('from_msid',$user_id);
          $this->db->where('ignore_status',1);
          $query = $this->db->get();
          $rows=$query->num_rows();
          $result = $query->result_array();
          
          return $result;
          
      }
      
       public function contact_count($user_id){
          
          $this->db->select('*');
          $this->db->from('MS_ViewedContacts');
          $this->db->where('from_msid',$user_id);
          $query = $this->db->get();
          $rows=$query->num_rows();
          $result = $query->result_array();
          
          return $result;
          
      }
      
      
      
     public function update_shortlist_status($user_id,$to_user_id){
         
         
          $this->db->select('*');
          $this->db->from('MS_ViewedContacts');
          $this->db->where('From_MSid',$user_id);
          $this->db->where('to_MSid',$to_user_id);
          $query = $this->db->get();
          $result = $query->result_array();
           $count=$query->num_rows();
           
           if($count==0){
         
         $this->db->select('*');
          $this->db->from('MS_shortlist_viewedd_ignored');
          $this->db->where('from_msid',$user_id);
          $this->db->where('to_msid',$to_user_id);
          $query = $this->db->get();
          $rows=$query->num_rows();
          $result = $query->result_array();
         
         if($rows==0){
             $data = array(
                    'from_msid'=>$user_id,
                    'to_msid'=>$to_user_id,
                    'shortlist_status'=>1,
                    'shortist_date'=>date('Y-m-d H:i:s')
                );
          
          $this->db->insert('MS_shortlist_viewedd_ignored',$data);
         }else{
                   
                    
                $data = array( 
                'shortlist_status' => 1 , 
                'viewed_status' => 0, 
                'ignore_status' => 0
                );
                    
                    $this->db->where('from_msid', $user_id); 
                    $this->db->where('to_msid', $to_user_id);
                    $this->db->update('MS_shortlist_viewedd_ignored',$data);  
         }
         
     }
         
         
     }
     
     
public function update_ignored_status($user_id,$to_user_id){
    
    
          $this->db->select('*');
          $this->db->from('MS_ViewedContacts');
          $this->db->where('From_MSid',$user_id);
          $this->db->where('to_MSid',$to_user_id);
          $query = $this->db->get();
          $result = $query->result_array();
           $count=$query->num_rows();
           
           if($count==0){
         
          $this->db->select('*');
          $this->db->from('MS_shortlist_viewedd_ignored');
          $this->db->where('from_msid',$user_id);
          $this->db->where('to_msid',$to_user_id);
          $query = $this->db->get();
          $rows=$query->num_rows();
          $result = $query->result_array();
         
         if($rows==0){
             $data = array(
                    'from_msid'=>$user_id,
                    'to_msid'=>$to_user_id,
                    'ignore_status'=>1,
                    'ignore_date'=>date('Y-m-d H:i:s')
                );
          
          $this->db->insert('MS_shortlist_viewedd_ignored',$data);
         }else{
                  
                $data = array( 
                'ignore_status' => 1 , 
                'viewed_status' => 0, 
                'shortlist_status' => 0
                );
                    
                    $this->db->where('from_msid', $user_id); 
                    $this->db->where('to_msid', $to_user_id);
                    $this->db->update('MS_shortlist_viewedd_ignored',$data);  
         }
         
           }
         
         
     }
     
      public function get_contact_list($user_id,$to_user_id){
          
          $this->db->select('*');
          $this->db->from('MS_ViewedContacts');
          $this->db->where('From_MSid',$user_id);
          $this->db->where('to_MSid',$to_user_id);
          $query = $this->db->get();
          $result = $query->result_array();
           $rows=$query->num_rows();
         return $result;
          
      }
     
     public function update_contact_list($user_id,$to_user_id){
         
          $this->db->select('*');
          $this->db->from('MS_ViewedContacts');
          $this->db->where('From_MSid',$user_id);
          $this->db->where('to_MSid',$to_user_id);
          $query = $this->db->get();
          $rows=$query->num_rows();
          $result = $query->result_array();
          
          
          
         if($rows==0){
             
             $data = array(
                    'From_MSid'=>$user_id,
                    'to_MSid'=>$to_user_id,
                    'Contact_Vieweddate'=>date('Y-m-d H:i:s')
                    
                );
          
          $this->db->insert('MS_ViewedContacts',$data);
          
                    $this->db->where('from_msid', $user_id); 
                    $this->db->where('to_msid', $to_user_id);
                    $this->db->delete('MS_shortlist_viewedd_ignored'); 
                    
                    $this->db->select('*');
          $this->db->from('MS_ViewedContacts');
          $this->db->where('From_MSid',$user_id);
          $query1 = $this->db->get();
          $rows=$query1->num_rows();
          $result1 = $query1->result_array();
          
          
        $this->db->select('*');
	    $this->db->from('tbl_payments_log');
	    $this->db->where('user_id',$user_id);
	    $this->db->order_by("paymentlog_id", "desc");
	    $this->db->limit('1');
	    $query = $this->db->get()->result_array();
	    
	    $latest_record=$query[0]['paymentlog_id'];
          
          $data = array( 
                'used_contacts' => $rows
                );
                    
                    $this->db->where('user_id', $user_id);
                    $this->db->where('paymentlog_id', $latest_record);
                    $this->db->update('tbl_payments_log',$data);  
          
         }
         
         
     }
     
     
     public function view_short_ignore($user_id){
          $this->db->distinct();
          $this->db->select('to_msid');
          $this->db->from('MS_shortlist_viewedd_ignored');
          $this->db->where('from_msid',$user_id);
          $query = $this->db->get();
          $result = $query->result_array();
          
         return $result;
     }
     
     public function contact($user_id){
          $this->db->distinct();
          $this->db->select('to_MSid');
          $this->db->from('MS_ViewedContacts');
          $this->db->where('From_MSid',$user_id);
          $query = $this->db->get();
          $result = $query->result_array();
          
         return $result;
     }
     
     
     
     
      
      
}

?>