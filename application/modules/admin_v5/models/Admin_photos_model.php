<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_photos_model extends CI_Model {

     public function getallpendings(){

        $this->db->select('p.ms_id,p.photoname');
        $this->db->from('MS_photos as p');
        $this->db->select('r.first_name,r.last_name');
        $this->db->join('tbl_primary_info as r','p.ms_id=r.id','left');


        $this->db->where('p.isactive',0);
        $this->db->order_by('uploaded_date','asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function update_img_path($data,$id1,$id2){

       
        $this->db->where('ms_id',$id1);
        $this->db->where('photoname',$id2);
        $this->db->update('MS_photos',$data);
        
       
    }
    

   
}

?>