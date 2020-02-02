<?php 

class Degree_model extends CI_Model {

	public $table_name = 'tbl_educationdegree';

	public function __construct() 
	{
        parent::__construct();
    }
    public function get_all_heighsteducations() 
    {
        $this->db->select("*");
		$this->db->from('tbl_heighsteducation');
		$this->db->order_by('heighsteducation','asc');
		$this->db->where('status','1');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }
     public function get_all_records() 
    {
        $this->db->select("e.*");
		$this->db->from('tbl_educationdegree as e');
		$this->db->select("h.heighsteducation");
		$this->db->join('tbl_heighsteducation as h','e.hid=h.id','inner');
		$this->db->order_by('e.id','asc');
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
                        'hid'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('education_id')),
						'educationdegree'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('degree')),
						'created_time'=>date('Y-m-d H:i:s'),
						'status' =>1
					);

		$result = $this->db->insert($this->table_name, $set_data); 

		return $result;

	}



	public function update_record($id,$ImgData){

		$set_data = array(
        
						 'hid'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('education_id')),
						'educationdegree'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('degree')),
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
