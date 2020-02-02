<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class My_shortlist_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }

public function getmyshortlist(){
    
         $user_id=$this->session->userdata('user_id');
         
         
            $this->db->select("*");
    	 	$this->db->from('MS_shortlist_viewedd_ignored as v');
    	    $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.first_name,last_name");
    	 	$this->db->join('tbl_primary_info as p','p.id=v.to_msid','left');
    	 	$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
    	 	$this->db->join('tbl_religion_info as r','v.to_msid=r.user_id','left');
    	    $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
    	 	$this->db->join('tbl_professional_info as e','v.to_msid=e.user_id','left');
    	 
    	   
        	$this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
             $this->db->join('MS_photos as u','p.id=u.MS_id','left');
             $this->db->join('ms_profilesetting as s','p.id=s.ms_id','inner');

    	   $this->db->where('s.elite', 'no');
           $this->db->where('p.status', 1);
    	   $this->db->where('v.shortlist_status', 1);
    	   $this->db->where('v.from_msid',$user_id );
            $this->db->where('u.ismain',1 );
    	   $this->db->order_by('v.shortist_date', 'DESC');
           
    	    $query = $this->db->get();
    	 	$result = $query->result_array();
    	 	return $result;
         
            /*$this->db->select("*");
    	 	$this->db->from('MS_shortlist_viewedd_ignored as v');
    	 	$this->db->where('v.shortlist_status', 1);
    	    $this->db->where('v.from_msid',$user_id );
    	   
    	    $query = $this->db->get();
    	 	$result = $query->result_array();
    	 	
    	    $primary_info['primary']=array();
    	 	$religion_info['religion']=array();
    	 	$professin_info['profession']=array();
    	 	$images_info['image']=array();
    	 	
    	 	for($i=0;$i<count($result);$i++){
    	 	    
    	 	$this->db->select("*");
    	 	$this->db->from('tbl_primary_info');
    	 	$this->db->where('id', $result[$i]['to_msid']);
    	 	$query = $this->db->get();
    	 	$primary_info['primary'][]= $query->result_array();
    	 	
    	 	
    	 	$this->db->select("*");
    	 	$this->db->from('tbl_religion_info');
    	 	$this->db->where('user_id', $result[$i]['to_msid']);
    	 	$query = $this->db->get();
    	 	$religion_info['religion'][]= $query->result_array();
    	 	
    	 	$this->db->select("*");
    	 	$this->db->from('tbl_professional_info');
    	 	$this->db->where('user_id', $result[$i]['to_msid']);
    	 	$query = $this->db->get();
    	 	$professin_info['profession'][]= $query->result_array();
    	 	
    	 	$this->db->select('*');
    	 	$this->db->from('upload-images');
    	 	$this->db->where('user_id', $result[$i]['to_msid']);
    	 	$query = $this->db->get();
    	 	$images_info['image'][]= $query->result_array();
    	 	
    	
    	 	
    	 	}
    	 	
    	 
    	 return array_merge($primary_info,$professin_info,$religion_info,$images_info);*/
    	 
      }
      
}

?>