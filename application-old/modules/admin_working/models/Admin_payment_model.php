<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_payment_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }

    public function get_payment_rec($user_id){

    $this->db->select('p.payment_id,p.user_id,p.payment_type,p.agreed_amount,p.paid_amount,p.bal_amount,p.paid_date,p.entered_by,p.comments');
    $this->db->from('tbl_payments_info as p');
    $this->db->select('r.user_id,r.allowed_contacts,r.used_contacts,r.expiry_date');
    $this->db->join('tbl_payments_log as r','p.user_id=r.user_id AND p.payment_id=r.payment_id','left');
    $this->db->where('p.user_id',$user_id);
    $this->db->order_by('payment_id','DESC');
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
    }

    public function get_latest_payment_rec($user_id){

        $this->db->select('bal_amount,payment_id');
        $this->db->from('tbl_payments_info');
        $this->db->where('user_id',$user_id);
        $this->db->order_by('payment_id','DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;


    // $this->db->select('p.bal_amount,p.payment_id');
    // $this->db->from('tbl_payments_info as p');
    // $this->db->select('r.used_contacts,r.allowed_contacts,r.expiry_date');
    // $this->db->join('tbl_payments_log as r','p.user_id=r.user_id AND p.payment_id=r.payment_id','left');
    // $this->db->where('p.user_id',$user_id);
    // $this->db->order_by('r.payment_id','DESC');
    // $this->db->limit(1);
    // $query = $this->db->get();
    // $result = $query->result_array();
    // return $result;
    }

     public function get_contacts_rec($user_id){

        $this->db->select('used_contacts,allowed_contacts,expiry_date');
        $this->db->from('tbl_payments_log');
        $this->db->where('user_id',$user_id);
        $this->db->order_by('payment_id','DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

      }

        public function get_payment_id($user_id){

        $this->db->select('payment_id');
        $this->db->from('tbl_payments_info');
        $this->db->where('user_id',$user_id);
        $this->db->order_by('payment_id','DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->row();
        return $result;

      }




    public function get_count_rec($user_id){

      $this->db->select('user_id');
      $this->db->from('tbl_payments_info');
      $this->db->where('user_id',$user_id);
      $query = $this->db->get();
      $result = $query->num_rows();
      return $result;
    }

    public function insert_payment_rec1($insert_rec1){

      $this->db->insert('tbl_payments_info',$insert_rec1);
      $success1=1;
      return $success1;

    }


    public function insert_payment_rec2($insert_rec2){

      $this->db->insert('tbl_payments_log',$insert_rec2);
      $success2=0;
      return $success2;

    }


    public function get_used_contacts($profile_id){

    $this->db->select('max(used_contacts)');
    $this->db->from('tbl_payments_info');
    $this->db->where('profile_id',$profile_id);
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;

    }

    public function get_user_id($profile_id){

    $this->db->select('id');
    $this->db->from('tbl_primary_info');
    $this->db->where('profile_id',$profile_id);
    $query = $this->db->get();
    $result = $query->row();
    return $result;
    }

   

 }

  ?>