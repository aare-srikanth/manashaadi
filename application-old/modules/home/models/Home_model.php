<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_model extends CI_Model {

    public $table_sliders = "";
    public $table_name = "";

    public function __construct() {
        parent::__construct();
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }

     public function get_successstories()
      {
          $this->db->select("title,content,image,status");
          $this->db->from('tbl_successstories');
          $this->db->order_by('id','asc');
          $this->db->where('status', 1);
          $query = $this->db->get();
          $result = $query->result_array();
          return $result;
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
      public function getsearchrecords($gender,$agefrom,$ageto,$religion,$mother_tounge)
      {


        //var_dump($this->db->list_fields('tbl_primary_info'));die();


             $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id");
        	 $this->db->from('tbl_primary_info as p');
        	 $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
        	 $this->db->join('tbl_religion_info as r','p.id=r.user_id','inner');

        	 $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        	 $this->db->join('MS_photos as u','p.id=u.MS_id','left');
           
        	 $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        	 $this->db->join('tbl_professional_info as e','p.id=e.user_id','inner');
             $this->db->join('ms_profilesetting as s','p.id=s.ms_id','inner');
    	 	if($gender!=""){
    	 	   $this->db->where('p.gender',$gender); 
    	 	}
    	   if($agefrom!="" && $ageto!=""){
    	 	  $this->db->where("p.age BETWEEN $agefrom AND $ageto");
    	 	}
    	 	if($religion!=""){
    	 	   $this->db->where('r.religion',$religion); 
    	 	}
    	 	if($mother_tounge!=""){
    	 	   $this->db->where('r.mother_tounge',$mother_tounge); 
    	 	}

        $this->db->where('p.status', 1);
        $this->db->where('s.elite', 'no');
          
        $this->db->where('u.ismain', 1);
        $this->db->where('u.photoname !=', '');
        $this->db->where('u.applicationphotopath !=', '');

    	 	$this->db->limit(8);
    	 	$this->db->group_by('u.MS_id');
            $this->db->order_by('registered_on','desc');
    	 	$query = $this->db->get();
    	 	$result = $query->result_array();
    	    return $result;
      }
}

?>