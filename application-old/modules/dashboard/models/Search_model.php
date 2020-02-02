<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Search_model extends CI_Model {

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
      
      public function get_primary_details($user_id)
    {
        $this->db->select('email,password,mobile,first_name,last_name,gender,living_in,date,month,year,profile_id,age');
        $this->db->from('tbl_primary_info');
        $this->db->where('profile_id',$user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    
     public function get_religion_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_religion_info');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
     public function get_profession_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_professional_info');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    
     public function get_parents_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_parents_info');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    
    public function get_siblings_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_siblings_info');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
      
      public function getallrecords(){
          $user_id=$this->session->userdata('user_id');
            $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id");
    	 	$this->db->from('tbl_primary_info as p');
    	 	$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
    	 	$this->db->join('tbl_religion_info as r','p.id=r.user_id','inner');
    	 /*	$this->db->where('user_id !=',$user_id);
    	 	*/
    	 	$this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
    	 	$this->db->join('tbl_professional_info as e','p.id=e.user_id','inner');
    	 	$this->db->select('u.image,u.user_id');
        	$this->db->join('upload-images as u','p.id=u.user_id','left');
        	
    	 	$this->db->where('p.status', 1);
    	 	$this->db->where('p.id !=', $user_id);
    	 	$this->db->group_by('u.user_id');
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

          $this->db->select('*');
          $this->db->from('MS_photos as u');
          $this->db->select("p.profile_id,p.id");
    	  $this->db->join('tbl_primary_info as p','u.MS_id=p.id','inner');
    	  $this->db->where('p.profile_id',$profile_id);
    	  $query = $this->db->get();
	 	  $result = $query->result_array();
	 	  return $result;
      }
      
      public function update_view_status($user_id,$to_user_id){
          
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
                    'viewed_status'=>1
                    
                );
          
          $this->db->insert('MS_shortlist_viewedd_ignored',$data);
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
                    'shortlist_status'=>1
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
     
     
public function update_ignored_status($user_id,$to_user_id){
         
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
                    'ignore_status'=>1
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
                    'to_MSid'=>$to_user_id
                    
                );
          
          $this->db->insert('MS_ViewedContacts',$data);
          
                    $this->db->where('from_msid', $user_id); 
                    $this->db->where('to_msid', $to_user_id);
                    $this->db->delete('MS_shortlist_viewedd_ignored');  
          
          
         }
         
     }
     
     
     
     
      
      
}

?>