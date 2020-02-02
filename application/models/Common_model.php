<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Common_model extends CI_Model {

		//public $table_name          = "tbl_websettings";
		//public $table_scroll        = "table_scroll";
		public $table_name          = "tbl_category";
		
		public function __construct()
		{
			parent::__construct();
			error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
			error_reporting(0);
			ini_set('display_errors','off');

		}

		/*public function get_scroll()
		{
			$this->db->select("*");
			$this->db->from($this->table_scroll);
			$this->db->where('status', 1);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}


		public function get_all_websettings()
		{
			$this->db->select("*");
			$this->db->from($this->table_name);
			$query = $this->db->get();
			$result = $query->row_array();
			return $result;
		}*/
		
		public function get_all_records() 
	   {
			$this->db->select("*");
			$this->db->from('tbl_category');
			$this->db->order_by('id','asc');
			//$this->db->where('status',1);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
		public function get_header() 
	   {
			$this->db->select("*");
			$this->db->from('tbl_category');
			$this->db->order_by('id','asc');			
			//echo '<pre>';print_r($result);exit;
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
			public function get_inner($id)
		{
			$this->db->select("*");
			$this->db->from("tbl_subcategory");
			//$this->db->where('cat_id',1);
			$this->db->where('status',1);
			$this->db->where('cat_id',$id);
			$query = $this->db->get();
			$result = $query->row_array();
			return $result;
	
        }
		
	
}
		
?>