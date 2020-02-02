<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_pv_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
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

       public function sub_records($limit,$offset,$gender,$profileid,$allphones,$allemails,$surname,$name,$status,$caste)
      {
        $this->db->select("p.id,p.profile_id,p.last_name,p.first_name,p.age,p.gender");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.caste,r.height,r.user_id,');
        $this->db->join('tbl_religion_info as r','p.id=r.user_id','left');
        $this->db->select('e.occupation,e.education_degree','e.user_id');
        $this->db->join('tbl_professional_info as e','p.id=e.user_id','left');
		$this->db->select('pay.user_id');
        $this->db->join('tbl_payments_info as pay','p.id=pay.user_id','left');

        if($gender!=""){
           $this->db->where('p.gender',$gender); 
        }
		 if($payment!=""){
           $this->db->where ('p.id in (select pay.user_id from tbl_payments_info)',$payment,'both'); 
        }
        if($profileid!=""){
           $this->db->like('p.profile_id',$profileid,'both'); 
        }
        if($surname!=""){
           $this->db->like('p.last_name',$surname,'both'); 
        }
         if($allphones!=""){
           $this->db->like('p.mobile',$allphones,'both'); 
        }
        if($allemails!=""){
           $this->db->like('p.email',$allemails,'both'); 
        }
        if($name!=""){
          $this->db->like('p.first_name',$name,'both'); 
        }
        if($status!=""){
        $this->db->where('p.status',$status); 
        }
       if($caste!=""){
          $this->db->where('r.caste',$caste); 
        }

        $this->db->limit ($limit,$offset);
        $this->db->group_by('p.id');
        $this->db->order_by('p.registered_on','DESC');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
      }

         public function tot_records($gender,$profileid,$allphones,$allemails,$surname,$name,$status,$caste)
      {
        $this->db->select("p.id,p.profile_id,p.last_name,p.first_name,p.age,p.gender");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.caste,r.height,r.user_id,');
        $this->db->join('tbl_religion_info as r','p.id=r.user_id','left');
        $this->db->select('e.occupation,e.education_degree','e.user_id');
        $this->db->join('tbl_professional_info as e','p.id=e.user_id','left');
		    $this->db->select('pay.user_id');
        
        $this->db->join('tbl_payments_info as pay','p.id=pay.user_id','left');
        if($gender!=""){
           $this->db->where('p.gender',$gender); 
        }
        if($profileid!=""){
           $this->db->like('p.profile_id',$profileid,'both'); 
        }
        if($surname!=""){
           $this->db->like('p.last_name',$surname,'both'); 
        }
         if($allphones!=""){
           $this->db->like('p.mobile',$allphones,'both'); 
        }
        if($allemails!=""){
           $this->db->like('p.email',$allemails,'both'); 
        }
        if($name!=""){
          $this->db->like('p.first_name',$name,'both'); 
        }
        if($status!=""){
        $this->db->where('p.status',$status); 
        }
       if($caste!=""){
          $this->db->where('r.caste',$caste); 
        }
        
        $this->db->group_by('p.id');
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
      }

      //    public function num_records()
      // {
      //     $this->db->select('*');
      //     $this->db->from('tbl_primary_info');
      //     $query = $this->db->get();
      //     $result = $query->num_rows();
      //     return $result;
        
      // }
   
}

?>