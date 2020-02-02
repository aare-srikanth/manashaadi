<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_del_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }

    public function deactivate_user_id($rec){

        $this->db->insert('tbl_settled_deleted_info',$rec);
        if ($rec['settledwith_userid']) 
        {
        $this->db->set('status', 3);
        $this->db->where('id', $rec['user_id']);
        $this->db->update('tbl_primary_info');

        $this->db->set('status', 3);
        $this->db->where('id', $rec['settledwith_userid']);
        $this->db->update('tbl_primary_info');
        }
        else 
        {
        $this->db->set('status', 2);
        $this->db->where('id', $rec['user_id']);
        $this->db->update('tbl_primary_info');
        }
        
        $success=1;
        return $success;

    } 

    public function get_user_id($ms_id){

    $this->db->select('id,status,gender');
    $this->db->from('tbl_primary_info');
    $this->db->where('profile_id',$ms_id);
    $query = $this->db->get();
    $result = $query->row();
    return $result;
    }

 }

?>