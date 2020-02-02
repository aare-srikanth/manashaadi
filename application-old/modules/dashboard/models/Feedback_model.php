<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Feedback_model extends CI_Model {
	
	public $table_contact  = ' tbl_contactus'; 
	public function __construct() 
	{
        parent::__construct();
		
    }
	
		public function add_contact()
		{
			$set_data = array
			(
				'name'  => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('mobile'),
				'message'   => $this->input->post('message'),
				'contacted_date_time' => date('Y-m-d H:i:s')
			);
		
			$result = $this->db->insert($this->table_contact,$set_data);
			return $result;
		}
		
	public function get_address() 
	   {
			$this->db->select("*");
			$this->db->from('tbl_about');
			$this->db->where('id',2);
			//$this->db->where('status',1);
			$query = $this->db->get();
			$result = $query->row_array();
			return $result;
		}
}