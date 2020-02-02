<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_pv_model extends CI_Model
{

   public function __construct()
   {
      parent::__construct();
      error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
      error_reporting(0);
      ini_set('display_errors', 'off');
   }

   public function getallcastes()
   {
      $this->db->select('caste,status');
      $this->db->from('tbl_caste');
      $this->db->order_by('caste', 'asc');
      $this->db->where('status', 1);
      $query = $this->db->get();
      $result = $query->result_array();
      return $result;
   }

   public function sub_records($limit, $offset, $payment, $gender, $profileid, $allphones, $allemails, $surname, $name, $status, $caste, $emp_drop_down, $dor_from, $dor_to, $area_name)
   {
      $this->db->select("p.*");
      // $this->db->select("p.id, p.profile_id, p.last_name,p.first_name,p.age,p.gender,p.date,p.month,p.year,p.email,p.mobile");

      $this->db->from('tbl_primary_info as p');

      $this->db->select('r.caste,r.height,r.star,r.time_of_birth,r.raasi');

      $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');

      $this->db->select('prp.property_value');

      $this->db->join('ms_property_info as prp', 'p.id=prp.ms_id', 'left');

      $this->db->select('e.occupation,e.education_degree,e.visatype, e.city , e.country,e.annual_income');

      $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');

      $this->db->select('pi.fathers_father_district,pi.mothers_father_district,pi.father_mobile');

      $this->db->join('tbl_parents_info as pi', 'p.id=pi.user_id', 'left');

      $this->db->select('pfs.payment_status, pfs.profilesetting_id as pfs_id,pfs.last_call_updated');

      $this->db->join('ms_profilesetting as pfs', 'p.id=pfs.ms_id', 'left');

      $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');

      $this->db->join('MS_photos as u', 'p.id=u.MS_id AND u.ismain="1" AND u.isactive="1"', 'left');


      $this->db->select('adm.username as profile_owner');

      $this->db->join('tbl_admin_data as adm', 'pfs.profileowner=adm.id', 'left');

      // $this->db->where('u.ismain', '1');
      // $this->db->where('u.isactive', '1');


      if ($gender != "") {
         $this->db->where('p.gender', $gender);
      }

      if ($profileid != "") {
         $this->db->like('p.profile_id', $profileid, 'both');
      }
      if ($surname != "") {
         $this->db->like('p.last_name', $surname, 'both');
      }
      if ($allphones != "") {
         $this->db->like('p.mobile', $allphones, 'both');
      }
      if ($allemails != "") {
         $this->db->like('p.email', $allemails, 'both');
      }
      if ($name != "") {
         $this->db->like('p.first_name', $name, 'both');
      }
      if ($status != "") {
         $this->db->where('p.status', $status);
      }
      if ($caste != "") {
         $this->db->where('r.caste', $caste);
      }
      if ($payment == "paid") {
         $this->db->where('pfs.payment_status', $payment);
      } else if ($payment == "free") {
         $this->db->where("pfs.payment_status", NULL);
      }

      if ($emp_drop_down != 0) {

         $this->db->where('pfs.profileowner', $emp_drop_down);
      }

      if ($dor_from != "") {
         $this->db->where('p.registered_on >=', $dor_from);
      }
      if ($dor_to != "") {
         $this->db->where('p.registered_on <=', $dor_to);
      }


      if ($area_name != "") {
         // $this->db->like('pi.mothers_father_district', $area_name, 'both');
         // $this->db->like('pi.fathers_father_district', $area_name, 'both');
         $this->db->like('pi.mothers_father_native_place', $area_name, 'both');
         $this->db->like('pi.fathers_father_native_place', $area_name, 'both');
      }

      $this->db->limit($limit, $offset);
      $this->db->group_by('p.id');
      $this->db->order_by('p.registered_on', 'DESC');
      $query = $this->db->get();
      $result = $query->result_array();
      return $result;
   }

   public function tot_records($payment, $gender, $profileid, $allphones, $allemails, $surname, $name, $status, $caste, $emp_drop_down, $dor_from, $dor_to, $area_name)
   {

      $this->db->select("p.*");
      // $this->db->select("p.id, p.profile_id, p.last_name,p.first_name,p.age,p.gender,p.date,p.month,p.year,p.email,p.mobile");

      $this->db->from('tbl_primary_info as p');

      $this->db->select('r.caste,r.height,r.star,r.time_of_birth,r.raasi');

      $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');

      $this->db->select('prp.property_value');

      $this->db->join('ms_property_info as prp', 'p.id=prp.ms_id', 'left');

      // $this->db->select('e.occupation,e.education_degree,e.visatype, e.city , e.country');
      $this->db->select('e.occupation,e.education_degree,e.visatype, e.city , e.country,e.annual_income');

      $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');

      $this->db->select('pi.fathers_father_native_place,pi.mothers_father_native_place,pi.father_mobile');

      $this->db->join('tbl_parents_info as pi', 'p.id=pi.user_id', 'left');

      $this->db->select('pfs.payment_status, pfs.profilesetting_id as pfs_id,pfs.last_call_updated');

      $this->db->join('ms_profilesetting as pfs', 'p.id=pfs.ms_id', 'left');

      $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');

      $this->db->join('MS_photos as u', 'p.id=u.MS_id AND u.ismain="1" AND u.isactive="1"', 'left');

      $this->db->select('adm.username as profile_owner');

      $this->db->join('tbl_admin_data as adm', 'pfs.profileowner=adm.id', 'left');


      if ($gender != "") {
         $this->db->where('p.gender', $gender);
      }

      if ($profileid != "") {
         $this->db->like('p.profile_id', $profileid, 'both');
      }

      if ($surname != "") {
         $this->db->like('p.last_name', $surname, 'both');
      }

      if ($allphones != "") {
         $this->db->like('p.mobile', $allphones, 'both');
      }

      if ($allemails != "") {
         $this->db->like('p.email', $allemails, 'both');
      }

      if ($name != "") {
         $this->db->like('p.first_name', $name, 'both');
      }

      if ($status != "") {
         $this->db->where('p.status', $status);
      }
      if ($caste != "") {
         $this->db->where('r.caste', $caste);
      }

      if ($payment == "paid") {
         $this->db->where('pfs.payment_status', $payment);
      } else if ($payment == "free") {
         $this->db->where("pfs.payment_status", NULL);
      }

      if ($emp_drop_down != 0) {
         $this->db->where('pfs.profileowner', $emp_drop_down);
      }

      if ($dor_from != "") {
         $this->db->where('p.registered_on >=', $dor_from);
      }
      if ($dor_to != "") {
         $this->db->where('p.registered_on <=', $dor_to);
      }
      if ($area_name != "") {
         // $this->db->like('pi.mothers_father_district', $area_name, 'both');
         // $this->db->like('pi.fathers_father_district', $area_name, 'both');
         $this->db->like('pi.mothers_father_native_place', $area_name, 'both');
         $this->db->like('pi.fathers_father_native_place', $area_name, 'both');
      }
      $this->db->group_by('p.id');

      $query = $this->db->get();

      $result = $query->num_rows();

      return $result;
   }
}
