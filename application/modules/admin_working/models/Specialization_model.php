<?php 

class Specialization_model extends CI_Model {

	public $table_name = 'tbl_specialization';

	public function __construct() 
	{
        parent::__construct();
    }

	
    public function get_all_heighsteducations() 
    {
        $this->db->select("id,heighsteducation");
		$this->db->from('tbl_heighsteducation');
		$this->db->order_by('heighsteducation','asc');
		$this->db->where('status','1');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }
    public function get_all_degrees_ajax($id) 
		{
    		$this->db->select("*");
    		$this->db->from('tbl_educationdegree');
    		$this->db->where('status','1');
    		$this->db->where("hid",$id);
    		$query = $this->db->get();
    		$result = $query->result_array();
    		return $result;
	    }
	     public function get_all_degrees() 
		{
    		$this->db->select("id,educationdegree");
    		$this->db->from('tbl_educationdegree');
    		$this->db->where('status','1');
    		$query = $this->db->get();
    		$result = $query->result_array();
    		return $result;
	    }
     public function get_all_records() 
    {
        $this->db->select("s.*");
		$this->db->from('tbl_specialization as s');
		$this->db->select("h.heighsteducation");
		$this->db->join('tbl_heighsteducation as h','s.hid=h.id','inner');
		$this->db->select("e.educationdegree");
		$this->db->join('tbl_educationdegree as e','s.eid=e.id','inner');
		$this->db->order_by('s.id','asc');
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
                        'hid'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('hid')),
                        'eid'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('eid')),
						'specialization'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('specialization')),
						'created_time'=>date('Y-m-d H:i:s'),
						'status' =>1
					);

		$result = $this->db->insert($this->table_name, $set_data); 

		return $result;

	}



	public function update_record($id,$ImgData){

		$set_data = array(
        
					 'hid'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('hid')),
                    'eid'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('eid')),
					'specialization'=> mysqli_real_escape_string($this->get_mysqli(),$this->input->post('specialization')),
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
