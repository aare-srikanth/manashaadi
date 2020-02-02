<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Privacypolicy_model extends CI_Model {

	public function __construct() 
	{
        parent::__construct();
 		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off'); 
    }
	  public function get_privacyinfo() 
    {
		$this->db->select("*");
		$this->db->from('tbl_about');
		$this->db->where('id',4);
		$this->db->where('status',1);
		$query = $this->db->get();
		$result = $query->row_array();
		return $result;
	}
}
?>
