<?php 

class Registration_model extends CI_Model {

	public $table_name = 'registration';

	public function __construct() 
	{
        parent::__construct();
    }

	
    public function get_all_records() 
    {
        $this->db->select("*");
		$this->db->from($this->table_name);
		$this->db->order_by('id');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }

	public function delete_record($id)
	{
		$this->db->where('id',$id);
		$result = $this->db->delete($this->table_name); 
		return $result;
	}
    
	public function get_mysqli()
	{
	   $db = (array)get_instance()->db;
	   return mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
	}

}

?>
