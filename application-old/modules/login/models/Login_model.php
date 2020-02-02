<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model {
	
	
	public function __construct() 
	{
        parent::__construct();
		
    } 
    public function login($email, $password)
	{
		$this->db->select('status,email,password,id,profile_id');
		$this->db->from('tbl_primary_info');
		$this->db->where('email', $email);
		$this->db->or_where('profile_id', $email);
		$this->db->where('password', $password);
		$this->db->where('status',1);
		$query = $this->db->get()->row_array();
		return $query;
	}
	 public function email_check()
	  {
		$this->db->select('email');
		$this->db->from("tbl_primary_info");
		$this->db->where('email',$this->input->post('email'));
		$result=$this->db->get();
		return $result->num_rows();	
	  }
	 public function change_password($password){
		$datac = array(
		    'password'=>$password
		);
	
		$this->db->where('email',$this->input->post('email'));
		$result = $this->db->update("tbl_primary_info", $datac);
		
		return $result;
     }
     
      public function get_payment_details($user_id){
        
        $this->db->select('*');
	    $this->db->from('tbl_payments_log');
	    $this->db->where('user_id',$user_id);
	    $this->db->order_by("paymentlog_id", "desc");
	    $this->db->limit('1');
	    $query = $this->db->get()->result_array();
	    return $query;
        
    }
		
}