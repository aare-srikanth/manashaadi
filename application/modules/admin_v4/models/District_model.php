<?php 

class District_model extends CI_Model {

	public $table_name = 'tbl_district';

	public function __construct() 
	{
        parent::__construct();
    }

	
    public function get_all_countries() 
    {
        $this->db->select("*");
		$this->db->from('tbl_country');
		$this->db->order_by('country','asc');
		$this->db->where('status','1');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }
    public function get_all_states_ajax($id) 
		{
    		$this->db->select("*");
    		$this->db->from('tbl_state');
    		$this->db->where('status','1');
    		$this->db->where("country_id",$id);
    		$query = $this->db->get();
    		$result = $query->result_array();
    		return $result;
	    }
	     public function get_all_states() 
		{
    		$this->db->select("id,state");
    		$this->db->from('tbl_state');
    		$this->db->where('status','1');
    		$query = $this->db->get();
    		$result = $query->result_array();
    		return $result;
	    }
     public function get_all_records() 
    {
        $this->db->select("c.*");
		$this->db->from('tbl_district as c');
		$this->db->select("coun.country");
		$this->db->join('tbl_country as coun','c.country_id=coun.id','inner');
		$this->db->select("s.state");
		$this->db->join('tbl_state as s','c.state_id=s.id','inner');
		$this->db->order_by('c.id','asc');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }

    public function get_single_record($id='')
    {
        $this->db->select("*");
		$this->db->from($this->table_name);
		if($id != '')

		{

			$this->db->where("id",$id);
			$query = $this->db->get();
			$result = $query->row_array();
		}
		return $result;
    }

	public function add_record($ImgData){

		$set_data = array(
                        'country_id'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('country_id')),
                        'state_id'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('state_id')),
						'district'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('district')),
						'created_time'=>date('Y-m-d H:i:s'),
						'status' =>1
					);

		$result = $this->db->insert($this->table_name, $set_data); 

		return $result;

	}



	public function update_record($id,$ImgData){

		$set_data = array(
        
					 'country_id'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('country_id')),
                        'state_id'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('state_id')),
						'district'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('district')),
						'updated_time'=>date('Y-m-d H:i:s'),
						);

		$this->db->where('id',$id);
		$result = $this->db->update($this->table_name, $set_data);
		return $result;
	}

	public function delete_record($id)
	{
		$this->db->where('id',$id);
		$result = $this->db->delete($this->table_name); 
		return $result;
	}
    
	public function status_record($id,$status){
		$sts = ($status == 1 ? 0 : 1);
		$set_data = array(
						'status' => $sts
					);
		$this->db->where('id',$id);
		$result = $this->db->update($this->table_name, $set_data); 
		return $result;
	}

	public function get_mysqli()
	{
	   $db = (array)get_instance()->db;
	   return mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
	}

}

?>
