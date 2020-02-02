<?php
 
  if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kamma_model extends CI_Model {

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


  public function get_all_countries()
  {
      $this->db->select('*');
      $this->db->from('tbl_country');
      $this->db->where('status','1');
      $this->db->order_by('country','asc');
      $query = $this->db->get()->result_array();
      return $query;
  }


   public function getbriderecords(){
        
            $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.first_name,last_name");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.star,r.user_id,r.caste');
        $this->db->join('tbl_religion_info as r','p.id=r.user_id','left');
       
        $this->db->select('e.user_id,e.heighst_education,e.city,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e','p.id=e.user_id','left');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
           $this->db->join('MS_photos as u','p.id=u.MS_id','left');
          
        $this->db->where('p.status', 1);
        $this->db->where('p.gender =', 'female');
        $this->db->group_by('p.id');
        $this->db->order_by('registered_on', 'DESC');
        $this->db->limit('4');

        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
      }


       public function getgroomrecords(){
        
            $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.first_name,last_name");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.star,r.user_id,r.caste');
        $this->db->join('tbl_religion_info as r','p.id=r.user_id','left');
       
        $this->db->select('e.user_id,e.heighst_education,e.city,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e','p.id=e.user_id','left');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
           $this->db->join('MS_photos as u','p.id=u.MS_id','left');
          
        $this->db->where('p.status', 1);
        $this->db->where('p.gender =', 'male');
        $this->db->group_by('p.id');
        $this->db->order_by('registered_on', 'DESC');
        $this->db->limit('4');

        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
      }
      

}

  ?>