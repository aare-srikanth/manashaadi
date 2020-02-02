<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Faqs_model extends CI_Model {

	public $table_name = "tbl_faqs";
	
	public function __construct() {
        parent::__construct();
 		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off'); 
    }
	
	  public function get_all_faqs() 
	   {
			$this->db->select("*");
			$this->db->from($this->table_name);
			$this->db->order_by('id','asc');
			$this->db->where('status',1);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
	  
		
		
}
?>
